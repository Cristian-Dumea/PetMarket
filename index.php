<?php
// Start the session
session_start();
$state = $_SESSION["from_page"];
if ($state == "register"){
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
    $valori =
    $sql = "INSERT INTO aplicatii_internet.utilizatori (Nume, Prenume, email, Adresa, telefon, Parola) VALUES (\"$nume\", \"$prenume\", \"$email\", \"$adresa\", \"$telefon\", \"$parola\")";

    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="src/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PetMarket</title>
    <meta charset="utf-8">
</head>
<body style='background-image: url("Data/polygonal-background-triangles-blue-fragment-207852.jpg"); background-attachment:fixed;
			background-size: cover;'>

<div class="topnav">
    <a href="index.html">Home</a>
    <a href="#" style="float:right" >Contul meu</a>
    <div class="search-container">
        <form>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<div id="customcanvas" style="height: 1350px;">
    <div class="image">
        <img style='height: 100%; width: 100%; object-fit: contain' src="Data/82257074-cacaroot-marketing-boards.jpg">
    </div>
    <div class="navbar2">
        <div class="dropdown">
            <button class="dropbtn">Câini
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="caini.html">Bishon</a>
                <a href="caini.html">Tomberoniez</a>
                <a href="caini.html">Pug</a>
                <a href="caini.html">Ciobanesc</a>
                <a href="caini.html">Altele</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pisici
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="pisici1.html">Egiptene</a>
                <a href="pisici1.html">Romanesti</a>
                <a href="pisici1.html">Italiene</a>
                <a href="pisici1.html">Altele</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Rozătoare
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="rozatoare.html">Hamsteri</a>
                <a href="rozatoare.html">Porcușori de Guineea</a>
                <a href="rozatoare.html">Șoricei</a>
                <a href="rozatoare.html">Altele</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Păsări
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="pasari.html">Papagali</a>
                <a href="pasari.html">Găini</a>
                <a href="pasari.html">Porumbei</a>
                <a href="pasari.html">Altele</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pești&Reptile
<i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="pesti.html">Clown Fish</a>
                <a href="pesti.html">Broasca Țestoasa</a>
                <a href="pesti.html">Iguana</a>
                <a href="pesti.html">Altele</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Altele
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="pesti.html">Tigru Bengalez</a>
                <a href="pesti.html">Purcel Vietnamez</a>
                <a href="pesti.html">Maimuțe</a>
                <a href="pesti.html">Altele</a>
            </div>
        </div>
    </div>
    <table  style="padding-bottom:50px; width: 100%" >
        <tbody>
            <tr>
                <td class="table-element">
                    <img class='announce-image' src="Data\c3.jpg"></img>
                    <p class="announce-text" >Rasa:   Labrador </p>
                    <p class="announce-text" >Varsta: 7 luni</p>
                    <p class="announce-text" >Pret:   300</p>
                    <p class="announce-text" >Gen:    Mascul</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
                <td class="table-element">
                    <img class='announce-image' src="Data\p2.jpg"></img>
                    <p class="announce-text" >Rasa:     Pisica romaneasca </p>
                    <p class="announce-text" >Varsta:   1 an</p>
                    <p class="announce-text" >Pret :     80</p>
                    <p class="announce-text" >Gen :      Mascul</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
                <td class="table-element">
                    <img class='announce-image' src="Data\p3.jpg"></img>
                    <p class="announce-text" >Rasa :  Pisica Italiana </p>
                    <p class="announce-text" >Varsta: 10 luni</p>
                    <p class="announce-text" >Pret:  120</p>
                    <p class="announce-text" >Gen:   Femela</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
            </tr>
            <tr>
                <td class="table-element">
                    <img class='announce-image' src="Data\nemo.jpg"></img>
                    <p class="announce-text" >Rasa : Clown (Nemo)</p>
                    <p class="announce-text" >Varsta: 2 luni</p>
                    <p class="announce-text" >Pret: 20</p>
                    <p class="announce-text" >Gen: Mascul</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
                <td class="table-element">
                    <img class='announce-image' src="Data\gaina.jpg"></img>
                    <p class="announce-text" >Rasa : Lohmann</p>
                    <p class="announce-text" >Varsta: 4 zile</p>
                    <p class="announce-text" >Pret: 5</p>
                    <p class="announce-text" >Gen: Femela</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
                <td class="table-element">
                    <img class='announce-image' src="Data\c4.jpg"></img>
                    <p class="announce-text" >Rasa : Pug</p>
                    <p class="announce-text" >Varsta: 3 saptamani</p>
                    <p class="announce-text" >Pret: 150</p>
                    <p class="announce-text" >Gen: Femela</p>
                    <a href="bichon.html">Mai multe detalii</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="footer">
    <p>Toate Drepturile Rezervate: Dumea Cristian Pestisor si Matasel Andrei </p>
</div>
</body>
</html>