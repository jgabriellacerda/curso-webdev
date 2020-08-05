<HTML>

	<?php include 'header.php'; ?>

		<div id = "content">
			<center>
				<div class="container">
					<div class='row'>
						<div class='col'>
							<?php
								echo "<h1 class='text-white'>Bem vindx ". $_SESSION['name'] . ".</h1>";
								?>
						</div>
					</div>
					<div class='row'>
						<div class='col-3'></div>
						<div class='col-6'>
							<form action="enviar.php" method="POST" enctype="multipart/form-data">
								<label for="imagem" class='text-white'>Imagem:</label>
								<input type="file" name="arquivo" class="btn btn-secondary btn-block"/>
								<br/>
								<input type="submit" value="Enviar" class="btn btn-secondary btn-block"/>
							</form>
						</div>						
					</div>
				</div>

			</center>
		</div>

	<?php include 'footer.php'; ?>

</HTML>