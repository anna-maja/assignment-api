<?php 
    define("PAGE_TITLE", "Om oss");
    include 'header.php';
?>
<div class="jumbotron">
    <!-- Samma format men olika text -->
    <h1>Om retrobutiken</h1>
</div>

<p>
    Retrobutiken grundades 2018 av tre passionerade entusiaster med stor smak för äldre saker.
     Lorem ipsum dolor sit amet consectetur adipisicing elit.
</p>
<p>
    Fast egentligen är det slut-uppgiften i backend-kursen för KVALIT17 under vårterminen 2018. 
</p>
<p>
    ...eller så har vi stor smak för äldre saker, vem vet?
</p>
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore perspiciatis repellat veniam. Ipsum, sunt modi hic quo asperiores eligendi voluptate vitae autem velit omnis eveniet vel qui sit dolore ut. 
</p>

<div class="row">
<!-- Starta en kolumn -->
    <div class="col-sm-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="images/tobias.jpg" alt="Tobias Hedkvist">
            <div class="card-body">
                <h5 class="card-title">Tobias Hedkvist</h5>
                <p class="card-text">Lorem ipsum dolor sit.</p>
                <p>Mailadress: <a href="">tobias.hedkvist@yh.nackademin.se</a></p>
            </div>
        </div> 
    </div> 
    <div class="col-sm-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="images/susanne.jpg" alt="">
            <div class="card-body">
                <h5 class="card-title">Susanne Fridh</h5>
                <p class="card-text">Lorem ipsum dolor sit amet.</p>
                <p>Mailadress: <a href="">susanne.fridh@yh.nackademin.se</a></p>
            </div> 
        </div> 
    </div>
    <div class="col-sm-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="images/annamaja.jpg" alt="">
                <div class="card-body">
                    <h5 class="card-title">Anna-Maja Lithner</h5>
                    <p class="card-text">Lorem ipsum dolor sit.</p>
                    <p>Mailadress: <a href="">anna-maja.lithner@yh.nackademin.se</a></p>
                </div> 
            </div> 
        </div>
    </div>
<!-- avslutar raden -->
<!-- </div> -->


<?php 
    include 'footer.php';
?>