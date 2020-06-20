<HTML>

    <header>
        <title>Página Top</title>
        <meta charset='UTF-8' />
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </header>

    <body>
        <div id="header">
            <center>
                <h1 id="titulo">Página do Billy</h1>
            </center>
        </div>

		<div id = "menu">
			<button class = "menuBotao" href = "index.php">Cadastro</button>

			<button class = "menuBotao" href = "./login.php">Login</button>
		</div>

		<div id = "content">
			<center>
				<?php
				session_start();
				if($_SESSION['logged']){
				
					echo "<h1>Bem vindx ". $_SESSION['name'] . ".</h1>";
				
				}
				else{
					echo "<h1>Você não é bem vindo.</h1>";
				}
				?>
				<form method="GET" action="process.php">
					<input type = "text" class = "inputCadastro" placeholder = "Nome completo" name="nome"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha" name="senha"/>
					<br>
					<input type = "text" class = "inputCadastro" placeholder = "Email" name="email"/>
					<br>
					<button type = "submit" class = "menuBotao">Cadastrar</button>
				</form>
			</center>
		</div>

        <div id="footer">
        <p>Site feito por Billy.</p>
        </div>
    </body>

    <footer>

    </footer>
</HTML>