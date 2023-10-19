<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	</head>

	<body>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="text-center mb-5">Recuperação da Senha</h3>

				<form action="processas/processaSenha.php" method="POST" class="login-form">

					<?php
						if (!empty($_SESSION['messageSenha'])) {
						?>	
							<div><strong><i class="bi-x-circle text-danger"></i>
								<?php
									echo $_SESSION['messageSenha'];
								?>
								</strong>
							</div>
						<?php
						}
					?>
					
					<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Email" name="email" autocomplete="off" required>
		      		</div>
					
					<div class="form-group" style="padding-top: 10px">
						<button type="submit" style="width:350px" class="btn btn-primary rounded p-3 px-5 ml-6">Enviar</button>
	            	</div>
					<a href="index.php" style="padding-top: 10px;" id="sair"><i class="bi bi-arrow-left-square-fill"></i> Voltar</a>
	          	</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script>
		var sair =document.getElementById('sair');

		botao.onclick = function(){
			<?php
				$_SESSION['messageSenha']="";
				$_SESSION['message']="";
			?>
		}
	</script>	

	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>
	</body>
</html>