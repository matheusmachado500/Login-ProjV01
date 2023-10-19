<?php
if (!empty($_POST)) {
 
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
 	   die("Erro ao estabelecer a ligação ao MySql: " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");
 
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = sha1($_POST['password']);		
 
	$sql = "SELECT id, user, senha FROM users WHERE user = '$user' AND senha = '$pass'";
	$login = mysqli_query($conn,$sql);


	if ($login && mysqli_num_rows($login) == 1) {
		session_start();
        $row = mysqli_fetch_assoc($login);

		$_SESSION['id'] = $row['id'];
		$_SESSION['username'] = $row['user'];

		$message = 'Sessão iniciada com sucesso como ' . $_SESSION['username'];
		$_SESSION['messageHome'] = $message;
		header('location: ../logout/index.php');
	}
	else{
		session_start();
		echo 'Não tem';
		header('location: ../index.php');
		
		$message = " A senha está errada";
		$_SESSION['message'] = $message;
	}
}
?>
