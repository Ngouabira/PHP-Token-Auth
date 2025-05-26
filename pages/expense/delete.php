<?php

require_once '../../feature/db_connection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM expense WHERE id = ?";
    $stmt = $dbConnection->prepare($sql);
    $stmt->execute([$id]);
    header("Location: /expense");
}
