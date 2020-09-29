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
              <a class="nav-link" href="cadastrodeclientes.php">Cadastro de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrodeprodutos.php">Cadastro de Produtos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listadeprodutos.php">Produtos</a>
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
   <h1 class="text-center">Produtos selecionados</h1>
	
	<?php 
	
	require_once 'funcoes.php';
	session_start();
	
	if (!isset($_SESSION['fcompra'])) {
	    $_SESSION['fcompra'] = array();
	}
	
	if (isset($_GET['id'])) {
	    $id = $_GET['id'];
	    $produto = carregarProduto($id);	
	    
	    array_push($_SESSION['fcompra'], $produto);
	    
	}	
	//print_r($_SESSION['carrinho']);
	?>
	
	</br>
	<h4>Relação dos produtos comprados:</h4>
	</br>
	
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
	
		<button onclick= "window.location.href='index.php'">Voltar à página inicial</button>
        
</main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_files/popper.js"></script>
    <script src="Sticky%20Footer%20Navbar%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
  

</body></html>