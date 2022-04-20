<!--
vienlumiere.fr - tous droits réservés -
Créé par Adrien Delcros https://www.webdragon.fr
Pour Éloïse Delcros https://www.vienlumiere.fr
-->

<?php include("includes/start_page.php"); ?>
<?php include("includes/header.php"); ?>

<main>

    <!-- SECTION INTRO -->    
    <div id="section-intro">
        <div class="page-content">
            <img src="images/soin_energetique.jpg" alt="">
            <p>
                Notre corps est un merveilleux émetteur-récepteur énergétique, avec des capacités d'auto-guérison exceptionnelles lorsqu'il est bien équilibré.
                Mais certains évènements de la vie, émotions et diverses autres raisons peuvent perturber notre champ énergétique, pouvant mener à la maladie.
            </p>
        </div>
    </div>

    <!-- SECTION GROUPE DE SECTION GÉNÉRIQUE + LÉGAL --> 
    <div id="page-background">

        <!-- SECTION GÉNÉRIQUE -->
        <div class="section-generic">
            <div class="page-content">
                <h2>Déroulement d'un soin</h2>
                <p>
                    Pendant la séance, je vous demanderais de fermer les yeux afin d'<em>accueillir</em> pleinement le soin que je vous prodiguerai.
                </p>
                <p>
                    Chaque séance se divise en 2 parties&nbsp;:
                </p>
                <ul>
                    <li>Une partie en <em>magnétisme</em> qui va vous soulager, traiter certaines gènes et faire circuler l'énergie dans votre corps.</li>
                    <li>Une partie en <em>énegétique</em> où je vais travailler essentiellement sur vos chakras principaux, qui va équilibrer et harmoniser vos corps. Je terminerai par un nettoyage énegétique qui vous permettra de vous libérer de fréquences basses emmagasinées au fil du temps dans vos corps.</li>
                </ul>
                <p>
                    Après un soin énergétique, il est possible d'avoir des réactions fortes et inattendues. C'est la <em>crise d'élimination</em>, il ne faut pas s'affoler, cela signifie seulement que le soin agit en éveillant les maux pour les soulager définitivement par la suite.
                </p>
                <p>
                    Je ne peux déterminer par avance le nombre de séances, mais en général 1 à 3 suffisent.
                </p>
            </div>
        </div>

        <!-- SECTION LÉGAL -->   
        <div id="legal" class="page-content">
            <p>
                N'étant pas médecin, je ne poserais aucun diagnostique, je ne ferais pas de prescription et je ne vous demanderais pas d'interrompre ou d'arrêter quelconque traitement médical.
            </p>
        </div>

        <!-- SECTION GÉNÉRIQUE -->
        <div class="section-generic">
            <div class="page-content">
                <h2>Efficacité d'un soin</h2>
                <p>
                    Ces soins sont d'une <em>grande aide</em> pour soulager les maux de l'âme.
                </p>
                <p>
                    Ils <em>soulageront</em> différents troubles, différentes douleurs ou pathologies, que ce soit d'ordre <em>physique</em> ou <em>émotionnel</em>.
                </p>
                <p>
                    Ces soins peuvent vous <em>acompagner</em> lors de traitements lourds et difficiles à supporter pour votre corps.
                </p>
                <p>
                    Ils vous <em>soutiendront</em> également dans des moments durs ou inconfortables de votre <em>vie</em>.
                </p>
            </div>
        </div>

    </div>

    <!-- SECTION DÉMARCHE --> 
    <div id="section-step">
        <div class="page-content">
            <h2>Démarche</h2>
            <div class="content">
                <div class="grp-step">
                    <h3>1 - Prendre rendez-vous avec moi&nbsp;:</h3>
                    <p>
                        Pour cela je vous invite à visiter ma page <a href="contact.php">contact</a> pour obtenir mes coordonées complètes, ou tout simplement m'appeler au <?php echo $linkPhoneNumber ?>.
                    </p>
                </div>
                <div class="grp-step">
                    <h3>2 - Venir au cabinet&nbsp;:</h3>
                    <p>
                        Il vous faudra venir à mon cabinet à l’heure du soin, cabinet qui se situe au <em><?php echo $OfficeAdressStreet ?></em> à <em><?php echo $OfficeAdressTown ?></em>.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION TARIF -->
    <div id="section-rate">
        <div class="page-content">
            <h2>Tarif</h2>
            <p> Le tarif pour une séance de soin énergétique est de <em>50€</em>.</p>
            <p><strong>Les méthodes de paiement&nbsp;:</strong></p>
            <ul>
                <!--  -->
                <li class="duo">
                    <img class="img-rotate" src="images/jeton_espece.png" alt="">
                    <p>Espèce</p>
                </li>
                <!--  -->
                <li class="duo">
                    <img class="img-rotate" src="images/jeton_virement.png" alt="">
                    <p>Virement</p>
                </li>
            </ul>
        </div>
    </div>
</main>

<?php include("includes/site_nav.php"); ?>
<?php include("includes/footer.php"); ?>
<?php include("includes/end_page.php"); ?>