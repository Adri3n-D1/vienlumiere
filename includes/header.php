<!-- HEADER -->
<header>

    <!-- HEADER - BANNIÈRE DU SITE -->
    <div id="site-header-banner">
        <div class="page-content">
            <!--  -->
            <div class="duo">
                <img src="images/Tel_rouge_20x20.png" alt="" />
                <?php echo $linkPhoneNumber; ?>
            </div>
            <!--  -->
            <div class="duo">
                <img src="images/mail_rouge_20x20.png" alt="" />
                <?php echo $linkEmailAdress; ?>
            </div>
            <!--  -->
            <div>
                <a href="#"><img src="images/fb_blanc_20x20.png" alt="" /></a>
            </div>
        </div>
    </div>

    <!-- HEADER - LOGO DU SITE -->
    <div id="site-header-logo">
        <!-- Le 1er titre sera affiché en permanence -->
        <div id="site-logo-1">ViEn<br />Lumière</div>
        <!-- Le second sera affiché à la place du 1er au survol de la souris -->
        <div id="site-logo-2">Vien<br />Lumière</div>  
    </div>

    <!-- HEADER - MENU DU SITE + TITRE DE LA PAGE -->
    <div id="site-header-grp-menu">

        <!-- HEADER - MENU DU SITE -->
        <div id="site-header-menu">
            <div class="page-content">
                <!-- Le menu est une simple liste, il sera caché et activable par un bouton si le viewport est trop étroit et tant que le javascript est activé  -->
                <ul>
                    <li <?php printClassCurentPage("index.php"); ?> ><a href="index.php">accueil</a></li>
                    <li <?php printClassCurentPage("soin_cabinet.php"); ?> ><a href="soin_cabinet.php">soin énergétique</a></li>
                    <li <?php printClassCurentPage("soin_distance.php"); ?> ><a href="soin_distance.php">soin à distance</a></li>
                    <li <?php printClassCurentPage("nettoyage_lieu.php"); ?> ><a href="nettoyage_lieu.php">nettoyage de lieu</a></li>
                    <li <?php printClassCurentPage("contact.php"); ?> ><a href="contact.php">contact</a></li>
                    <li <?php printClassCurentPage("blog.php"); ?> ><a href="blog.php">blog</a></li>
                </ul>
            </div>
        </div>

        <!-- HEADER - TITRE DE LA PAGE -->
        <div id="site-header-page-title">
            <div class="page-content">
                <h1><?php echo $pageH1; ?></h1>
                <div id="box-icon-header-menu">
                    <div id="icon-header-menu">
                        <a href="javascript:void(0);" class="icon-menu-mobile" onclick="switchMenu()">
                            <img  class="image-fixe" src="images/menu_hamburger.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>