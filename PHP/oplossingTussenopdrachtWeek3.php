<!DOCTYPE html>
<html>

<head>
    <title>Voorbeeld opdrachten week 3</title>
</head>

<body>
    <center>
        <h1>Voorbeeld opdrachten week 3</h1>
    </center>
    <hr>
    <?php
    // DIA 10
    // Neem de array over in een PHP-script
    $lijst = array(
        "Nederland",
        "Duitsland",
        "Engeland",
        "Denemarken",
        "Zwitserland",
        "Oostenrijk"
    );
    // Gebruik de instructie count() om te kijken hoe groot de array is.
    echo "Aantal landen: " . count($lijst) . "<br/>";
    // Hoe kan ik de inhoud van de variabele $lijst op het scherm zetten? Wat is hiervan de volledige instructie
    var_dump($lijst);
    echo "<br/>";
    // Hoe kun je in PHP uit de array de waarde Denemarken halen en op het scherm zetten?
    echo $lijst[3] . "<br/>";
    // Voeg nieuwe items toe aan de array $lijst met de waarde: Italië, Rusland, Spanje en Frankrijk
    array_push($lijst, "Italië");
    array_push($lijst, "Rusland");
    array_push($lijst, "Spanje");
    array_push($lijst, "Frankrijk");
    // Hoe groot is nu de array. Doe dit weer met count()
    echo "Aantal landen: " . count($lijst) . "<br/>";
    echo "<hr/>";

    // DIA 17
    // Neem de array over in een PHP-script, met dank aan Stefan
    $landen = array(
        "Nederland" => "Amsterdam",
        "Duitsland" => "Berlijn",
        "Engeland" => "London",
        "Denemarken" => "Kopenhagen",
        "Zwitserland" => "Bern",
        "Oostenrijk" => "Wenen"
    );
    // Gebruik de instructie count() om te kijken hoe groot de array is
    echo "Aantal landen: " . count($landen) . "<br/>";
    // Hoe kan ik de inhoud van de variabele $lijst op het scherm zetten? Wat is hiervan de volledige instructie
    var_dump($landen);
    echo "<br/>";
    // Hoe kun je in PHP uit de array de hoofdstad van Duitsland halen en op het scherm zetten? 
    echo "De hoofdstad van Duitsland is: " . $landen["Duitsland"] . "<br/>";
    // Voeg 3 nieuwe items toe aan de array $lijst met daarbij het land en de hoofdstad.
    $landen["Italië"] = "Rome";
    $landen["Australië"] = "Sydney";
    $landen["Frankrijk"] = "Parijs";
    // Hoe groot is nu de array. Doe dit weer met count()
    echo "Aantal landen: " . count($landen) . "<br/>";
    // Loop met de instructie foreach door de gehele lijst, zodat elk land met daarbij de hoofdstad op het scherm gezet wordt.
    foreach ($landen as $land => $hoofdstad) {
        echo "De hoofdstad van " . $land . " is " . $hoofdstad . ".<br/>";
    }
    ?>
</body>

</html>