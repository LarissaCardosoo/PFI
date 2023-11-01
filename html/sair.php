<?php
session_start(); //iniciar o login
session_destroy();

header("Location: index.html");
exit();
?>
