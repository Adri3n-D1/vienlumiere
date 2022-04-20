<!-- FOOTER -->
<footer>

    <!-- FOOTER - PARTIE HAUTE -->
    <div id="site-footer-top">
        <div class="page-content">

            <!-- FOOTER - PARTIE HAUTE - CONTACT -->
            <div id="site-footer-contact">
                <!-- duo -->
                <div class="duo">
                    <div class="box-img">
                        <img src="images/jeton_id_gris_sur_rouge.png" alt="">
                    </div>
                    <div class="box-txt">
                        <p>Éloïse Delcros<br /><?php echo $jobName; ?></p>
                    </div>
                </div>
                <!-- duo -->
                <div class="duo">
                    <div class="box-img">
                        <img src="images/jeton_tel_gris_sur_rouge.png" alt="">
                    </div>
                    <div class="box-txt">
                        <p><?php echo $linkPhoneNumber; ?></p>
                    </div>
                </div>
                <!-- duo -->
                <div class="duo">
                    <div class="box-img">
                        <img src="images/jeton_mail_gris_sur_rouge.png" alt="">
                    </div>
                    <div class="box-txt">
                        <p><?php echo $linkEmailAdress; ?></p>
                    </div>
                </div>
                <!-- duo -->
                <div class="duo">
                    <div class="box-img">
                        <img src="images/jeton_lettre_gris_sur_rouge.png" alt="">
                    </div>
                    <div class="box-txt">
                        <p><?php echo $OfficeAdressFull; ?></p>
                    </div>
                </div>
            </div>

            <!-- FOOTER - PARTIE HAUTE - LIENS INTERNES -->
            <div id="site-footer-link">
                <div id="site-footer-link-in">
                    <h2>Liens internes</h2>
                    <ul>
                        <li><a href="#">plan du site</a></li>
                        <li><a href="#">page contact</a></li>
                        <li><a href="#">informations légales</a></li>
                        <li><a href="#">À propos de ce site</a></li>
                    </ul>
                </div>

                <!-- FOOTER - PARTIE HAUTE - LIENS EXTERNES -->

                <div class="sep-link"></div>

                <div id="site-footer-link-out">
                    <h2>Liens externes</h2>
                    <ul>
                        <li><a href="<?php echo $urlLocationLeaflet ?>">Localisation Leaflet</a></li>
                        <li><a href="<?php echo $urlLocationGoogle ?>">Localisation Google Map</a></li>
                        <li><a href="<?php echo $urlGoogleBusiness ?>">Me retrouver sur Google</a></li>
                        <li><a href="<?php echo $urlFacebook ?>">Ma page Facebook</a><a href="<?php echo $urlFacebook ?>"><img src="images/fb_square_gris.png" alt="Liens vers le Facebook de Vie en Lumière"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER - PARTIE BASSE -->
    <div id="site-footer-bottom">
        <div class="page-content">

            <!-- FOOTER - PARTIE BASSE - VIENLUMIERE -->

            <div id="site-footer-vienlumiere">
                <div id="site-footer-confidential">
                    <p><a href="#">Politique de confidentialitée</a></p>                        
                </div>

                <div class="sep sep-vienlumiere"></div>

                <div id="site-footer-credit-vienlumiere">
                    <p>&#169; 2021 vienlumiere.fr</p>
                    <p>tous droits réservés</p>
                </div>
            </div>

            <!-- FOOTER - PARTIE BASSE - ADN -->

            <div class="sep sep-adn"></div>

            <div id="site-footer-credit-adn">
                <p>Créé par <?php echo $webmasterLinkUrlSite ?></p>
                <p class="box-img"><a class="except" href="<?php echo $webmasterUrlFacebook ?>"><img src="images/facebook_gris_15x15.png" alt="Liens vers le facebook de Adrien Delcros"></a></p>
            </div>
        </div>
    </div>
</footer>