<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "web";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senha, $db);

    //Coleta dos dados do formulário
    $nome = $_GET['nome'];
    $senhaUser = $_GET['senha'];
    $email = $_GET['email'];

    //Query para a database
    $sql = "SELECT * FROM usuario WHERE id = 4";
    $result = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($result);
    


     
    echo "Nome: " . $dados['nome'] ; "<br />";
    echo "email: " . $dados['email'] ; "<br />";
    echo "senha: " . $dados['senha'] ; "<br />";
         
     

    //echo "Inserção efetuada, ou não, pode ter dado erro <br/>" . $sql;

?>