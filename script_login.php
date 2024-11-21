<?php
    session_start();
    if(!isset($_POST['password']) || !isset($_POST['nome_utente'])){
        header ('Location: pagina_login.html');
        
    }else{
        $password=$_POST['password'];
        $nome_utente=$_POST['nome_utente'];
    }

    if($password=="1234" && $nome_utente=='admin'){
        
        $_SESSION['password']=$password;
        $_SESSION['nome_utente']=$nome_utente;
        $_SESSION['tempo']=time();
        header ('Location: benvenuto.php');
        
    }else{
        $_SESSION['password']=$password;
        $_SESSION['nome_utente']=$nome_utente;
        header ('Location: errore.php');
        
    }
?>