<!DOCTYPE html>
<head>
    <title>Voorbeeld Array</title>
</head>
<body>
    <center><h1>Voorbeeld array</h1></center>
    <hr/>
    <?php
    //Numerieke array

    // Array maken en gelijk namen erin zetten
    $studenten = array("Robin", "Nahila", "Ruben", "Stef");
    // Extra namen toevoegen aan de array
    array_push($studenten, "Kaylan");
    array_push($studenten, "Francois");
    // Var dump om de array te tonen
    var_dump($studenten);
    echo "<hr/>";
    // Eerste 5 studenten netjes tonen aan de gebruiker, LET OP: niet in de echo = niet op het scherm
    echo "Student 1: ".$studenten[0]."<br/>";
    echo "Student 2: ".$studenten[1]."<br/>";
    echo "Student 3: ".$studenten[2]."<br/>";
    echo "Student 4: ".$studenten[3]."<br/>";
    echo "Student 5: ".$studenten[4]."<br/>";
    echo "<hr/>";

    // Associative array

    // Array maken en gelijk dnummers koppelen aan studenten
    $studentnummers = array("Robin"=>"D274900", "Nahila"=>"D283700", "Ruben"=>"D280600");
    // Extra studentnummers koppelen aan studenten
    $studentnummers["Stef"] = "D276300";
    $studentnummers["Kaylan"] = "D281200";
    // Var dump om de array te tonen
    var_dump($studentnummers);
    echo "<hr/>";
    // D-numemrs van studenten tonen (netjes voor de gebruiker)
    echo "D-nummer van Robin: ".$studentnummers["Robin"]."<br/>";
    echo "D-nummer van Nahila: ".$studentnummers["Nahila"]."<br/>";
    echo "D-nummer van Stef: ".$studentnummers["Stef"]."<br/>";

    ?>
</body>
</html>