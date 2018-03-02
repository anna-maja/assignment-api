<?php 
    define("PAGE_TITLE", "Se beställningar");
    include "header.php";
    
?>

<?php 
            // Databasuppkoppling
            require_once('connect.php');
            // Skapa SQL-sats som hämtar data från tabellerna produkt och beställning i databasen
            // tabellerna kopplas ihop genom artikelnr
            $query = "SELECT B.ordernr, B.orderdatum, P.artikelnr, P.namn, P.pris, B.fornamn, B.efternamn, B.telefon,
            B.epost, B.adress, B.postnr, B.stad
            FROM bestallning B, produkt P
            WHERE B.produkt = P.artikelnr
            ORDER BY B.ordernr";
            // Kör SQL-satsen
            $table = mysqli_query($connection,$query) or die(mysqli_error($connection));

        ?>
        <h3>Beställningar</h3>
        <!-- Visa en tabell över samtliga beställningar -->
        <table class='table table-sm table-hover' border='1'><tr>
            <thead class="thead-light">
                <th>Ordernr</th><th>Orderdatum</th><th>Art nr</th><th>Produkt</th>
                <th>Pris</th><th>Förnamn</th><th>Efternamn</th><th>Telefon</th>
                <th>E-post</th><th>Adress</th><th>Postnr</th><th>Stad</th>
                </tr>
                <?php while($row = $table->fetch_assoc()): // kolon : och endwhile; istället för klamrar {} ?>
                <tr>
            </thead>
            <td><?php echo $row['ordernr'] ?> </td>
            <td><?php echo $row['orderdatum'] ?> </td>
            <td><?php echo $row['artikelnr'] ?> </td>
            <td><?php echo $row['namn'] ?> </td>
            <td><?php echo $row['pris'] ?> </td>
            <td><?php echo $row['fornamn'] ?> </td>
            <td><?php echo $row['efternamn'] ?> </td>
            <td><?php echo $row['telefon'] ?> </td>
            <td><?php echo $row['epost'] ?> </td>
            <td><?php echo $row['adress'] ?> </td>
            <td><?php echo $row['postnr'] ?> </td>
            <td><?php echo $row['stad'] ?> </td>
            
            </tr>
                <?php endwhile; ?>
        </table>

        <?php include "footer.php" ?>

