<!DOCTYPE html>
<html>

<head>
    <title>Formulier naar database</title>
</head>

<body>
    <center>
        <h1>Formulier naar database</h1>
    </center>
    <hr>
    <form method="post">
        naam: <input type="text" name="txtName"><br />
        woonplaats: <input type="text" name="txtCity"><br />
        email: <input type="text" name="txtEmail"><br />
        <input type="submit" name="btnSave" value="Opslaan in database">
    </form>
    <?php
    // Als er op de knop btnSave (Opslaan in database) is geklikt
    if (isset($_POST["btnSave"])) {
        // Database verbinding includen, verbinding staat in variable $con
        include("database.php");

        // Tekstvakken uitlezen en opslaan in de variablen
        $naam = $_POST["txtName"];
        $woonplaats = $_POST["txtCity"];
        $email = $_POST["txtEmail"];

        // Opbouwen query
        $query = "INSERT INTO personen (naam, woonplaats, email) VALUES ('$naam', '$woonplaats', '$email')";
        // Query klaar zetten om uit te voeren
        $stm = $con->prepare($query);
        // Query uitvoeren - En als dit lukt zonder fouten
        if ($stm->execute()) {
            echo "Statement correct uitgevoerd!";
        } else { // Als er iets mis gaat met het uitvoeren van de query
            echo "Query mislukt!";
        }
    }
    ?>
</body>

</html>