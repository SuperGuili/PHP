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
    
         <h1 class="text-center"></br>Cadastro de Produtos</h1>
            
          </br>  
  
<?php	    
	$produto = null;

	if (isset($_POST['cadastrar']))
	   {
        if ($_POST['id'] == '')
        {
            $caminho_arquivo ="c:\\xampp\\htdocs\\vendas\\img\\";
            $nome_arquivo = $_FILES['foto']['name'];
            move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_arquivo.$nome_arquivo);
            $url = 'img/'.$nome_arquivo;
            
            $msg = salvarproduto($_POST, $url);
            header("Refresh:0");
        } 
        else
        {
            $msg = alterarProduto($_POST);
        }
    
    echo $msg;
}
if (isset($_GET['acao']))
{
    $id = $_GET['id'];
    
    if($_GET['acao'] == 'alterar')
    {
        $produto = carregarProduto($id);
    }
    else
    {
        $msg = excluirProduto($id);
    }
    
}

?> 
 
   <form action="cadastrodeprodutos.php" method="post" enctype="multipart/form-data">  
 
 
      <div class="form-row">
          	<div class="col-6">
          	
				<input type="hidden" name="id"	value="<?php echo $produto['id']?>">
				          	
                <label for="InputNome">Produto</label>
                <input
                    type="text"
                    name="produto"
                    class="form-control"
                    id="inputNome"
                    aria-describedby="produto"
                    placeholder="Digite o produto"
                    value = <?php echo $produto['produto']?>>
             </div>
             
             <div class="col-2">
                <label for="inputcodigo">Código do produto</label>
                <input
                    type="text"
                    name="codigoproduto"
                    class="form-control"
                    id="inputcodigo"
                    aria-describedby="codigoproduto"
                    placeholder="Código interno"
                    value = <?php echo $produto['codigoproduto']?>>
              </div>                  
                
              <div class="col-4">
                <label for="Inputmarca">Marca do produto</label>
                <input
                    type="text"
                    name="marca"
                    class="form-control"
                    id="inputmarca"
                    aria-describedby="marca"
                    placeholder="Digite a marca"
                    value = <?php echo $produto['marca']?>>              
              </div>
       </div>
                
      <div class="form-row">
         		<div class="col-9">
                 	<label for="Inputmodelo">Modelo do produto</label>
                  	<input
                      	type="text"
                      	name="modelo"
                      	class="form-control"
                      	id="inputmodelo"
                      	aria-describedby="Modelo"
                      	placeholder="Digite o modelo"
                      	value = <?php echo $produto['modelo']?>>
                </div>
                        
                <div class="col-3">
                    <label for="Inputorigem">Origem do produto</label>
                    <input
                        type="text"
                        name="origem"
                        class="form-control"
                        id="inputorigem"
                        aria-describedby="origem"
                        placeholder="Digite a origem"
                        value = <?php echo $produto['origem']?>>
                </div>
              
      </div>
              
      <div class="form-row">  
      		<div class="col-4">
            	<label for="Inputprecocompra">Preço de compra</label>
                <input
                    type="text"
                    name="precoc"
                    class="form-control"
                    id="inputprecocompra"
                    aria-describedby="precocompra"
                    placeholder="1.234,56"
                    value = <?php echo $produto['precoc']?>>
            </div>
            
            <div class="col-4">
                <label for="Inputprecovenda">Preço de venda</label>
                <input
                	type="text"
                    name="precov"
                    class="form-control"
                    id="inputprecovenda"
                    aria-describedby="precovenda"
                    placeholder="Exemplo 2.345,67"
                    value = <?php echo $produto['precov']?>>
            </div>
               
            <div class="col-4">
            	<label for="Inputquantidade">Quantidade</label>
                <input
                   	type="text"
                   	name="quantidade"
                   	class="form-control"
                   	id="inputquantidade"
                   	aria-describedby="Quantidade"
                   	placeholder="Digite a quantidade"
                   	value = <?php echo $produto['quantidade']?>>
           </div>
      </div>
                
      </br>         
      <div class="form-group">
      
      <label for="inputfoto">Cadastre uma foto para o produto</label>
      
      			<input
      				type="file"
      				name="foto"
      				class="form-control"
      				id="inputfoto">
      
      </div>
                
</br>
<button type="submit" name="cadastrar"class="btn btn-primary">Cadastrar</button>
</br></br>

	</form>
       
        
        
        <table class="table table-striped">
    	    <tr>
    	    	<th>Produto</th>
    	    	<th>Código</th>
    	    	<th>Marca</th>
    	    	<th>Modelo</th>
    	    	<th>Origem</th>
    	    	<th>Preço de compra</th>
    	    	<th>Preço de venda</th>
    	    	<th>Quantidade</th>
    	    	
    	    	<th>&nbsp;</th>
    	    	<th>&nbsp;</th>
    	    
    	    </tr>
    	    <?php
    	   	   $produtos = listarProdutos();
    	   	   foreach ($produtos as $produto)
    	   	   {
    	   	  ?>
    	   	<tr>
				<td><?php echo $produto['produto'];?></td>
				<td><?php echo $produto['codigoproduto'];?></td>
				<td><?php echo $produto['marca'];?></td>
				<td><?php echo $produto['modelo'];?></td>
				<td><?php echo $produto['origem'];?></td>
				<td><?php echo $produto['precoc'];?></td>
				<td><?php echo $produto['precov'];?></td>
				<td><?php echo $produto['quantidade'];?></td>
				
				
				<td><button onclick="window.location.href='cadastrodeprodutos.php?acao=alterar&id=<?php echo $produto['id']?>'">Alterar</button></td>
				
				<td>
				<button onclick="ret = confirm('deseja excluir?');
				if(ret) {window.location.href='cadastrodeprodutos.php?acao=excluir&id=<?php echo $produto['id']?>'}">excluir</button> 
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
  

	</body>
</html>