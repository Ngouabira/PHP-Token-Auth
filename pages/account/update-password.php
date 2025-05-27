<?php

if (isset($_POST['updatePassword'])) {
    $id = $_SESSION['user_id'];
    $password = $_POST['password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    $user = $dbConnection->query("SELECT * FROM user WHERE id = $id")->fetch();



    $error = array();
    $message = "";

    if (empty($password) || empty($new_password) || empty($confirm_password)) {
        $error[] = "Veuillez remplir tous les champs";
    }

    if ($new_password !== $confirm_password) {
        $error[] = "Les mots de passe ne correspondent pas";
    }

    if (!password_verify($password, $user['password'])) {
        $error[] = "Mot de passe incorrect";
    }

    if (empty($error)) {
        $password = password_hash($new_password, PASSWORD_DEFAULT);
        $dbConnection->query("UPDATE user SET password = '$password' WHERE id = $id");
        $message = "Mot de passe mis à jour avec succès";
    }
}
