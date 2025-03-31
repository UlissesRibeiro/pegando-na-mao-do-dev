<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab | Linux</title>

    <link rel="stylesheet" href="../css/style.css">

<?php
include '../includes/navbar.php';
include '../includes/fonts.php';
include '../includes/bootstrap.php';
?>
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        pre {
            background-color: #2d2d2d;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            font-family: "Courier New", monospace;
        }
    </style>
    <div class="container py-5">
        <div class="row align-items-start"> 
            <!-- Div do IFRAME -->
            <div class="col-md-7">
                <iframe src="http://localhost:4200" frameborder="0" width="100%" height="480" style="border:2px solid;"></iframe>
                <a class="btn btn-danger mt-3" href="../scripts-php/delete_lab_linux.php">Encerrar lab</a>
            </div>

            <!-- Div do TEXTO -->
            <div class="col-md-5">
                <iframe src="../docs/doc_lab_linux.php" frameborder="0" width="100%" height="480"></iframe>
                <!--<h2>Ambiente de Laboratório</h2>
                <p>
                    Nesse ambiente, já iniciamos como usuário <b>root</b>, precisamos saber em qual path estamos, para isso execute o comando a seguir :
    
                    <pre>pwd</pre>
                </p>
                <p>
                   Veja que esta no path <b> / </b>, que é a raiz do sistema operacional, fazendo uma relação direta ao Windows, é equivalente ao <b>c:\</b>.
                   Agora use o próximo comando para visualizar o que tem dentro do path <b> / </b> :

                   <pre>ls</pre>
                </p>-->
                <p>
                    Utilize o painel ao lado para acessar seu ambiente. Quando terminar, clique no botão "Encerrar lab" para finalizar a sessão.
                </p>
                
            </div>
        </div>
    </div>
</body>

</html>