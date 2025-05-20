<?php
session_start();
require_once 'db_connection.php';

if (isset($_COOKIE['token'])) {
    $token = $_COOKIE['token'];

    $sql = "SELECT * FROM auth_token WHERE token = ?";
    $stmt = $dbConnection->prepare($sql);
    $stmt->execute([$token]);
    $auth_token = $stmt->fetch();

    if ($auth_token) {
        if ($auth_token['created_at'] + 3600 > time()) {
            if (!isset($_SESSION['user_id'])) {
                $_SESSION['user_id'] = $auth_token['user_id'];
            }
        }
    }
}
