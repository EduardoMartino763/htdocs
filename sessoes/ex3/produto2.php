<?php

  session_start();

    $_SESSION["Carrinho"]++;

    header("Location: tela.php");