<?php
require_once '../../feature/check_auth.php';
require_once '../../partials/header.php';
require_once '../../partials/sidebar.php';

?>

<?php

require_once '../../feature/db_connection.php';

require_once 'upload-picture.php';
require_once 'update-profile.php';
require_once 'update-password.php';


?>




<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <?php require_once '../../partials/navbar.php'; ?>



            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light"><a href="/home">Accueil</a> /</span> Profil
                    </h4>


                    <div class="col-xl mt-1">

                        <?php if (isset($message) && !empty($message)) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo $message; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($error) && !empty($error)) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <?php foreach ($error as $e) : ?>
                                    <p><?php echo $e; ?></p>
                                <?php endforeach; ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                        <div class="card mb-4">
                            <h5 class="card-header">Informations du profil</h5>
                            <!-- Account -->
                            <div class="card-body">
                                <div class="d-flex align-items-start align-items-sm-center gap-4">
                                    <img src="<?php echo !empty($_SESSION['user_picture']) ? "../../picture/" . $_SESSION['user_picture'] : '../assets/img/avatars/1.png'; ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                                    <div class="button-wrapper">
                                        <form action="/profile" method="POST" enctype="multipart/form-data">


                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Choisir la photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input name="picture" type="file" id="upload" class="account-file-input" hidden="" accept="image/png, image/jpeg">
                                            </label>
                                            <button type="submit" name="updatePicture" class="btn btn-success me-2 mb-4">Valider</button>




                                            <p class="text-muted mb-0">Autoriser JPG, GIF ou PNG. Taille maximale de 800K</p>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-0">
                            <div class="card-body">
                                <form id="formAccountSettings" method="POST" action="/profile">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label for="username" class="form-label">Nom compet</label>
                                            <input class="form-control" type="text" id="username" name="username" value="<?php echo $_SESSION['username']; ?>" autofocus="">
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="email" class="form-label">E-mail</label>
                                            <input class="form-control" type="text" id="email" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="john.doe@example.com">
                                        </div>

                                        <div class="mt-2">
                                            <button name="updateProfile" type="submit" class="btn btn-primary me-2">Mettre à jour</button>
                                        </div>
                                </form>
                            </div>

                            <hr class="my-0 mt-4">
                            <h5 class="card-header">Changer le mot de passe</h5>
                            <div class="card-body">
                                <form method="POST" action="/profile">
                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <label for="password" class="form-label">Mot de passe actuel</label>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Mot de passe">
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="new_password" class="form-label">Nouveau mot de passe</label>
                                            <input class="form-control" type="password" id="new_password" name="new_password" placeholder="Nouveau mot de passe">
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label for="confirm_password" class="form-label">Confirmer le nouveau mot de passe</label>
                                            <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Confirmer le nouveau mot de passe">
                                        </div>

                                        <div class="mt-2">
                                            <button name="updatePassword" type="submit" class="btn btn-primary me-2">Mettre à jour</button>
                                        </div>
                                </form>
                            </div>
                            <!-- /Account -->
                        </div>



                    </div>
                </div>



                <?php require_once '../../partials/footer.php'; ?>
            </div>
        </div>
    </div>

    <script>
        const upload = document.getElementById('upload');
        const uploadedAvatar = document.getElementById('uploadedAvatar');

        upload.addEventListener('change', (e) => {
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.onload = function(e) {
                uploadedAvatar.src = e.target.result;
            };
            reader.readAsDataURL(file);
        });
    </script>