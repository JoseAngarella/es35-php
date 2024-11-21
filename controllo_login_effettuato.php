<?php
    if(!isset($_SESSION['password']) || !isset($_SESSION['nome_utente']) || $_SESSION['password']!='1234' || $_SESSION['nome_utente']!='admin'){
        header ('Location: errore.php');
    }
?>