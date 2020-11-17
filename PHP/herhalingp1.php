<!DOCTYPE html>
<html>
    <head>
        <title>Herhaling Periode 1</title>
    </head>
    <body>
        <center>
            <h1>Herhaling van PHP periode 1</h1>
        </center>
        <hr/>
        <form method="POST">
            Naam: <input type="text" name="txtName" placeholder="Voer hier uw naam in..."/><br/>
            Woonplaats: <input type="text" name="txtCity" placeholder="Voer hier uw woonplaats in..."/><br/>
            Geboortedatum: <input type="date" name="dpDOB"/><br/>
            <input type="submit" name="btnSave" value="Opslaan"/>
        </form>
        <?php
        //Verbinding maken met de database (connectie in database.php)
        include("database.php");

        //Als er op de opslaan knop geklikt is...
        if(isset($_POST['btnSave'])){
            // Als txtName leeg is
            if(empty($_POST['txtName'])){
                echo "Er is geen naam ingevuld!";
            } else { // Als txtName WEL gevuld is
                echo $_POST['txtName'];
            }
            echo "<br/>";
            if(empty($_POST['txtCity'])){
                echo "Er is geen woonplaats ingevuld!<br/>";
            } else {
                echo $_POST['txtCity']."<br/>";
            }
            if(empty($_POST['dpDOB'])){
                echo "Er is geen geboortedatum geselecteerd!";
            } else {
                echo $_POST['dpDOB'];
            }
        }
        ?>
    </body>
</html>