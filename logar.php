<?php

    session_start();

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "cadastro";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senha, $db);

    //Coleta dos dados do formulário
    $senhaUser = sha1(sha1(md5(sha1(md5($_GET['senha'])))));
    $email = $_GET['email'];

    //Query para a database
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);


    //Disposição dos dados em um vetor onde o indice é o nome do campo da tabela na DB
    $fields = mysqli_fetch_array($result);

    //Verificação dos dados
    if($fields['email'] == $_GET['email']){
        if($fields['senha'] == $senhaUser){
            echo "Login efetuado com sucesso!";
            $_SESSION['logged'] = true;
            $_SESSION['name'] = $fields['nome'];
            $_SESSION['id'] = $fields['id'];

            header('Location: perfil.php');
        }else {
            echo "Senha inválida. </br>";
            echo $fields['senha'] . "</br>";
            echo $senhaUser;
        }
    }else {
        echo "Email inválido.";
    }


    //header('Location: login.php');
?>

