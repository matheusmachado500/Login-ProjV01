<?php
require('../verificarLogin.php');
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../css/style.css">
 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

	</head>

	<body>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center">  
                <span class="bi-house"></span>
            </div>
            <h3 class="text-center mb-4"> Home </h3> 
				
<div class="alert alert-light text-center" role="alert"><strong><i class="bi-plus-circle text-success"></i>
    <?php
        echo $_SESSION['messageHome'];
    ?>
    </strong>
</div>

<form action="../logout.php" method="POST" class="login-form">
    <div class="form-group">
        <button type="submit" class="btn btn-danger rounded submit p-3 px-5">Sair</button>
    </div>
</form>