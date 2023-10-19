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
    mysqli_set_charset($conn, "utf8");

    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $pass = sha1($_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    session_start();
    $_SESSION['messageRegistro'] = "";

    if (strpos($email, '@') === false) {
        $message = "Email inválido";
        $_SESSION['messageRegistro'] = $message;

        header('location: ../registro.php');
    } else {
        $sql = "SELECT email FROM users WHERE email='$email'";
        $registro = mysqli_query($conn, $sql);

        if ($registro && mysqli_num_rows($registro) >= 1) {
            $message = "Email introduzido já existe, introduza outro";
            $_SESSION['messageRegistro'] = $message;

            header('location: ../registro.php');
        } else {
            $sql = "INSERT INTO users(user, senha, email) VALUES('$user', '$pass', '$email')";
            $registro = mysqli_query($conn, $sql);
			
			$_SESSION['registrado'] = "Registrado com Sucesso";
            header('location: ../registro.php');
        }
    }
}
?>
