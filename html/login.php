<?php 
    include"conexao.php";

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "select * from usuarios where email = '$email' and senha = '$password'";

    $resultado = $conn->query($sql);
    if ($resultado->num_rows==1) {
        $_SESSION['email'] = $email;
        header('Location: ./index2.html');
        exit();
    } else {
        
        echo "<script> alert ('É necessário realizar o cadastro para efetuar o login'); " ; 
        echo "javascript:window.location='login.html';</script>";
 
        
        
    }
    

?>