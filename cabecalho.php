<?php 
error_reporting(E_ALL ^ E_NOTICE);
include("mostra-alerta.php"); ?>
<html>
<head>
    <title>Distribuidora Goen</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
</head>

<body>
	   <ul class="nav">
  			<li class="nav-item">
    			<a class="nav-link active" href="index.php"><h1>PÁGINA INICIAL</h1></a>
  			</li>
 			<li class="nav-item">
    			<a class="nav-link" href="produto-formulario.php"><h1>ADICIONA PRODUTO</h1></a>
  			</li>
        <li class="nav-item">
          <a class="nav-link" href="adiciona-categoria-formulario.php"><h1>ADICIONA CATEGORIA</h1></a>
        </li>
  			<li class="nav-item">
    			<a class="nav-link" href="estoque.php"><h1>MEU ESTOQUE</h1></a>
  			</li>
        <li class="nav-item">
          <a class="nav-link" href="pedido-formulario.php"><h1>PEDIDO</h1></a>
        </li>
    <div class="container">

        <div class="principal">
          <?php mostraAlerta("success"); ?>
          <?php mostraAlerta("danger"); ?>
      
