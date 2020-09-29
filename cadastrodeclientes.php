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

	<h1 class="text-center"></br>Cadastro de clientes</h1>
    </br>
    
    <form action="cadastrodeclientes.php" method="post">

<?php	    
	$cliente = null;

    if (isset($_POST['cadastrar']))
        {
        if ($_POST['id'] == '')
        {
            $msg = salvarCliente($_POST);
            header("Refresh:0");
        }
        else
        {
            $msg = alterarCliente($_POST);
        }
    
    echo $msg;
}
if (isset($_GET['acao']))
{
    $id = $_GET['id'];
    
    if($_GET['acao'] == 'alterar')
    {
        $cliente = carregarCliente($id);
    }
    else
        {
            $msg = excluirCliente($id);
        }
        
    }
?>
    

    
    <div class="form-row">
      		<div class="col-5">
          		<div class="form-group">
          	
          			<input type="hidden" name="id"	value="<?php echo $cliente['id']?>">
          		
          			<label for="InputNome">Nome</label>
               		<input
                		type="text"
                		maxlength="100"
                		name="nome"
                		class="form-control"
                		id="inputNome" 
                		aria-describedby="nome" 
                		placeholder="Digite seu nome"
                	value = <?php echo $cliente['nome']?>>
                	
            	</div>
        	</div>
    			<div class="col-5">
              		<div class="form-group">
              	      		
              			<label for="InputNome">Sobrenome</label>
                   		<input
                    		type="text"
                    		maxlength="100"
                    		name="sobrenome"
                    		class="form-control"
                    		id="inputSobrenome" 
                    		aria-describedby="sobrenome" 
                    		placeholder="Digite seu sobrenome"
                    	value = <?php echo $cliente['sobrenome']?>>
                    	
                	</div>
        		</div>
				<div class="col-2">
    				<div class="form-group">
                    	<label for="inputcpf">CPF</label>
                        <input
                            type="number:-webkit-inner-spin-button"
                            max="99999999999" 
                            name="cpf"
                            class="form-control"
                            id="inputcpf"
                            aria-describedby="cpf"
                            placeholder="Digite seu CPF"
                            value = <?php echo $cliente['cpf']?>>
                   </div>     
        		</div>
            	     
     </div>
  
    <div class="form-row">
    	<div class="col-2">
    		<div class="form-group">
    			<label for="Inputtelefone">Telefone</label>
      			<input
          			type="text"
          			maxlength="20"
          			name="telefone"
          			class="form-control"
          			id="inputtelefone"
          			aria-describedby="telefone"
          			placeholder="Digite seu telefone"
          			value = <?php echo $cliente['telefone']?>>
    		</div>
    	</div>
    	
        <div class="col-7">
        	<label for="InputLogradouro">Logradouro</label>
        	<input
            	type="text"
            	maxlength="200"
            	name="logradouro"
            	class="form-control"
            	id="inputLogradouro"
            	aria-describedby="Logradouro"
            	placeholder="Digite o Logradouro"
            	value = <?php echo $cliente['logradouro']?>>
        </div>
        
        <div class="col-3">
            <label for="InputNumero">Número</label>
            <input
                type="text"
                maxlength="10"
                name="numero"
                class="form-control"
                id="inputNumero"
                aria-describedby="numero"
                placeholder="Digite o numero"
                value = <?php echo $cliente['numero']?>>
        </div>
        
    </div>
   
    <div class="form-row">
     
		<div class="col-4">
        	<label for="InputBairro">Bairro</label>
            <input
              	type="text"
              	maxlength="50"
               	name="bairro"
               	class="form-control"
               	id="inputBairro"
               	aria-describedby="Bairro"
               	placeholder="Digite o Bairro"
               	value = <?php echo $cliente['bairro']?>>
            </div>
       
            <div class="col-4">
               	<label for="InputCidade">Cidade</label>
               	<input
                  	type="text"
                  	maxlength="50"
                  	name="cidade"
                  	class="form-control"
                  	id="inputCidade"
                  	aria-describedby="Cidade"
                  	placeholder="Digite a Cidade"
                  	value = <?php echo $cliente['cidade']?>>
            </div>
       
            <div class="col-4">
            	<label for="InputCEP">CEP</label>
                <input
                   	type="text"
                   	maxlength="10"
                   	name="cep"
                   	class="form-control"
                   	id="inputCEP"
                   	aria-describedby="CEP"
                   	placeholder="Digite o CEP"
                   	value = <?php echo $cliente['cep']?>>
           </div>
        </br>
	</div>
    

   </br>
  <button type="submit" class="btn btn-primary" name="cadastrar" value="cadastrar">Cadastrar</button>
  </br></br>
</form>
    
    <table class="table table-striped">
	    <tr>
	    	<th>Nome</th>
	    	<th>Sobrenome</th>
	    	<th>CPF</th>
	    	<th>Telefone</th>
	    	<th>Logradouro</th>
	    	<th>Número</th>
	    	<th>Bairro</th>
	    	<th>Cidade</th>
	    	<th>CEP</th>
	    
	    	<th>&nbsp;</th>
	    	<th>&nbsp;</th>
	    
	    </tr>
	    	   <?php
    	   	   $clientes = listarClientes();
    	   	   foreach ($clientes as $cliente)
    	   	   {
    	   	   ?>
    	   	<tr>
				<td><?php echo $cliente['nome'];?></td>
				<td><?php echo $cliente['sobrenome'];?></td>
				<td><?php echo $cliente['cpf'];?></td>
				<td><?php echo $cliente['telefone'];?></td>
				<td><?php echo $cliente['logradouro'];?></td>
				<td><?php echo $cliente['numero'];?></td>
				<td><?php echo $cliente['bairro'];?></td>
				<td><?php echo $cliente['cidade'];?></td>
				<td><?php echo $cliente['cep'];?></td>
				
				<td>
				<button onclick="window.location.href='cadastrodeclientes.php?acao=alterar&id=<?php echo $cliente['id']?>'">Alterar</button>
				</td>
				<td>
				<button onclick="ret = confirm('deseja excluir?');
				if(ret) {window.location.href='cadastrodeclientes.php?acao=excluir&id=<?php echo $cliente['id']?>'}">Excluir</button> 
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