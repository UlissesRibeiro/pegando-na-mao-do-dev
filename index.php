<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pegando na mão do Dev</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="scripts-js/loading.js"></script>
<?php
include 'includes/navbar.php';
include 'includes/fonts.php';
include 'includes/bootstrap.php';
?>
</head>

<body>

<section class="container py-5" id="labs">
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <i class="bi bi-pc-display-horizontal"></i> Laboratório - Linux
                </div>
                <div class="card-body">
                    <h5 class="card-title">Aprendendo Linux</h5>
                    <p class="card-text">Aqui você terá um ambiente isolado para estudar Linux, sem medo de quebrar sua máquina real.</p>
                    <a href="scripts-php/create_lab_linux.php" class="btn btn-primary" onclick="showLoading()">Criar Lab - Linux</a>
                    <p id="loading"><img src="imgs/loading.gif"><br>
                        ⏳ Criando ambiente... Aguarde...</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-header">
                    <i class="bi bi-cloud"></i> Laboratório - Docker
                </div>
                <div class="card-body">
                    <h5 class="card-title">Aprendendo Docker</h5>
                    <p class="card-text">Suba containers, experimente serviços e aprenda sobre orquestração de forma prática.</p>
                    <a href="create_lab_docker.php" class="btn btn-primary">Criar Lab - Docker</a>
                </div>
            </div>
        </div>

    </div>
</section>

</body>
</html>

