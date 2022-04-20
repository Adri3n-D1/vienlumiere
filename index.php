<!--
vienlumiere.fr - tous droits réservés -
Créé par Adrien Delcros https://www.webdragon.fr
Pour Éloïse Delcros https://www.vienlumiere.fr
-->


<?php include("includes/start_page.php"); ?>
<?php include("includes/header.php"); ?>

<!-- SECTION MAIN -->
<main>

    <!-- SECTION INTRO -->    
    <div id="section-intro" class="double-img">
        <div class="page-content">
            <img class="element-1" src="images/photo_eloise_delcros_small.jpg" alt="">
            <img class="element-2" src="images/photo_eloise_delcros_large.jpg" alt="">
            <p>          
                Je m'appelle <em>Éloïse Delcros</em> et depuis ma plus tendre enfance, je ressens l'énergie et je m'interroge sur ce qui anime tout être vivant.
            </p>
            <p>
                Passionée par les <em>Arts Énergétiques</em> depuis toujours, au fil du temps j'ai enrichi mes connaissances et perfectionné mes pratiques au travers de stages, ateliers, enseignements et formations, notamment avec <em>Véronique Calls</em>.
            </p>
            <p>
                Mon travail est en perpétuelle évolution tout comme la vie qui nous traverse à tous.
                Les soins que je prodigue consistent à <em>canaliser l'énergie</em> pour permettre à votre corps de retrouver et profiter pleinement de son prodigieux pouvoir d'auto-guérison.
            </p>
            <p>
                En pratiquant le magnétisme quotidiennement, je constate chaque jour ses bienfaits, y compris sur les animaux.
            </p>
        </div>
    </div>

    <!-- SECTION LÉGAL -->   
    <div id="legal" class="page-content">
        <p>
            N'étant pas médecin, je ne poserais aucun diagnostique, je ne ferais pas de prescription et je ne vous demanderais pas d'interrompre ou d'arrêter quelconque traitement médical.
        </p>
    </div>

    <!-- SECTION PRESTATION -->
    <div id="page-background">
        <div id="section-services">
            <div class="page-content">
                <!-- Prestation est composé d'un titre puis de groupes identiques -->
                <h2>Mes prestations</h2>
                <!--  -->
                <div class="grp">
                    <h3>soin énergétique</h3>
                    <p>
                        Je prodigue ces soins à mon cabinet.<br />
                        Chaque séance se déroule en deux phases, une partie en <em>magnétisme</em> qui va soulager les troubles et une partie en <em>énergétique</em> qui va équilibrer et harmoniser les énergies qui circulent en vous.<br />
                        Ces soins sont de bon alliés pour soulager différents troubles et douleurs, qu'ils soient d'ordre physique ou émotionnel.
                    </p>
                    <p class="alt">
                        Visitez ma page <a href="soin_cabinet.php">soin énergétique</a> pour en savoir plus&nbsp;! 
                    </p>
                </div>
                <!--  -->
                <div class="grp">
                    <h3>soin à distance</h3>
                    <p>
                        Les soins à distance que je propose aident à soulager différents troubles et douleurs, qu'ils soient d'ordre <em>physique</em> ou <em>émotionnel</em>, où que vous soyez sans avoir à vous déplacer à mon cabinet.
                    </p>
                    <p class="alt">
                        Visitez ma page <a href="soin_distance.php">soin à distance</a> pour en savoir plus&nbsp;! 
                    </p>
                </div>
                <!--  -->
                <div class="grp">
                    <h3>nettoyage de lieu</h3>
                    <p>
                        Pour un nettoyage de lieu, je me déplace à votre domicile. Mon travail va consister à détecter les perturbations, qui peuvent être diverses, dans votre lieu de vie, afin d'effectuer un nettoyage énergétique.<br />
                        Une fois votre maison <em>harmonisée</em>, vous retrouverez calme et bien-être au sein de votre foyer. 
                    </p>
                    <p class="alt">
                        Visitez ma page <a href="nettoyage_lieu.php">nettoyage de lieu</a> pour en savoir plus&nbsp;!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION CONTACT + TARIF -->
    <div id="section-grp-contact-rate">
        <div class="page-content">

            <!-- SECTION CONTACT -->
            <div id="section-home-contact">
                <div id="contact">
                    <h2>Me contacter</h2>
                    <div class="box">
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
                        <!--  -->
                        <div class="duo">
                            <img class="img-rotate" src="images/jeton_mail.png" alt="">
                            <p><?php echo $linkEmailAdress ?></p>
                        </div>
                        <!--  -->
                        <div class="duo">
                            <img class="img-rotate" src="images/jeton_form.png" alt="">
                            <p><a href="#">formulaire de contact</a></p>
                        </div>
                        <!--  -->
                        <div class="duo">
                            <img class="img-rotate" src="images/jeton_lettre.png" alt="">
                            <p><?php echo $OfficeAdressFull ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION TARIFS -->
            <div id="section-home-rate">
                <h2>Mes tarifs</h2>
                <ul class="box-txt">
                    <li>Soin énergétique au cabinet&nbsp;: <br />- <em>50€ la séance</em></li>
                    <li>Soin énergétique à distance&nbsp;: <br />- <em>40€ la séance</em></li>
                    <li>Nettoyage de lieu&nbsp;: <br />- <em>à partir de 140€</em></li>
                </ul>
                <p class="alt">Les méthodes de paiement (selon les prestations)&nbsp;:</p>
                <ul class="box-img">
                    <!--  -->
                    <li class="duo">
                        <img class="img-rotate" src="images/jeton_espece.png" alt="">
                        <p>Espèce</p>
                    </li>
                    <!--  -->
                    <li class="duo">
                        <img class="img-rotate" src="images/jeton_paypal.png" alt="">
                        <p>PayPal</p>
                    </li>
                    <!--  -->
                    <li class="duo">
                        <img class="img-rotate" src="images/jeton_virement.png" alt="">
                        <p>Virement</p>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>

    <!-- SECTION SECTEUR -->
    <div id="section-sector">
        <div class="page-content">
            <h2>Mon secteur</h2>
            <p>
                Je pratique les soins énergétique dans mon cabinet qui se situe dans la commune d’<em><?php echo $OfficeAdressTown ?></em> au <em><?php echo $OfficeAdressStreet ?></em>.
            </p>
            <p>
                Je me déplace pour les nettoyages de lieux dans tous le département des <em>Pyrénées-Orientales</em>.
            </p>
            <p>
                Pour les soins à distance inutile de vous déplacer évidemment :)
            </p>
        </div>
    </div>

</main>

<?php include("includes/site_nav.php"); ?>
<?php include("includes/footer.php"); ?>
<?php include("includes/end_page.php"); ?>