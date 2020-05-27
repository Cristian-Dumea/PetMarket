<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplicatii_internet";
$_SESSION['loggedin'] = false;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$parola = $_POST["password"];
$sql = "SELECT `email`, `Parola`, `Prenume` FROM `utilizatori` WHERE `email`=\"$email\" AND `Parola`=\"$parola\"";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] =  $row["Prenume"];
    header("Location: /Petmarket/index.php");
} else {
    header("Location: /Petmarket/login.php");
}
?>
