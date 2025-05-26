<?php
require_once '../../feature/check_auth.php';
require_once '../../partials/header.php';
require_once '../../partials/sidebar.php';

?>

<?php

require_once '../../feature/db_connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM income WHERE id = ?";
$stmt = $dbConnection->prepare($sql);
$stmt->execute([$id]);
$income = $stmt->fetch(PDO::FETCH_ASSOC);


if (isset($_POST['submit'])) {
    $label = $_POST['label'];
    $amount = $_POST['amount'];
    $income_date = $_POST['income_date'];
    $description = $_POST['description'];

    $error = null;

    if (empty($label) || empty($amount) || empty($income_date)) {
        $error = "Veuillez remplir tous les champs";
    }

    if ($error == null) {

        $sql = "UPDATE income SET label = ?, amount = ?, income_date = ?, description = ? WHERE id = ?";
        $stmt = $dbConnection->prepare($sql);
        $stmt->execute([$label, $amount, $income_date, $description, $id]);
        echo "<script>
    window.location.href = '/income';
</script>";
    }
}

?>


<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <?php require_once '../../partials/navbar.php'; ?>



            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light"><a href="/income">Mes revenus</a> /</span> Modifier un revenu
                    </h4>

                    <div class="col-xl">
                        <div class="card mb-4">
                            <div class="card-body">
                                <?php if (isset($error) && $error != null) : ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php echo $error; ?>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                                <form action="/income/edit-<?php echo $income['id']; ?>" method="post">
                                    <div class="mb-3">
                                        <label class="form-label" for="label">Libellé <span class="text-danger">*</span></label>
                                        <input value="<?php echo $income['label']; ?>" type="text" name="label" class="form-control" id="label" placeholder="Salaire mois...">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="amount">Montant <span class="text-danger">*</span></label>
                                        <input value="<?php echo $income['amount']; ?>" type="number" name="amount" class="form-control" id="amount" placeholder="Montant">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="date">Date <span class="text-danger">*</span></label>
                                        <div class="input-group input-group-merge">
                                            <input value="<?php echo $income['income_date']; ?>" type="date" name="income_date" class="form-control" placeholder="Date">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control" placeholder="Description"><?php echo $income['description']; ?></textarea>
                                    </div>

                                    <button name="submit" type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <?php require_once '../../partials/footer.php'; ?>
        </div>
    </div>
</div>