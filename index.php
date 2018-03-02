<?php 
    define("PAGE_TITLE", "Tobias webshop");
    include "header.php";
    
?>

<h2>Produkter</h2>
<div class="row">
<?php 
    // Databasuppkoppling
    require_once('connect.php');

    // Skapa SQL-sats som hämtar all data från tabellen produkt i databasen
    $query = "SELECT * FROM produkt";

    // Kör SQL-satsen
    $table = mysqli_query($connection,$query) or die(mysqli_error($connection));

    // Starta en loop för att skriva ut alla produkter som kort
    while($row = $table->fetch_assoc()): // kolon : och endwhile; istället för klamrar {}
?>

<!-- Starta en kolumn -->
<div class="col-sm-4">
    <div class="card">
        <img class="card-img-top img-fluid" src="Bilder/<?php echo $row['bild'] ;?>" alt="<?php echo $row['namn'] ;?>">
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['namn'] ;?></h5>
            <p class="card-text">Pris: <?php echo $row['pris'] ;?> kr <br> Beskrivning: <?php echo $row['beskrivning'] ;?></p>
            <a href="order.php?prodID=<?php echo $row['artikelnr'] ;?>" 
            class="btn btn-primary btn-block">Köp nu</a>
        </div>
    </div>

</div><!-- avsluta en kolumn -->


<?php endwhile; ?>

</div> <!-- row -->


    <?php include "footer.php" ?>