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
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
        
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
              <a class="nav-link " href="cadastrodevendedores.php">Cadastro de Vendedores</a>
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

  <body class="text-center">
    
    <form class="form-signin">
          <img class="mb-4" src="css/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">LOGAR</h1>
          <label for="inputEmail" class="sr-only">Endereço de Email</label>
          <input
          type="email"
          id="inputEmail"
          class="form-control"
          placeholder="Endereco de Email"
          required=""
          autofocus="">
          
          <label for="inputPassword" class="sr-only">Senha</label>
          <input
          type="password"
          id="inputPassword"
          class="form-control"
          placeholder="Senha"
          required="">
          
          <div class="checkbox mb-3">
                <label>
                  	<input type="checkbox" value="remember-me"> Lembrar Senha
                </label>
          </div>
          
          <button
          	type="submit"
			class="btn btn-primary btn-block"
			onclick="window.location.href='compra.php'; return false;">Logar</button>
			
			</br>
			<a href="cadastrodeclientes.php">Não possui login</a>
			
          <!--<button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
           <p class="mt-5 mb-3 text-muted">Â© 2017-2018</p> -->
    </form>
  

</body>
     	
    
    
    </main>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/bootstrap.min.js.download"></script>
  

</body>
</html>
