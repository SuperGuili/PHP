<?php
	require "funcoes.php";
?>

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

<form action="cadastrodevendedores.php" method="post"> 

<?php	    
	$vendedor = null;

    if (isset($_POST['cadastrar']))
        {
        if ($_POST['id'] == '')
        {
            $msg = salvarVendedor($_POST);
            header("Refresh:0");
        }
        else
        {
            $msg = alterarVendedor($_POST);
        }
    
    echo $msg;
}
if (isset($_GET['acao']))
{
    $id = $_GET['id'];
    
    if($_GET['acao'] == 'alterar')
    {
        $vendedor = carregarVendedor($id);
    }
    else
        {
            $msg = excluirVendedor($id);
        }
        
    }
?>     
     
     
     <h1 class="text-center"></br>Cadastro de Vendedores</h1>
      </br>  
    
<div class="form-row">
	<div class="col-7">
	
		<input type="hidden" name="id"	value="<?php echo $vendedor['id']?>">
	
    	<label for="Inputvendedor">Vendedor</label>
        <input
        type="text"
        name="nomevendedor"
        class="form-control"
        id="inputnome"
        aria-describedby="nomevendedor"
        placeholder="Digite o nome do vendedor"
        value = <?php echo $vendedor['nomevendedor']?>>
    </div>
    
    <div class="col-3">
    	<label for="inputcodigo">Código do Vendedor</label>
        <input
        type="text"
        name="codigovendedor"
        class="form-control"
        id="inputcodigo"
        aria-describedby="codigovendedor"
        placeholder="Digite o código do vendedor"
        value = <?php echo $vendedor['codigovendedor']?>>
    </div>
      
    <div class="col-2">
       	<label for="Inputcomissao">Comissão</label>
       	<input
       	type="decimal"
       	name="comissao"
       	class="form-control"
       	id="inputcomissao"
       	aria-describedby="comissao"
       	placeholder="Digite a comissao"
       	value = <?php echo $vendedor['comissao']?>>
    </div>
</div>

  
  
  </br>
  <button type="submit" name="cadastrar" value="cadastrar" class="btn btn-primary">Cadastrar</button>
  </br></br>

 </form>
  
    <table class="table table-striped">
	    <tr>
	    	<th>Nome</th>
	    	<th>Código</th>
	    	<th>Comissão (%)</th>
	    	
	    	<th>&nbsp;</th>
	    	<th>&nbsp;</th>
	    
	    </tr>
	    
	    <?php
    	   	   $vendedores = listarVendedores();
    	   	   foreach ($vendedores as $vendedor)
    	   	   {
    	   	  ?>
    	   	<tr>
				<td><?php echo $vendedor['nomevendedor'];?></td>
				<td><?php echo $vendedor['codigovendedor'];?></td>
				<td><?php echo $vendedor['comissao'];?></td>
				
				<td><button onclick="window.location.href='cadastrodevendedores.php?acao=alterar&id=<?php echo $vendedor['id']?>'">Alterar</button></td>
				<td>
				<button onclick="ret = confirm('deseja excluir?');
				if(ret) {window.location.href='cadastrodevendedores.php?acao=excluir&id=<?php echo $vendedor['id']?>'}">Excluir</button> 
				</td>				

			</tr>
			
			<?php
    	   	   }
			?>	    
	    
	        
    </table>
    
    
    
    
    </main>

   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/jquery-3.3.1.slim.min.js.download" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/popper.min.js.download"></script>
    <script src="./Sticky Footer Navbar Template for Bootstrap_files/bootstrap.min.js.download"></script>
  

</body></html>