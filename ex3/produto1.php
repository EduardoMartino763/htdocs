<?php

  session_start();

    $_SESSION["Carrinho"][0]++;

    header("Location: tela.php");