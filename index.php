<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sites Populares </title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
        <div class="row">
            <div class="col-lg-6">
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
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Custo do plano pago</h3>

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
            <div class="col-12">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome Do site</th>
                            <th scope="col">Url</th>
                            <th scope="col">Custo</th>
                            <th scope="col">Requisitos</th>
                            <th scope="col">Salário</th>
                            <th scope="col">Tipo do trabalho</th>
                            <th scope="col">Caracteristicas</th>
                            <th scope="col">Vantagens</th>
                            <th scope="col">Desvantagens</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $qtd = $res->num_rows;
                        if ($qtd > 0) {



                            while ($row = $res->fetch_object()) { ?>
                                <tr>
                                    <th scope="row"><?= $row->SiteID ?> </th>
                                    <td colspan="1"><?= $row->NomeSite ?> </td>
                                    <td><a href="<?= $row->URL ?>"><?= $row->URL ?></a></td>
                                    <td colspan="1">R$ <?= number_format($row->CustoUtilizacao, 2, ',', '.') ?> </td>
                                    <td><?= $row->Requisitos ?></td>
                                    <td colspan="1"> <?= $row->Salario ?> </td>
                                    <td><?= $row->TipoTrabalho ?></td>
                                    <td colspan="1"><?= $row->Caracteristicas ?> </td>
                                    <td><?= $row->Vantagens ?></td>
                                    <td colspan="1"><?= $row->Desvantagens ?> </td>

                                </tr>

                            <?php
                            }
                        } else { ?>

                            <td colspan="11">Não possui nenhum registro de site</td>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>