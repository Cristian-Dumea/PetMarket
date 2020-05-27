<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
    header("Location: login.php");
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
    <a href="index.php">Home</a>
    <a href="login.php" style="float:right" >Bun venit, <?php echo $_SESSION['username']?>!</a>
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
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aplicatii_internet";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_GET['specia']) && isset($_GET['rasa'])) {
        $specia = $_GET['specia'];
        $rasa = $_GET['rasa'];
        $sql = "SELECT * FROM `animale` WHERE `specia`=\"$specia\" AND `rasa`=\"$rasa\"";
    }
    else
    {
        $sql = "SELECT * FROM `animale`";
    }
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $iterator = 0
        ?>
        <table style="padding-bottom:50px; width: 100%">
            <tbody>
            <tr>
                <?php
                while($row = mysqli_fetch_assoc($result))
                {
                ?>
                <td class="table-element">
                    <img class='announce-image' src="<?php echo $row["poza"]?>"></img>
                    <p class="announce-text">Specia: <?php echo $row["specia"]?> </p>
                    <p class="announce-text">Rasa: <?php echo $row["rasa"]?> </p>
                    <p class="announce-text">Varsta: <?php echo $row["varsta"]?></p>
                    <p class="announce-text">Gen: <?php echo $row["gen"]?></p>
                    <a href="individual.php?specia=<?php echo $row["specia"]?>&rasa=<?php echo $row["rasa"]?>&gen=<?php echo $row["gen"]?>&sanatate=<?php echo $row["sanatate"]?>&dresaj=<?php echo $row["dresaj"]?>&descriere=<?php echo $row["descriere"]?>&poza=<?php echo $row["poza"]?>&varsta=<?php echo $row["varsta"]?>">Mai multe detalii</a>
                </td>
                <?php
                    $iterator = $iterator + 1;
                    if ($iterator % 3 == 0){
                ?>
            </tr>
            <tr>
                        <?php
                    }
                }
                while ($iterator % 3 != 0){
                        ?>
                    <td class="table-element">
                    </td>
                    <?php
                    $iterator = $iterator + 1;
                }
                ?>
            </tr>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>

<div class="footer">
    <p>Toate Drepturile Rezervate: Dumea Cristian Pestisor si Matasel Andrei </p>
</div>
</body>
</html>