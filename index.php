<?php
require_once 'feature/check_auth.php';
require_once 'partials/header.php';
require_once 'partials/sidebar.php';

require_once 'feature/db_connection.php';

$chartData = [];
$chartLabels = [
    'Janvier',
    'Février',
    'Mars',
    'Avril',
    'Mai',
    'Juin',
    'Juillet',
    'Août',
    'Septembre',
    'Octobre',
    'Novembre',
    'Décembre'
];

$incomeChartData = $dbConnection->query("SELECT SUM(amount) as total, MONTH(income_date) as month FROM income WHERE YEAR(income_date) = YEAR(CURRENT_DATE()) GROUP BY MONTH(income_date)")->fetchAll();

$expenseChartData = $dbConnection->query("SELECT SUM(amount) as total, MONTH(expense_date) as month FROM expense WHERE YEAR(expense_date) = YEAR(CURRENT_DATE()) GROUP BY MONTH(expense_date)")->fetchAll();

$chartLabels = array_map(function ($item) {
    return $item['month'];
}, $incomeChartData);

$chartData = array_map(function ($item) {
    return $item['total'];
}, $incomeChartData);

$expenseChartData = array_map(function ($item) {
    return $item['total'];
}, $expenseChartData);

//Total des revenus du mois en cours
$TotalIcome = $dbConnection->query("SELECT SUM(amount) as total FROM income WHERE MONTH(income_date) = MONTH(CURRENT_DATE()) AND YEAR(income_date) = YEAR(CURRENT_DATE())")->fetch();

//Total des dépenses du mois en cours
$TotalExpense = $dbConnection->query("SELECT SUM(amount) as total FROM expense WHERE MONTH(expense_date) = MONTH(CURRENT_DATE()) AND YEAR(expense_date) = YEAR(CURRENT_DATE())")->fetch();

?>

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            <?php require_once 'partials/navbar.php'; ?>



            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">
                        <span class="text-muted fw-light">Tableau de bord</span>
                    </h4>


                    <div class="row">
                        <div class="col-lg-8 mb-4 order-0">
                            <div class="card">
                                <div class="d-flex align-items-end row">
                                    <div class="col-sm-7">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">Bienvenue sur votre tableau de bord</h5>
                                            <p class="mb-4">
                                                Gérez facilement vos finances personnelles avec notre application. Suivez vos revenus et dépenses,
                                                analysez vos tendances et prenez le contrôle de votre budget.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="col-sm-5 text-center text-sm-left">
                                        <div class="card-body pb-0 px-0 px-md-4">
                                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 order-1">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/wallet-info.png" alt="chart success" class="rounded">
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Revenus</span>
                                            <h6 class="card-title mb-2"><?php echo $TotalIcome['total']; ?> FCFA</h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12 col-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-flex align-items-start justify-content-between">
                                                <div class="avatar flex-shrink-0">
                                                    <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded">
                                                </div>
                                            </div>
                                            <span class="fw-semibold d-block mb-1">Dépenses</span>
                                            <h6 class="card-title mb-2"><?php echo $TotalExpense['total']; ?> FCFA</h6>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Total Revenue -->
                    <div class="col-12 col-lg-12 order-2 order-md-3 order-lg-2 mb-4">
                        <div class="card">
                            <div class="row row-bordered g-0">

                                <div id="chart"></div>

                            </div>
                        </div>
                    </div>

                </div>




            </div>
        </div>



        <?php require_once 'partials/footer.php'; ?>
    </div>
</div>
</div>

<script>
    var options = {
        series: [{
                name: 'Revenus',
                data: <?php echo json_encode($chartData); ?>
            },
            {
                name: 'Dépenses',
                data: <?php echo json_encode($expenseChartData); ?>
            }
        ],
        chart: {
            type: 'bar',
        },
        stroke: {
            curve: 'smooth'
        },
        xaxis: {
            categories: <?php echo json_encode($chartLabels); ?>
        }
    };
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>