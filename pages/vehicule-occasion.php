<?php require '../php/header.php'?>

    <main class="main">
        <h2>Véhicules d'Occasion</h2>
        </div>
        <div class="texte">
        <img src="/garageV.parrot/image/voiture d'occasion.jpeg" alt="photo carrosserie">
            <p>À la recherche d'une véritable perle parmi les voitures d'occasion dans la région de Toulouse ? 
                Ne cherchez plus, le garage Vincent Parrot est votre destination incontournable pour dénicher la voiture
                de vos rêves. Spécialiste de l'occasion, Vincent Parrot s'est forgé une réputation en tant que
                fournisseur de confiance solide, offrant à ses clients des véhicules d'occasion d'une qualité
                irréprochable.
                Situé en plein cœur de Toulouse, Vincent Parrot est bien plus qu'un simple garage auto.
                Forte d'une équipe d'experts passionnés, l'entreprise se distingue par son professionnalisme et son 
                engagement envers la satisfaction de ses clients. Chaque voiture qui atterrit dans leur garage subit un
                contrôle minutieux, garantissant ainsi une prestation de qualité et une totale transparence.
                Conscients des appréhensions liées au marché de l'occasion, Vincent Parrot s'est donné pour mission 
                de mettre fin aux mauvaises surprises. Ici, pas de prix exorbitants ni d'arnaque. Leur politique est 
                claire : le prix des voitures d'occasion est équitablement fixé en se basant sur la côte argus et les 
                spécificités du véhicule, vous offrant ainsi un investissement qui vaut vraiment le coup.</p>
        </div>
        <div class="trait"></div>

        <h2>Nos voitures</h2>
    
        <!--===================================filtre de re recherche============================================-->
    <div class="croquis-and-filter">
        <div class="croquis-left">
            <img src="/garageV.parrot/image/Croquis Gauche.jpeg" alt="photo croquis">
        </div>
        <div class="filter-container">
            <div class="filter">
                <h2>Filtres de recherche</h2>
                <div class="filter-row">
                    <label for="classe">Marque :</label>
                    <select id="classe">
                        <option value="">Toutes les marques</option>
                        <option value="A">Dacia</option>
                        <option value="B">Opel</option>
                        <option value="C">Volkswagen</option>
                        <option value="D">Renault</option>
                    </select>
                </div>
                <div class="filter-row">
                    <label for="km">Kilométrage :</label>
                    <select id="km">
                        <option value="">Tous les kilométrages</option>
                        <option value="0-50000">0 - 50 000 km</option>
                        <option value="50000-100000">50 000 - 100 000 km</option>
                        <option value="100000-150000">100 000 - 150 000 km</option>
                        <option value="150000-200000">150 000 km - 200 000 km</option>
                    </select>
                </div>

                <div class="filter-row">
                    <label for="annee">Année :</label>
                    <select id="annee">
                        <option value="">Toutes les années</option>
                        <option value="2000-2010">2000 - 2010</option>
                        <option value="2010-2015">2010 - 2015</option>
                        <option value="2015-2023">2015 -2023</option>
                    </select>
                </div>

                <div class="filter-row">
                    <label for="prix">Prix :</label>
                    <select id="prix">
                        <option value="">Tous les prix</option>
                        <option value="0-10000">0 - 10 000 €</option>
                        <option value="10000-20000">10 000 - 20 000 €</option>
                        <option value="20000-30000">20 000 - 30 000 €</option>
                        <option value="30000+">30 000 € et plus</option>
                    </select>
                </div>
                <div class="btn-container">
                    <button class="btn3 btn-filter" id="filter-btn">Filtrer</button>
                    <button id="reset-btn" class="btn3">Réinitialiser</button>
                </div>
            </div>
        </div>
        <div class="croquis-right">
            <img src="/garageV.parrot/image/Croquis Droite.jpeg" alt="photo croquis">
        </div>
    </div>
    <div class="trait"></div>
        <!--===================================fin du filtre de recherche=========================================-->

        <div class="container">
            <div class="card card-occasion" id="dacia" data-classe="A" data-km="45000" data-annee="2019"
                data-prix="17500">
                <img src="/garageV.parrot/image/Dacia Sandero.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Dacia Sandero</p>
                        <p class="annee">année : 2019</p>
                        <p class="km">45 000 km</p>
                        <p class="prix">17 500 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="opel" data-classe="B" data-km="75000" data-annee="2016"
                data-prix="12500">
                <img src="/garageV.parrot/image/Opel Corsa.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Opel Corsa</p>
                        <p class="annee">année : 2016</p>
                        <p class="km">75 000 km</p>
                        <p class="prix">12 500 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="golf" data-classe="C" data-km="125000" data-annee="2012"
                data-prix="9500">
                <img src="/garageV.parrot/image/Volkswagen golf.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Volkswagen Golf</p>
                        <p class="annee">année : 2012</p>
                        <p class="km">125 000 km</p>
                        <p class="prix">9 500 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="renault" data-classe="D" data-km="175000" data-annee="2000"
                data-prix="5500">
                <img src="/garageV.parrot/image/Renault 5.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Renault 5</p>
                        <p class="annee">année : 2000</p>
                        <p class="km">175 000 km</p>
                        <p class="prix">5 500 €</p>
                    </h3>
                </div>
            </div>
            <div class="card card-occasion" id="dacia" data-classe="A" data-km="15000" data-annee="2021"
                data-prix="25500">
                <img src="/garageV.parrot/image/Duster.jpeg" alt="photo de voiture">
                <div class="card-body">
                    <h3 class="card-title">
                        <p class="name">Dacia Duster</p>
                        <p class="annee">année : 2021</p>
                        <p class="km">15 000 km</p>
                        <p class="prix">25 500 €</p>
                    </h3>
                </div>
            </div>
        </div>
        <div class="trait"></div>
        <div class="center">
            <div class="contact-container">
                <p>N'hésitez pas à nous contacter pour toutes demandes</p>
                <a href="avis.php"><button class="btn3">contactez nous</button></a>
            </div>
        </div>
    </main>
<?php require '../php/footer.php'?>
    <script src="/garageV.parrot/script.js"></script>
