<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sites Populares </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }
    </style>
</head>

<body class="d-flex flex-column align-items-center justify-content-center" style="min-height:100vh">
    <?php
    include("banco.php");
    $sql = "SELECT * FROM sitespopulares";
    $res = $conn->query($sql);
    ?>
    <div class="container">
        <div class="row gy-3">

            <div class="col-12">
                <h2 class="text-white text-center mt-3 mb-3"> Lista dos Sites de empego</h2>
                <div class="row gy-5">



                    <?php

                    $qtd = $res->num_rows;
                    if ($qtd > 0) {



                        while ($row = $res->fetch_object()) { ?> 
                            <div class="col-lg-8 offset-lg-2">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-12 p-3 text-center">
                                            <img src="<?="img/$row->logo" ?>" class="h-15 rounded mx-auto" alt="">
                                            <h3> <?= $row->NomeSite ?></h3>
                                        </div>
                                        
                                        <div class="col-12 ps-4 pe-4 pt-2  text-center pb-2"><a href="<?= $row->URL ?>"><?= $row->URL ?></a></div>
                                        <div class="col-6 ps-4 pe-4 text-center  pt-2 pb-2">
                                            <h5>Média de Custo de Utilização:<br> R$ <?= number_format($row->CustoUtilizacao, 2, ',', '.') ?></h5>
                                        </div>
                                        <div class="col-6 ps-4 pe-4  text-center pt-2 pb-2">
                                            <h5> Salário Médio:<br>R$ <?= number_format($row->Salario, 2, ',', '.') ?></h5>
                                        </div>
                                        <div class="col-12 ps-4 pe-4 pt-2 pb-2">
                                            <td colspan="1"><?= $row->Caracteristicas ?> </td>
                                        </div>
                                        <div class="col-12 ps-4 pe-4 pt-2 pb-2">
                                            <p><?= $row->Requisitos ?></p>
                                        </div>
                                        <div class="col-lg-6 ps-4 pe-4 pt-2 pb-5">
                                            <b class="text-justify"> - <?= $row->Vantagens ?></b>
                                        </div>
                                        <div class="col-lg-6 ps-4 pe-4 pt-2 pb-5">
                                            <b class="text-justify"> - <?= $row->Desvantagens ?> </b>
                                        </div>

                                    </div>




                                </div>

                            </div>


                        <?php
                        }
                    } else { ?>

                        <h1>Não possui nenhum registro de site</h1>

                    <?php } ?>

                </div>
            </div>
            <div class="col-12">

                <h2 class="text-center text-white">Média Salárial X Custo</h4>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Média Salárial </h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">

                                <span></span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i>
                                </span>
                                <span class="text-muted"></span>
                            </p>
                        </div>

                        <div class="position-relative mb-4">
                            <canvas id="chart-salario" style="height:60vh;"></canvas>
                        </div>
                        <div class="d-flex flex-row justify-content-end">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-3">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Média de Custo do plano pago</h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">

                                <span></span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i>
                                </span>
                                <span class="text-muted"></span>
                            </p>
                        </div>

                        <div class="position-relative mb-4">
                            <canvas id="chart-custo" style="height:60vh;"></canvas>
                        </div>
                        <div class="d-flex flex-row justify-content-end">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>