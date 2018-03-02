<?php 
define("PAGE_TITLE", "Retrobutiken");
include 'header.php';
?>
<div class="jumbotron">
    <!-- Samma format men olika text -->
    <h1>Välkommen till retrobutiken!</h1>
</div>
<h2>Produkter</h2>

<!-- row startar -->
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
            <img class="card-img-top img-fluid" src="images/<?php echo $row['bild'] ;?>" alt="<?php echo $row['namn'] ;?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['namn'] ;?></h5>
                <p class="card-text">Pris: <?php echo $row['pris'] ;?> kr <br> Beskrivning: <?php echo $row['beskrivning'] ;?></p>
                <a href="order.php?prodID=<?php echo $row['artikelnr'] ;?>" 
                class="btn btn-primary btn-block">Köp nu</a>
            </div> 
        </div> 
    </div>
    <?php endwhile; ?> <!-- avslutar while-loopen som genererar produktkorten -->
</div> <!-- avslutar row -->

<!-- lägger in footer -->
<?php include 'footer.php' ?>
