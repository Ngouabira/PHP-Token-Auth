<?php

if (isset($_POST['updateProfile'])) {
    $id = $_SESSION['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $error = array();
    $message = "";

    if (empty($username) || empty($email)) {
        $error[] = "Veuillez remplir tous les champs";
    }

    if (empty($error)) {
        $sql = "UPDATE user SET username = ?, email = ? WHERE id = ?";
        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$username, $email, $id]);
        $message = "Vos informations ont été mises à jour avec succès";
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
    }
}
