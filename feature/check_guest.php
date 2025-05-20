<?php
require_once 'rember-me.php';

if (isset($_SESSION['user_id'])) {
    header("Location: /");
    exit();
}
