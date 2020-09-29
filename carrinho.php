
<!DOCTYPE html>
<!-- saved from url=(0063)http://getbootstrap.com/docs/4.1/examples/sticky-footer-navbar/ -->
<html lang="en">

<head>
	<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);
    ?>
	
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<link rel="icon" href="ico.png">

<title>Sistema de Vendas</title>

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>

<header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="index.php">Sistema de Vendas</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<li class="nav-item">
<a class="nav-link" href="cadastrodeclientes.php">Cadastro de Clientes</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cadastrodeprodutos.php">Cadastro de Produtos</a>
</li>
<li class="nav-item">
<li class="nav-item">
<a class="nav-link " href="listadeprodutos.php">Produtos</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cadastrodevendedores.php">Cadastro de Vendedores</a>
</li>

<li class="nav-item">
<a class="nav-link" href="carrinho.php">Carrinho</a>
</li>

<li class="nav-item">
<a class="nav-link" href="login.php">Login</a>
      </li>
          </ul>
       </div>
      </nav>
    </header>

<!-- Begin page content -->
<main role="main" class="container">

</br>
<h1 class="text-center">Produtos adicionados ao carrinho</h1>
</br>
	
	<?php 
	
	require_once 'funcoes.php';
	session_start();
	
	if (!isset($_SESSION['carrinho']))
	{
	    $_SESSION['carrinho'] = array();
	}
	
	if (isset($_GET['id']))
	{
	    $id = $_GET['id'];
	    $produto = carregarProduto($id);	
	    
	    array_push($_SESSION['carrinho'], $produto);
	    
	}
	
	if (isset($_GET['acao']))
	{
	    $_SESSION['carrinho'] = array();
	}
		
	//print_r($_SESSION['carrinho']);
	?>
	
	<table class="table table-striped">
		<tr>
			<th>Descrição</th>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Origem</th>
			<th>Preço</th>
		</tr>

		<?php 
			     
		foreach ($_SESSION['carrinho'] as $produto) {
			         
			?>
		<tr>
			<td><?php echo $produto['produto']?></td>
			<td><?php echo $produto['marca']?></td>
			<td><?php echo $produto['modelo']?></td>
			<td><?php echo $produto['origem']?></td>
			<td><?php echo $produto['precov']?></td>
			</tr>
		<?php 
		
			     }
			     
			     ?>

	</table>
	
	</br> 
	
		<button onclick= "window.location.href='login.php'">Finalizar Compra</button> &nbsp; &nbsp;
		
		<button onclick="window.location.href='listadeprodutos.php'">Escolher outro produto</button> &nbsp; &nbsp;
		
		<button onclick="window.location.href='carrinho.php?acao=limpar'">Limpar Carrinho</button>
        
    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/bootstrap.min.js.download"></script>
  

</body></html>