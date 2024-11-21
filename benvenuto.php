<?php
    session_start();
    include 'controllo_login_effettuato.php';
    if($_SESSION['tempo']+20<=time()){
        header('Location: sessione_scaduta.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="div_dati">
        <h1>Nome:</h1>
        <p>Josè</p>
        <br>
        <h1>Cognome:</h1>
        <p>Angarella Crispo</p>
        <br>
        <h1>Data di nascita:</h1>
        <p>07/06/2006</p>
        <br>
        <h1>Data di accesso a questa pagina:</h1>
        <?php
            $data=date("Y-m-d h:i:s ");
            echo "<p>$data</p>";

        ?>
        <br>
        <a href="script_logout.php">Logout</a>

    </div>
    
</body>
</html>