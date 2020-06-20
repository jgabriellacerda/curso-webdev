<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "web";

    //Conexão com o banco de dados
    $connect = mysqli_connect($host, $user, $senha, $db);

    //Coleta dos dados do formulário
    $nome = $_GET['nome'];
    $senhaUser = sha1(
        sha1(
            md5(
                sha1(
                    md5(
                        $_GET['senha']
                    )
                )
            )
        )
    );
    $email = $_GET['email'];

    //Query para a database
    $sql = "INSERT INTO usuario (nome, senha, email) VALUES ('$nome','$senhaUser', '$email')";
    $result = mysqli_query($connect, $sql);


    echo "Inserção efetuada, ou não, pode ter dado erro <br/>" . $sql;


    header('Location: index.php');
?>
