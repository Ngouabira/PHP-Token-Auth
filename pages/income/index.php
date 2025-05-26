<?php
require_once '../../feature/check_auth.php';
require_once '../../partials/header.php';
require_once '../../partials/sidebar.php';

?>

<?php

require_once '../../feature/db_connection.php';

$sql = "SELECT * FROM income";
$stmt = $dbConnection->prepare($sql);
$stmt->execute();
$incomes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>




<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <?php require_once '../../partials/navbar.php'; ?>



            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light"><a href="/home">Accueil</a> /</span> Mes revenus
                    </h4>

                    <a href="/income/create" class="btn btn-primary fl">Ajouter un revenu</a>

                    <div class="col-xl mt-1">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Libellé</th>
                                                <th>Montant</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($incomes as $income) : ?>
                                                <tr>
                                                    <td><?php echo $income['label']; ?></td>
                                                    <td><?php echo $income['amount']; ?></td>
                                                    <td><?php echo date('d/m/Y', strtotime($income['income_date'])); ?></td>
                                                    <td><?php echo $income['description']; ?></td>
                                                    <td>
                                                        <a href="/income/edit-<?php echo $income['id']; ?>" class="btn btn-primary">Modifier</a>
                                                        <a href="/income/delete/<?php echo $income['id']; ?>" class="btn btn-danger">Supprimer</a>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>


                    </div>
                </div>



                <?php require_once '../../partials/footer.php'; ?>
            </div>
        </div>
    </div>