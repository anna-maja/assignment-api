<?php 
    define("PAGE_TITLE", "Order");
    include "header.php";
    
?>

<?php
    require_once('connect.php');
    // Hämta data från $_GET
    if(isset($_GET['prodID']) ){
        $prodID = htmlspecialchars($_GET['prodID']);
        // Förbered en SQL-sats som hämtar all data tillhörande vald produkt från tabellen produkt i databasen
        $sql = "SELECT * FROM produkt WHERE artikelnr = $prodID";
        // Exekvera SQL-satsen
        $table = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        
        $row = $table->fetch_assoc();


        // Skapa ett formulär som även hämtar produktnamn och pris till readonly-fält i formuläret
        // samt artikelnr som "hidden value"
        echo "<form action='orderConfirmation.php' method='post'>
                <input type='hidden' name='artikelnr' value=" .  $row['artikelnr']  . ">
                <h2>Din order: </h2>
                <br>
                <div class='form-row'>
                    <div class='form-group col-sm-6'>
                        <label for='produkt'>Vald produkt</label>
                        <input type='text' readonly class='form-control' id='produkt' name='produkt' value=' " . $row['namn']  . "
                        '>
                    </div>
                    <div class='form-group col-sm-6'>
                        <label for='pris'>Pris i kr</label>
                        <input type='text' readonly class='form-control' id='pris' name='pris' value=' " . $row['pris'] . " '>
                    </div>       
                </div>
                <div class='form-row'>
                    <div class='form-group col-sm-6'>
                        <label for='yourFname'>Förnamn</label>
                        <input type='text' class='form-control' id='yourFname' name='yourFname' placeholder='Förnamn' required>
                    </div>
                    <div class='form-group col-sm-6'>
                        <label for='yourLname'>Efternamn</label>
                        <input type='text' class='form-control' id='yourLname' name='yourLname' placeholder='Efternamn' required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group col-sm-4'>
                        <label for='yourPhone'>Telefon</label>
                        <input type='tel' pattern='^[0-9\-\+\s]*$' title='Nummer (0-9), bindestreck -, plus +, och mellanslag är tillåtet.' class='form-control' id='yourPhone' name='yourPhone' placeholder='Telefon' required>
                    </div>
                    <div class='form-group col-sm-8'>
                        <label for='yourEmail'>E-mail</label>
                        <input type='email' class='form-control' id='yourEmail' name='yourEmail' placeholder='E-mail' required>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='form-group col-sm-6'>
                        <label for='yourAddress'>Adress</label>
                        <input type='text' class='form-control' id='yourAddress' name='yourAddress' placeholder='Gatuadress' required>
                        <small id='passwordHelpBlock' class='form-text text-muted'>
                            * Samtliga fält måste fyllas i för att beställning ska kunna genomföras
                        </small>
                    </div>
                    <div class='form-group col-sm-4'>
                        <label for='yourCity'>Stad</label>
                        <input type='text' class='form-control' id='yourCity' name='yourCity' placeholder='Stad' required>
                    </div>
                    <div class='form-group col-sm-2'>
                        <label for='yourZip'>Postnr</label>
                        <input type='text' class='form-control' id='yourZip' name='yourZip' placeholder='Postnr' required>
                    </div>
                </div>
                <div class='form-group row'>
                    <div class='col-sm-12'>
                        <button type='submit' class='btn btn-primary'>Skicka beställning</button>
                    </div>
                </div>
            </form>";

  
       
    }
    else{
        // Om en person går in på ordersidan utan att välja en produkt på startsidan visas ett felmeddelande
        echo "<p class='alert alert-danger'>OBS! Du måste välja en produkt innan beställningen kan utföras</p>";
        echo "<a href='index.php' class='btn btn-danger btn-block'>Till startsidan</a>";
    }
?>




 <?php include "footer.php" ?>