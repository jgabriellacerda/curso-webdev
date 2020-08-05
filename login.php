<HTML class="bg-dark">
	
	<?php include 'header.php'; ?>

		<div id = "content">
			<center>
				<div class="container">
					<div class="row">
						<div class="col">
							<?php
								//session_start();
								if($_SESSION['logged']){
								
									echo "<h1 class='text-white'>Bem vindx ". $_SESSION['name'] . ".</h1>";
								
								}
								else{
									$_SESSION['logged'] = false;
									echo "<h1 class='text-white'>Faça seu login!</h1>";
								}
							?>
						</div>
					</div>
					<div class="row">
						<div class="col-4"></div>
						<div class="col-4">
							<form method="GET" action="logar.php">

								<input type = "text"  class = "form-control" placeholder = "Email" name="email"/>
								<br>
								<input type = "password"  class = "form-control" placeholder = "Senha" name="senha"/>
								<br>
								
								<button type = "submit" class = "btn btn-secondary">Login</button>
							</form>
						</div>
					</div>
			</center>
		</div>

	<?php include 'footer.php'; ?>

</HTML>