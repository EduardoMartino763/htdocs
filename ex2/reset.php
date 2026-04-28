<?php  
  session_start();

    unset($_SESSION["contador"]);

    header("Location: tela.php");