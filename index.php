<?php

    $email = $_GET['email'];
    $senha = $_GET['senha'];

?>

<HTML>
    <header>
        <title>Página Top</title>
        <meta charset='UTF-8' />
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </header>

    <script>
        var boasVindas = ", bem vindx ao meu site!!!!!";
        var nomeVisitante;

        //nomeVisitante = prompt("Digite o seu nome:");

        boasVindas = nomeVisitante + boasVindas;

        //alert(boasVindas);

        function enviar(){
            var content = document.getElementById('content');
            var email = document.getElementById('email').value;
            var senha = document.getElementById('senha').value;
        
            content.append("E-mail: " + email + " Senha: " + senha);
            alert("E-mail: " + email + " Senha: " + senha);
        }
    </script>

    <body>
        <div id="header">
            <center>
                <h1 id="titulo">Página do Billy</h1>
            </center>
        </div>

        <div id="menu">
            <a href="http://www.google.com">
                <button class="button">Home</button>
            </a>
            <button class="button">Cadastro</button>
            <button class="button">Quem Somos</button>
        </div>

        <div id="content">
            <center>
                <p>Um texto super informativo sobre o site do Billy</p>
                <br/>
                <p>Formulário de Cadastro</p>
                <br/>
                <form method="GET" action="index.php">
                    <input type="text" id="email" name="email" placeholder="E-mail"/>
                    <br/>
                    <input type="password" id="senha" name="senha" placeholder="Senha"/>
                    <br/>
                    <button type="submit" class="button">Enviar</button>
                </form>
            </center>
            <?php
                if($email && $senha){
            ?>
                <p>Os dados entrados foram: <?php echo "<br/>Nome: " . $email . "</br>Senha: " . 
                $senha ?></p>
            <?php
                }
            ?>
        </div>

        <div id="footer">

        </div>
    </body>

    <footer>

    </footer>
</HTML>