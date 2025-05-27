<?php

if (isset($_POST['updatePicture'])) {
    $id = $_SESSION['user_id'];
    $picture = $_FILES['picture'];
    $picture_name = $picture['name'];
    $picture_tmp_name = $picture['tmp_name'];
    $picture_size = $picture['size'];

    $error = array();
    $message = "";

    if ($picture_size > 2097152) {
        $error[] = "La taille de l'image est trop grande";
    }


    if (empty($error)) {

        $sql = "UPDATE user SET picture = ? WHERE id = ?";
        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$picture_name, $id]);

        $_SESSION['user_picture'] = $picture_name;

        move_uploaded_file($picture_tmp_name, "../../picture/" . $picture_name);
        $message = "L'image a été mise à jour avec succès";
    }
}
