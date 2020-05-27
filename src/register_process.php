<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aplicatii_internet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$nume = $_POST["nume"];
$prenume = $_POST["prenume"];
$email = $_POST["email"];
$adresa = $_POST["adresa"];
$telefon = $_POST["telefon"];
$parola = $_POST["password1"];
$sql = "INSERT INTO aplicatii_internet.utilizatori (Nume, Prenume, email, Adresa, telefon, Parola) VALUES (\"$nume\", \"$prenume\", \"$email\", \"$adresa\", \"$telefon\", \"$parola\")";

if (mysqli_query($conn, $sql)) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $prenume;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
header("Location: /Petmarket/index.php");
?>

