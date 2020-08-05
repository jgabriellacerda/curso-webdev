<HTML class="bg-dark">

	<?php include 'header.php'; ?>

		<div id="content" class="container">
			<center>
					<div class="row">
						<div class="col">
							<?php
								//session_start();
								if($_SESSION['logged']){
									echo "<h1 class='text-white'>Bem vindx ". $_SESSION['name'] . ".</h1>";
								}
								else{
									echo "<h1 class='text-white'>Cadastre-se!</h1>";
								}
							?>
						</div>					
					</div>
					<div class="row">
						<div class="col-4"></div>
						<div class="col-4">
							<form method="GET" action="process.php">
								<input type = "text" class = "form-control" placeholder = "Nome completo" name="nome"/>
								<br>
								<input type = "password" class = "form-control" placeholder = "Senha" name="senha"/>
								<br>
								<input type = "text" class = "form-control" placeholder = "Email" name="email"/>
								<br>
								<button type = "submit" class = "btn btn-secondary">Cadastrar</button>
							</form>
						</div>
					</div>
				</div>
			</center>
		</div>

	<?php include 'footer.php'; ?>

</HTML>