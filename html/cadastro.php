<?php
    include"conexao.php";

    $name = $_POST["firstname"];
    $sobr = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $genero = $_POST["gender"];
    
    $sql = "INSERT INTO usuarios (nome, sobrenome, email, senha, genero) VALUES ('$name', '$sobr', '$email','$password', '$genero')";
    if ($conn->query($sql) === TRUE) {
        header('Location: .\index2.html');
    } else {
        echo "Erro ao cadastrar: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
?>