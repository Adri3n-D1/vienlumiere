<!--
vienlumiere.fr - tous droits réservés -
Créé par Adrien Delcros https://www.webdragon.fr
Pour Éloïse Delcros https://www.vienlumiere.fr
-->

<?php include("includes/form_script.php"); ?>
<?php include("includes/start_page.php"); ?>
<?php include("includes/header.php"); ?>


<!-- MAIN -->
<main>
    <!-- SECTION GROUPE FORM + INFO -->
    <div id="section-grp-form-info">
        <div class="page-content">
            <?php
            // Si le message est prêt à être envoyé et que l'utilisateur ne veux pas le modifier
            // On affiche une demande de confirmation de l'envoi
            if ( $displayDeliveryConfirmation and ! isset($_POST['form-btn-modify']) and ! isset($_POST['form-btn-send']))
            {
                include("includes/form_send_contact.php");
            }
            // Si le message est prêt à être envoyé et que l'utilisateur à confirmer l'envoi
            // On affiche la confirmation de l'envoi
            elseif (isset($_POST['form-btn-send']))
            {
                echo '<h1>YOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</h1>';

            }
            // Sinon retour au formulaire de contact
            else
            {
                include("includes/form_contact.php");
            }
            ?>

            <!-- SECTION INFO -->
            <div id="section-contact-info">
                <h2>Information de contact</h2>
                <div class="content">
                    <div class="box">
                        <!--  -->
                        <div class="grp">
                            <!--  -->
                            <div class="duo">
                                <img class="img-rotate" src="images/jeton_id.png" alt="">
                                <p>Eloïse Delcros</p>
                            </div>
                            <!--  -->
                            <div class="duo">
                                <img class="img-rotate" src="images/jeton_tel.png" alt="">
                                <p><?php echo $linkPhoneNumber ?></p>
                            </div>
                        </div>
                        <!--  -->
                        <div class="grp">
                            <!--  -->
                            <div class="duo">
                                <img class="img-rotate" src="images/jeton_mail.png" alt="">
                                <p><?php echo $linkEmailAdress ?></p>
                            </div>
                            <!--  -->
                            <div class="duo">
                                <img class="img-rotate" src="images/jeton_lettre.png" alt="">
                                <p><?php echo $OfficeAdressFull ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="duo">
                        <img class="img-rotate" src="images/jeton_fb.png" alt="">
                        <p><a href="<?php echo $urlFacebook ?>">lien vers ma page facebook</a></p>
                    </div>
                    <p class="alt">
                        Les prises de rendez-vous se font uniquement par <a href="<?php echo $urlPhoneNumber ?>">téléphone</a>,
                        <a href="<?php echo $urlEmailAdress ?>">email</a> ou via le <a href="#section-contact-form">formulaire de contact</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION LOCALISATION -->
    <div class="sep-location"></div>

    <div id="section-location"></div>

    <div class="sep-location"></div>
</main>

<?php include("includes/footer.php"); ?>
<?php include("includes/end_page.php"); ?>