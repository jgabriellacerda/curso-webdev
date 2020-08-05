<?php

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo "POST";
        if(isset($_POST['editar']))
        {
            echo "EDITAR";
            editar_post();
        }
        else if(isset($_POST['apagar']))
        {
            echo "APAGAR";
            echo $_POST['apagar'];
            apagar_post($_POST['apagar']);
        }
    }
    function apagar_post($arquivo)
    {

        session_start();

        $host = 'localhost';
        $user = 'root';
        $senha = '';
        $db = "cadastro";

        //Conexão com o banco de dados
        // $connect = mysqli_connect($host, $user, $senha, $db);
        $mysqli = new mysqli($host, $user, $senha, $db);

        $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo

        unlink($diretorio.$arquivo); //deleta o arquivo

        $sql_code = "DELETE FROM arquivo WHERE arquivo='".$arquivo."'";

        $mysqli->query($sql_code);

        if($mysqli->error)
            echo $mysqli->error;
        else
           header('Location: perfil.php');

    }

    function editar_post()
    {
        header('Location: perfil.php');
    }
?>