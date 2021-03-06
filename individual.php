<?php
session_start();
$specia = $_GET['specia'];
$rasa = $_GET['rasa'];
$gen = $_GET['gen'];
$sanatate = $_GET['sanatate'];
$dresaj = $_GET['dresaj'];
$descriere = $_GET['descriere'];
$poza = $_GET['poza'];
$varsta = $_GET['varsta'];
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
    <a href="index.php">Home</a>
    <a href="login.php" style="float:right" >Bun venit, <?php echo $_SESSION['username']?>!</a>
    <div class="search-container">
        <form>
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

<div id="customcanvas">
    <div class="image">
        <img style='height: 100%; width: 100%; object-fit: contain' src="Data/82257074-cacaroot-marketing-boards.jpg">
    </div>
    <div class="navbar2">
        <div class="dropdown">
            <button class="dropbtn">Câini
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Caine&rasa=Bichon">Bichon</a>
                <a href="index.php?specia=Caine&rasa=Tomberoniez">Tomberoniez</a>
                <a href="index.php?specia=Caine&rasa=Pug">Pug</a>
                <a href="index.php?specia=Caine&rasa=Ciobanesc">Ciobanesc</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pisici
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Pisica&rasa=Egipteana">Egiptene</a>
                <a href="index.php?specia=Pisica&rasa=Romaneasca">Romanesti</a>
                <a href="index.php?specia=Pisica&rasa=Italiana">Italiene</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Rozătoare
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Rozatoare&rasa=Hamster">Hamsteri</a>
                <a href="index.php?specia=Rozatoare&rasa=Porcusor">Porcușori de Guineea</a>
                <a href="index.php?specia=Rozatoare&rasa=Soricel">Șoricei</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Păsări
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Pasari&rasa=Papagal">Papagali</a>
                <a href="index.php?specia=Pasari&rasa=Gaina">Găini</a>
                <a href="index.php?specia=Pasari&rasa=Porumbel">Porumbei</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Pești&Reptile
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Pesti&rasa=Nemo">Clown Fish</a>
                <a href="index.php?specia=Pesti&rasa=Broasca">Broasca Țestoasa</a>
                <a href="index.php?specia=Pesti&rasa=Iguana">Iguana</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Altele
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="index.php?specia=Altele&rasa=Tigru">Tigru Bengalez</a>
                <a href="index.php?specia=Altele&rasa=Purcel">Purcel Vietnamez</a>
                <a href="index.php?specia=Altele&rasa=Maimuta">Maimuțe</a>
            </div>
        </div>
    </div>
    <table  style="padding-bottom:50px;width: 100%" >
        <tbody>
        <tr>
            <td style="width: 50%">
                <img class='announce-image' src="<?php echo $poza?>"></img>
            </td>
            <td class="table-element" style= "width: 50%">
                <p class="announce-text" >Specia : <?php echo $specia?></p>
                <p class="announce-text" >Rasa : <?php echo $rasa?></p>
                <p class="announce-text" >Varsta: <?php echo $varsta?></p>
                <p class="announce-text" >Gen: <?php echo $gen?></p>
                <p class="announce-text" >Sanatate: <?php echo $sanatate?></p>
                <p class="announce-text" >Dresaj: <?php echo $dresaj?></p>
                <button class="announce-button">Cumpara</button>
            </td>
        </tr>
        <tr>
            <td>
                <p class="announce-text"> <?php echo $descriere?></p>
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
