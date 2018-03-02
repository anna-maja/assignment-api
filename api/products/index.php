<?php

// INGET ANNAT ÄN PHP-TAGG!!!!!!!!!

    //  Steg 1: Logga in i databasen.
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "root";
    $dbName = "webshop";

    //  skapa koppling med ovanstående argument. Felmeddelande om det inte funkar.
    $connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);
    if(!$connection){
    echo "<h1>Fel! <br>" . mysqli_connect_error() . "</h1>";
    exit;
}

    // Hantera svenska tecken.
    mysqli_set_charset($connection,"utf8");


    // // Steg 2: Hämta data från databasen
    // // Skapa en SQL-sats för att ta fram allt i filmbasen. Allt lagras först i ett enda objekt. 
    $query = "SELECT * FROM produkt";
    // Kör SQL-sats med mysqli_query och spara som table
    // felmeddelande om 
    $table = mysqli_query($connection, $query)
         or die(mysqli_error($connection));


    // Steg 3: Lagra data i en array. 
    $array = array();
    
    while ($row = $table -> fetch_assoc()){
        $array[] = $row; // varje post lagras i en arraypost som heter row.
    } 
    // echo "<pre>";
    // echo print_r($array);
    // echo "</pre>";


    // Steg 4: Skapa JSON så att användare kan använda vår api. (Returns the JSON representation of a value)
    $json_string = json_encode($array, JSON_PRETTY_PRINT);
    
    // Skriv ut JSON-Strängen för att testa att den funkar
    echo $json_string;
    
?>