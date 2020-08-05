<HTML>

	<?php include 'header.php'; ?>
	<?php include 'apagar_post.php'; ?>

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
					<div class='row '>
						<div class='col-5'></div>
						<div class='col-2'>
							<?php include 'buttons/postar_btn.php'; ?>
						</div>
						<div class='col-5'></div>
					</div>
				</div>
					<div class="album py-5 bg-dark">
    					<div class="container justify-content-center">
					<?php 
						//Conexão com o banco de dados
						$host = 'localhost'; $user = 'root'; $senha = ''; $db = "cadastro";					
						$mysqli = new mysqli($host, $user, $senha, $db);

						$sql_code = "SELECT * FROM arquivo WHERE id = ".$_SESSION['id'];
						$result = $mysqli->query($sql_code);

						$linhas = $result->num_rows;
						// echo $linhas;

						for($i = 1; $i <= $linhas; $i++)
						{
							echo "</br>";
							$fields = $result->fetch_assoc();
							// echo $fields['arquivo'];
							echo ("
							<div class='row'>
								
								<div class='col justify-content-between'>
									<div class='card text-white border-light bg-secondary mb-3' style='max-width: 30rem;'>
											<img src='upload/".$fields['arquivo']."' heigth='100%'  class='card-img-top' alt='MDN Logo' />
										
											<div class='card-body'>
												<p class='card-text'>Legenda da foto.</p>
													<div class='d-flex justify-content-between align-items-center'>
														<div class='btn-group'>
															<form action='apagar_post.php' method='post'>
																<button type='submit' name='editar' value='".$fields['arquivo']."' class='btn btn-sm btn-outline-light'>Editar</button>
																<button type='submit' name='apagar' value='".$fields['arquivo']."' class='btn btn-sm btn-outline-light'>Apagar</button>
															</form>
															
														</div>
														<small class='text-muted'>9 mins</small>
													</div>
											</div>
									</div>
								</div>
								
							</div>
							");


							// <button type='button' class='btn btn-sm btn-outline-light'>Editar</button>
							// 								<button type='button' onclick='location.href='apagar_post(".$fields['arquivo'].");' class='btn btn-sm btn-outline-light'>Apagar</button>

							// echo ("
							// <div class='row'>
							// 	<div class='col-4'></div>
							// 		<div class='col-4'>
							// 			<img src='upload/".$fields['arquivo']."' heith='400px' width='400px' class='image-fluid' alt='MDN Logo' />
							// 		</div>
							// 	<div class='col-4'></div>
							// </div>
							// 	");
						}
					?>
						</div>
					</div>
				
				</div>

			</center>
		</div>

	<?php include 'footer.php'; ?>

</HTML>