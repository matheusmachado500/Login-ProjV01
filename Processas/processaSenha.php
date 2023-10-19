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

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    session_start();
    $_SESSION['messageSenha'] = "";

    if (strpos($email, '@') === false) {
        $message = "Email inválido";
        $_SESSION['messageSenha'] = $message;

        header('location: ../senha.php');
    } else {
        $sql = "SELECT email FROM users WHERE email='$email'";
        $registro = mysqli_query($conn, $sql);

        if ($registro && mysqli_num_rows($registro) == 1) {



            
        } else {
            $message = "Não tem conta com esse email";
            $_SESSION['messageSenha'] = $message;

            header('location: ../senha.php');
        }
    }
}
?>
