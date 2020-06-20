<HTML>

	<header>
		<title>Login</title>
		<meta charset = "utf-8"/>
		<link rel = "stylesheet" type = "text/css" href = "index.css"/>
	</header>

	<body>

		<div id = "header">
			<h1>Curso do Bart!</h1>
		</div>

		<div id = "menu">
			<button class = "menuBotao" href = "index.php">Cadastro</button>

			<button class = "menuBotao" href = "login.php">Login</button>
		</div>

		<div id = "content">
			<center>

				<h1>Faça seu login!</h1>
				<form method="GET" action="logar.php">

                    <input type = "text" class = "inputCadastro" placeholder = "Email" name="email"/>
					<br>
					<input type = "password" class = "inputCadastro" placeholder = "Senha" name="senha"/>
					<br>
					
					<button type = "submit" class = "menuBotao">Login</button>
				</form>
			</center>
		</div>

		<div id = "footer">
			<p>Site feito por Pedro Reis.</p>
		</div>



	</body>


</HTML>