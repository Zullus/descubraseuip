<?php

session_start();

include 'ip.php';

//include 'db.php';

?>

<!DOCTYPE html>
<html lang="pt-br" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="UTF-8">
    <meta name="revisit-after" content="4">
    <meta name="ROBOTS" content="all">
    <meta name="audience" content="all">
    <meta name="ABSTRACT" content="">
    <meta name="OWNER" content="xsinformatica@xsinformatica.com.br">
    <meta name="AUTHOR" content="www.xsinformatica.com.br - XS Informática">
    <meta name="COPYRIGHT" content="XS Informática ">
    <meta name="DISTRIBUTION" content="global">
    <meta name="RATING" content="General">
    <meta name="RESOURCE-TYPE" content="document">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descubra o seu IP!">
    <link rel="icon" href="faveicon.ico">

    <link rel="canonical" href="http://meuip.xsinformatica.com.br/" />

    <title>Descubra Seu IP, por XS Informática</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

  </head>

  <body>

    <?php
    include 'navebar.php';
    ?>

    <div class="container">

      <div class="starter-template">

        <img src="images/logoxs.png" alt="Descubra Seu IP, por XS Informática" titla="Descubra Seu IP, por XS Informática">
        <h1 title="Descubra Seu IP, por XS Informática">Sobre o Descubra Seu IP, por XS Informática</h1>
        <span class="lead">
          <p>
            <strong>O seu IP é:</strong> <em><?php echo $ip;?></em>
          </p>

          <p>
            <strong>O seu IP reverso é:</strong> <em><?php echo $hostname?></em>
          </p>
        </span>
      </div>

    </div><!-- /.container -->

    <footer class="footer">
        <div class="container">
          <p class="text-muted">
            Conheça nosso site: <a href="http://xsinformatica.com.br" title="XS Informattica">http://xsinformatica.com.br</a>
          </p>
        </div>
      </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/ga.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>
