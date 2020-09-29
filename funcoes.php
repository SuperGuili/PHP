<?php
define("DSN","mysql");
define("SERVIDOR","localhost");
define("USUARIO","root");
define("SENHA","");
define("BANCODEDADOS","empresa");

function conectaDB()
{
    
    try {
        $conn = new PDO(DSN.':host='.SERVIDOR.';dbname='.BANCODEDADOS, USUARIO, SENHA);
        return $conn;
    } catch (PDOException $e) {
        echo ''.$e->getMessage();
    }
          
}

function salvarcliente($post)
{
    $conn = conectaDB();
    
    $nome = $post['nome'];
    $sobrenome = $post['sobrenome'];
    $cpf = $post['cpf'];
    $telefone = $post['telefone'];
    $logradouro = $post['logradouro'];
    $numero = $post['numero'];
    $bairro = $post['bairro'];
    $cidade = $post['cidade'];
    $cep = $post['cep'];
    
    $stmt = $conn->prepare('INSERT INTO cliente (nome, sobrenome, cpf, telefone, logradouro, numero, bairro, cidade, cep )
     VALUES(:nome, :sobrenome, :cpf, :telefone, :logradouro, :numero, :bairro, :cidade, :cep)');
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':sobrenome',$sobrenome);
    $stmt->bindParam(':cpf',$cpf);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':logradouro',$logradouro);
    $stmt->bindParam(':numero',$numero);
    $stmt->bindParam(':bairro',$bairro);
    $stmt->bindParam(':cidade',$cidade);
    $stmt->bindParam(':cep',$cep);
    
    if ($stmt->execute()) {
        return "Cliente inserido com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }  

}

function alterarCliente($post)
{
    $conn = conectaDB();
    
    $id = $post['id'];
    $sobrenome = $post['sobrenome'];
    $nome = $post['nome'];
    $cpf = $post['cpf'];
    $telefone = $post['telefone'];
    $logradouro = $post['logradouro'];
    $numero = $post['numero'];
    $bairro = $post['bairro'];
    $cidade = $post['cidade'];
    $cep = $post['cep'];
    
    $stmt = $conn->prepare('update cliente set nome=:nome, sobrenome=:sobrenome, cpf=:cpf,
    telefone=:telefone, logradouro=:logradouro, numero=:numero, bairro=:bairro, cidade=:cidade, cep=:cep  where id= :id');
     
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nome',$nome);
    $stmt->bindParam(':sobrenome',$sobrenome);
    $stmt->bindParam(':cpf',$cpf);
    $stmt->bindParam(':telefone',$telefone);
    $stmt->bindParam(':logradouro',$logradouro);
    $stmt->bindParam(':numero',$numero);
    $stmt->bindParam(':bairro',$bairro);
    $stmt->bindParam(':cidade',$cidade);
    $stmt->bindParam(':cep',$cep);
    
    if ($stmt->execute())
    {
        return "Cliente alterado com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
    
}

function listarClientes()
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select id, nome, sobrenome,  cpf, telefone, logradouro, numero, bairro, cidade, cep from cliente order by nome");
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function carregarCliente($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select id, nome, sobrenome, cpf, telefone, logradouro, numero, bairro, cidade, cep from cliente where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function excluirCliente($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare('delete from cliente where id = :id');
    $stmt->bindParam(':id',$id);
    
    if ($stmt->execute()) {
        return "Cliente excluído com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
}

function salvarproduto($post, $url)
{
    $conn = conectaDB();
    
    $produto = $post['produto'];
    $codigoproduto = $post['codigoproduto'];
    $marca = $post['marca'];
    $modelo = $post['modelo'];
    $origem = $post['origem'];
    $precoc = $post['precoc'];
    $precov = $post['precov'];
    $quantidade = $post['quantidade'];
    
    $stmt = $conn->prepare('INSERT INTO produto (produto, codigoproduto, marca, modelo, origem, precoc, precov, quantidade, url)
     VALUES(:produto, :codigoproduto, :marca, :modelo, :origem, :precoc, :precov, :quantidade, :url)');
    
    $stmt->bindParam(':produto',$produto);
    $stmt->bindParam(':codigoproduto',$codigoproduto);
    $stmt->bindParam(':marca',$marca);
    $stmt->bindParam(':modelo',$modelo);
    $stmt->bindParam(':origem',$origem);
    $stmt->bindParam(':precoc',$precoc);
    $stmt->bindParam(':precov',$precov);
    $stmt->bindParam(':quantidade',$quantidade);
    $stmt->bindParam(':url',$url);

    
    if ($stmt->execute()) {
        return "Produto inserido com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
    
}

function alterarProduto($post)
{ 
    $conn = conectaDB();
    
    $id = $post['id'];
    $produto = $post['produto'];
    $codigoproduto = $post['codigoproduto'];
    $marca = $post['marca'];
    $modelo = $post['modelo'];
    $origem = $post['origem'];
    $precoc = $post['precoc'];
    $precov = $post['precov'];
    $quantidade = $post['quantidade'];
    
    
    $stmt = $conn->prepare('update produto set produto=:produto, codigoproduto=:codigoproduto,
    marca=:marca, modelo=:modelo, origem=:origem, precoc=:precoc, precov=:precov,
     quantidade=:quantidade  where id= :id');
    
    
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':produto',$produto);
    $stmt->bindParam(':codigoproduto',$codigoproduto);
    $stmt->bindParam(':marca',$marca);
    $stmt->bindParam(':modelo',$modelo);
    $stmt->bindParam(':origem',$origem);
    $stmt->bindParam(':precoc',$precoc);
    $stmt->bindParam(':precov',$precov);
    $stmt->bindParam(':quantidade',$quantidade);
    
    if ($stmt->execute())
    {
        return "Produto alterado com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
    
}


function listarProdutos()
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select id, produto, codigoproduto, marca, modelo, origem, precoc, precov, quantidade, url from produto order by codigoproduto");
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function carregarProduto($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select id, produto, codigoproduto, marca, modelo, origem, precoc, precov, quantidade, url from produto where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function excluirProduto($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare('delete from produto where id = :id');
    $stmt->bindParam(':id',$id);
    
    if ($stmt->execute()) {
        return "Produto excluído com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
}

function salvarvendedor($post)
{
    $nomevendedor = $post['nomevendedor'];
    $codigovendedor = $post['codigovendedor'];
    $comissao = $post['comissao'];
    
    $conn = conectaDB();
    
    $stmt = $conn->prepare('INSERT INTO vendedor (nomevendedor, codigovendedor, comissao )
     VALUES(:nomevendedor, :codigovendedor, :comissao)');
    $stmt->bindParam(':nomevendedor',$nomevendedor);
    $stmt->bindParam(':codigovendedor',$codigovendedor);
    $stmt->bindParam(':comissao',$comissao);
    
    
    if ($stmt->execute()) {
        return "Vendedor inserido com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
}

function alterarVendedor($post)
{
    $conn = conectaDB();
    
    $id = $post['id'];
    $nomevendedor = $post['nomevendedor'];
    $codigovendedor = $post['codigovendedor'];
    $comissao = $post['comissao'];
      
    
    $stmt = $conn->prepare('update vendedor set nomevendedor=:nomevendedor, codigovendedor=:codigovendedor,
    comissao=:comissao  where id= :id');
    
    
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':nomevendedor',$nomevendedor);
    $stmt->bindParam(':codigovendedor',$codigovendedor);
    $stmt->bindParam(':comissao',$comissao);

    
    if ($stmt->execute())
    {
        return "Vendedor alterado com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
    
}

function listarVendedores()
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select id, nomevendedor, codigovendedor, comissao from vendedor order by nomevendedor");
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function carregarVendedor($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare("select * from vendedor where id = :id");
    $stmt->bindParam(':id',$id);
    $stmt->execute();
    
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function excluirVendedor($id)
{
    $conn = conectaDB();
    
    $stmt = $conn->prepare('delete from vendedor where id = :id');
    $stmt->bindParam(':id',$id);
    
    if ($stmt->execute()) {
        return "Vendedor excluído com sucesso!";
    } else {
        print_r($stmt->errorInfo());
        return "erro! ";
    }
}


?>
