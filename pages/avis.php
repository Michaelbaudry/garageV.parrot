<?php require '../php/header.php'?>
    <section class="section_contact">
        <div class="filter">
            <form id="avis-form">
                <h2>Nous sommes à votre écoute</h2>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="avis">Votre demande / avis :</label>
                    <textarea id="avis" name="avis" required></textarea>
                </div>
                <button type="submit" class="btn3">Envoyer</button>
            </form>
        </div>
    </section>
<?php require '../php/footer.php'?>