<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecpi_em";

$dbConnection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
