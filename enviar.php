<?php

  session_start();

  $host = 'localhost';
  $user = 'root';
  $senha = '';
  $db = "cadastro";

  //Conexão com o banco de dados
  // $connect = mysqli_connect($host, $user, $senha, $db);
  $mysqli = new mysqli($host, $user, $senha, $db);

  $msg = false;

  if(isset($_FILES['arquivo'])){

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

    $sql_code = "INSERT INTO arquivo (id, arquivo, data) VALUES(". $_SESSION['id'] .", '$novo_nome', NOW())";

    $msg = $mysqli->query($sql_code);
  }

  //echo $mysqli->error;

  if($mysqli->error)
    echo $mysqli->error;
  else
    header('Location: perfil.php');

?>