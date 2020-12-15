<?php
include("database.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Opdracht les 5</title>
</head>

<body>
    <center>
        <h1>Artikelen toevoegen</h1>
    </center>
    <hr>
    <?php
    $query = "SELECT * FROM artikelen";
    $stm = $con->prepare($query);
    $result = $stm->execute();

    // controle of de query gelukt is
    if ($result) {
        // Artikelen bevat nu een lijst van artikelen (als object) uit de database
        $artikelen = $stm->fetchAll(PDO::FETCH_OBJ);

        // Een loop maken om door deze artikelen heen te wandelen
        foreach ($artikelen as $artikel) {
            // Het artikel op het scherm tonen
            echo $artikel->artikelnaam . " kost €" . $artikel->prijs . "<br/>";
        }
    } else {
        echo "Ophalen van de data is mislukt!";
    }
    ?>
    <hr>
    <form method="post">
        Artikelnaam: <input type="text" name="txtArtikelnaam"><br>
        Prijs: <input type="text" name="txtPrijs"><br>
        <input type="submit" name="btnSave" value="Opslaan">
    </form>
    <?php
    // Als er op de knop Opslaan geklikt is
    if (isset($_POST['btnSave'])) {
        $artikelnaam = $_POST['txtArtikelnaam'];
        $prijs = $_POST['txtPrijs'];

        if (empty($artikelnaam) || empty($prijs)) {
            echo "Vul zowel artikelnaam als prijs in om door te gaan...";
        } else {
            $query = "INSERT INTO artikelen (artikelnaam, prijs) VALUES ('$artikelnaam', $prijs)";
            $stm = $con->prepare($query);
            $result = $stm->execute();

            if ($result) {
                echo "Succesvol opgeslagen!";
            } else {
                echo "Er is helaas iets mis gegaan! De query: <br/>$query";
            }
        }
    }
    ?>
</body>

</html>