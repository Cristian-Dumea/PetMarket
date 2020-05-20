<?php
// Start the session
session_start();

// Set session variables
$_SESSION["from_page"] = "register";

?>
<html lang="en-Us">
<head>
    <meta charset="utf-8">
    <title>PetMarket Inregistrare</title>
    <link rel="stylesheet" href="src/styles.css">
    <script src="src/scripts.js"></script>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
</head>
<body>
<div id="login">
    <fieldset>
        <h1><strong>Inregistrare:</strong></h1>
        <form onSubmit = "return checkPassword(this)" action="index.php" method="post">
            <p><input type="text" required value="" name="nume" placeholder="Nume"></p>
            <p><input type="text" required value="" name="prenume" placeholder="Prenume"></p>
            <p><input type="text" required value="" name="email" placeholder="Email"></p>
            <p><input type="text" required value="" name="adresa" placeholder="Adresa"></p>
            <p><input type="text" required value="" name="telefon" placeholder="Telefon"></p>
            <p><input type="password" name = "password1" required value="" placeholder="Parola"></p>
            <p><input type="password" name = "password2" required value="" placeholder="Reintrodu Parola"></p>
            <p><input type="submit" value="Inregistreaza-te!"></p>
            <p><span class="btn-round">sau</span></p>
        </form>
        <p>
            <a class="facebook-aux"><span class="logo-facebook"></span></a>
            <button class="facebook">Inregistreaza-te folosind Facebook</button>
        </p>
        <p>
            <a class="google-aux"><span class="logo-google"></span></a>
            <button class="google">Inregistreaza-te folosind Google</button>
        </p>
    </fieldset>
</div>
</body>
</html>