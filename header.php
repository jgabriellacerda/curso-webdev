<header class="bg-dark">
    <title>Tambler</title>
    <meta charset='UTF-8' />
    <!-- <link rel="stylesheet" type="text/css" href="style/style.css"/> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="sticky-footer.css" rel="stylesheet">
    <!-- <script src='scripts.js'></script> -->


    <?php
        session_start();
        if(isset($_SESSION['logged']) == false){
            $_SESSION['logged'] = false;
        }
    ?> 

</header>

<body class="bg-dark">
        <div id="header" class="container">
			<div class="row justify-content-between">
				<div class="col-9" id="titulo">
					<h1 class="text-white"><strong>tambler</strong></h1>	
				</div>

				<?php
				if($_SESSION['logged'] == false){
					include 'buttons/cadastro_btn.php';
					include 'buttons/login_btn.php';
				}
				?>

				<?php
				if($_SESSION['logged']){
					include 'buttons/perfil_btn.php';
					include 'buttons/logout_btn.php';
				}
				?>
			</div>
		</div>