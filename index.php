<?php require './php/header.php'?>

    <img src="./image/hero.jpg" alt="photo de couverture" class="img-cover">
    <main class="main">
        <section>
            <h2>A Propos</h2>
            <div class="texte">
                <p>Vincent Parrot, fort de ses 15 années d'expérience dans la réparation automobile, 
                a ouvert son propre garage à Toulouse en 2021.
                Depuis 2 ans, il propose une large gamme de services: réparation de la carrosserie et de la mécanique
                des voitures ainsi que leur entretien régulier pour garantir leur performance et leur sécurité. De plus,
                le Garage V. Parrot met en vente des véhicules d'occasion afin d'accroître son chiffre d'affaires.
                Vincent Parrot considère son atelier comme un véritable lieu de confiance pour ses clients et leurs 
                voitures doivent, selon lui, à tout prix être entre de bonnes mains.</p>
                <img class="full-width-image" src="./image/photo d'accueil.jpg" alt="photo voiture">
            </div>
            <a href="./pages/vehicule-occasion.php"><button class="btn2">En savoir plus</button></a>
        </section>
        <section class="bg-blk">
            <h2>Nos prestations</h2>
            <div class="container">
                <div class="card">
                    <a href="./pages/carrosserie.php"> <img src="./image/carrosserie.jpg"alt="photo de voiture">
                        <div class="card-body">
                            <h3 class="card-title">Carrosserie</h3>
                        </div>
                    </a>
                </div>

                <div class="card">
                    <a href="./pages/mecanique.php"> <img src="./image/mecanique.jpg" alt="photo de voiture">
                    <div class="card-body">
                        <h3 class="card-title">mécanique</h3>
                    </div>
                </div>

                <div class="card">
                    <a href="./pages/vehicule-occasion.php"><img src="./image/vehicule d'occasion.jpg" alt="photo de voiture">
                    <div class="card-body">
                        <h3 class="card-title">véhicules d'occasions</h3>
                    </div>
                </div>

                

            </div>
        </section>
        <section class="bg-blc">
            <div class="avis">
                <a href="./pages/avis.php">Votre avis nous interesse</a>
                <p>Prenez le temps de nous donner une apreciation !</p>
            </div>
        </section>
    </main>
  <?php require './php/footer.php'?>