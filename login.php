<?php
session_start();
$_SESSION['loggedin'] = false;
?>

<html lang="en-Us">
<head>
    <meta charset="utf-8">
    <title>PetMarket Login</title>
    <link rel="stylesheet" href="src/styles.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>
<div id="login">
    <fieldset>
        <h1><strong>Autentificare:</strong></h1>
        <form action="src/login_process.php" method="post">
            <p><input type="text" name="email" required value="" placeholder="Email"></p>
            <p><input type="password" name="password" required value="" placeholder="Parola"></p>
            <p><a href="#">Ai uitat parola?</a></p>
            <p><input type="submit" value="Login"></p>
            <p><span class="btn-round">sau</span></p>
        </form>
        <p>
            <a class="facebook-aux"><span class="logo-facebook"></span></a>
            <button class="facebook">Login folosind Facebook</button>
        </p>
        <p>
            <a class="google-aux"><span class="logo-google"></span></a>
            <button class="google">Login folosind Google</button>
        </p>
        <p>
            <form>
            <button class="register" formaction="register.php">Creeaza-ti un cont!</button>
            </form>
        </p>
    </fieldset>
</div>
</body>
</html>