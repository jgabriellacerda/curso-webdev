<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = "cadastro";

    //Conexão com o banco de dados
    //$connect = mysqli_connect($host, $user, $senha, $db);
    $mysqli = new mysqli($host, $user, $senha, $db);

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
    $sql_code = "INSERT INTO usuario (nome, senha, email) VALUES ('$nome','$senhaUser', '$email')";
    //$result = mysqli_query($connect, $sql);
    $mysqli->query($sql_code);

    if($mysqli->error)
        echo $mysqli->error;

    // //Query para a database
    // $sql_code = "SELECT id FROM usuario WHERE email = '$email'";
    // $result = $mysqli->query($sql_code);

    // $fields = mysqli_fetch_array($result);

    // if($mysqli->error)
    //     echo $mysqli->error;

    // //Query para a database
    // $sql_code = "CREATE TABLE perfil (
    //                                     id int auto_increment PRIMARY KEY,
    //                                     arquivo varchar(100),
    //                                     data date
    //                                 );";
    // $mysqli->query($sql_code);

    // if($mysqli->error)
    //     echo $mysqli->error;
    /*CREATE TABLE perfil1 (
	id int auto_increment PRIMARY KEY,
    arquivo varchar(100),
    data date
);*/

    if($mysqli->error)
        echo $mysqli->error;
    else
        header('Location: login.php');
?>
