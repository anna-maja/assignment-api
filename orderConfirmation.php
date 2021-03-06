<?php 
    define("PAGE_TITLE", "Orderbekräftelse");
    include "header.php";  
?>

<div class="jumbotron">
    <!-- Samma format men olika text -->
    <h1>Orderbekräftelse</h1>
</div>

<?php
// Funktion för validering av formuläret
function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php

// Logga in i databasen
require_once('connect.php');

// Hämta data från $_POST-arrayen

if(isset($_POST['artikelnr']) && isset($_POST['yourFname']) && isset($_POST['yourLname']) && isset($_POST['yourPhone']) 
&& isset($_POST['yourEmail']) && isset($_POST['yourAddress']) && isset($_POST['yourCity']) && isset($_POST['yourZip'])){
    if(empty($_POST['artikelnr']) || empty($_POST['yourFname']) || empty($_POST['yourLname']) || empty($_POST['yourPhone']) 
    || empty($_POST['yourEmail']) || empty($_POST['yourAddress']) || empty($_POST['yourCity']) || empty($_POST['yourZip'])){
    
        // Om en person inte fyller i samtliga fält på ordersidan visas ett felmeddelande
        echo "<p class='alert alert-danger'>OBS! Du måste fylla i samtliga fält i orderformuläret innan bekräftelsen kan visas</p>";
        echo "<a href='index.php' class='btn btn-danger btn-block'>Till startsidan</a>";
    
    }
    else{
        // Anropa funktionen check_input
        $product = check_input($_POST['produkt']);
        $price = check_input($_POST['pris']);
        $article = check_input($_POST['artikelnr']);
        $fname = check_input($_POST['yourFname']);
        $lname = check_input($_POST['yourLname']);
        $phone = check_input($_POST['yourPhone']);
        $mail = check_input($_POST['yourEmail']);
        $address = check_input($_POST['yourAddress']);
        $city = check_input($_POST['yourCity']);
        $zip = check_input($_POST['yourZip']);
    
    
        // Förbered en SQL-sats som lägger till en ny post i tabellen beställning i databasen
        $sql= "INSERT INTO bestallning (produkt, fornamn, efternamn, telefon, epost, adress, postnr, stad, orderdatum) 
        VALUES ('$article','$fname', '$lname', '$phone', '$mail', '$address', '$zip', '$city', CURRENT_TIMESTAMP)";
    
        // Exekvera SQL-satsen
        mysqli_query($connection, $sql) or die(mysqli_error($connection));
    
        // Skriv ut orderbekräftelse
        echo "<h2>Din order har skickats!</h2>";
        echo "<table class='table'>";
        echo "<thead><tr>
        <th scope='col'>Datum</th>
        <th scope='col'>Produkt</th>
        <th scope='col'>Pris</th>
        </tr></thead>
        <tbody><tr>
        <td>" . date("Y-m-d") . "</td>
        <td>$product</td>
        <td>$price</td>
        </tr></tbody>
        </table>";
      
        echo "<div class='row'><div class='col-sm-6'>
        <ul class='list-unstyled'><strong>Leveransadress:</strong>
        <li>$fname $lname</li>
        <li>$address</li>
        <li>$zip $city</li>
        </ul></div>";
        echo "<div class='col-sm-6'>
        <ul class='list-unstyled'><strong>Kontaktuppgifter:</strong>
        <li>$mail</li>
        <li>$phone</li>
        </ul></div></div>";
        echo "<a href='index.php' class='btn btn-primary btn-block'>Tillbaka till startsidan</a>";
    }
} else{
    // Om en person går in på ordersidan utan att välja en produkt på startsidan visas ett felmeddelande
    echo "<p class='alert alert-danger'>OBS! Du måste välja en produkt innan beställningen kan utföras</p>";
    echo "<a href='index.php' class='btn btn-danger btn-block'>Till startsidan</a>";
}

?>

 <?php include "footer.php" ?>