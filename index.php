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
		      	<h3 class="text-center mb-3">Login</h3>

				<form action="processas/processaLogin.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="Username" name="username" autocomplete="off" required>
		      		</div>
					  

					<?php
						if (!empty($_SESSION['message'])) {
						?>	
							<div><strong><i class="bi-x-circle text-danger"></i>
								<?php
									echo $_SESSION['message'];
								?>
								</strong>
							</div>
						<?php
						}
					?>

					<div class="form-group d-flex">
						<input type="password" class="form-control rounded-left" placeholder="Password" name="password" autocomplete="off" required>
					</div>
					<a href="senha.php" style="padding: 05px">Esqueceu a senha?</a>
					
	            	<div class="form-group" style="padding-top: 20px">
						<button type="submit" class="btn btn-primary rounded p-3 px-5 ml-6">Entrar</button>
						<a href="registro.php" style="padding: 20px 70px">Registo</a>
	            	</div>
	          	</form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  	<script src="js/popper.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/main.js"></script>
	</body>
</html>
