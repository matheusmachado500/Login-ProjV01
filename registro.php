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
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user"></span>
		      	</div>
		      	<h3 class="text-center mb-3">Registo</h3>

				<?php
					if (!empty($_SESSION['registrado'])) {
					?>	
						 <div class="alert alert-light text-center" role="alert"><strong><i class="bi-plus-circle text-success"></i>
							<?php
								echo $_SESSION['registrado'];
							?>
							</strong>
						</div>
					<?php
					}
				?>

				<form action="processas/processaRegistro.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="username" autocomplete="off" required>
		      		</div>
					
					<?php
						if (!empty($_SESSION['messageRegistro'])) {
						?>	
							<div><strong><i class="bi-x-circle text-danger"></i>
								<?php
									echo $_SESSION['messageRegistro'];
								?>
								</strong>
							</div>
						<?php
						}
					?>

					<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Email" name="email" autocomplete="off" required>
		      		</div>
					  
					<div class="form-group d-flex">
						<input type="password" class="form-control rounded-left" placeholder="Password" name="password" autocomplete="off" required>
					</div>
					
	            	<div class="form-group" style="text-align: center; padding-top: 10px;">
						<button type="submit" class="btn btn-primary rounded p-3 px-5 ml-6" style="width: 350px">Registrar</button>
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
				$_SESSION['messageRegistro']="";
				$_SESSION['registrado']="";
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