<!--
vienlumiere.fr - tous droits réservés -
Créé par Adrien Delcros https://www.webdragon.fr
Pour Éloïse Delcros https://www.vienlumiere.fr
-->

<?php include("includes/start_page.php"); ?>
<?php include("includes/header.php"); ?>

<!-- MAIN -->
<main>
    <!-- SECTION INTRODUCTION -->
    <div id="section-intro">
        <div class="page-content">
            <img src="images/blog.jpg" alt="">
            <p>
                Au travers de ce blog, je vous propose et proposerais des articles lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices tempus, bibendum dignissim lectus. Amet, nibh hac eget tincidunt urna netus velit sapien volutpat. Nisl lorem sit scelerisque nullam. Nec sit semper adipiscing amet a. Ultrices at et convallis eget consequat. Facilisis facilisi dolor nisi, a sed nisi. In quisque purus tincidunt gravida viverra convallis id integer. Massa sagittis egestas ullamcorper risus. Tristique sodales quis aliquet libero elit purus. Nunc arcu in nibh urna nec. Risus lectus arcu mauris, id sed tellus vestibulum id etiam. Placerat vitae tellus non faucibus nisi. Lectus feugiat amet, sollicitudin arcu quisque laoreet. Neque metus, convallis non ac amet, quam consectetur feugiat amet.
            </p>
        </div>
    </div>


    <!-- SECTION AUTEUR -->
    <div id="section-blog-author">
        <div class="page-content">
            <h2>Auteurs</h2>
            <?php include('blog/includes/authors/eloise_delcros.php') ?>
            <?php include('blog/includes/authors/frederique_cantacuzene.php') ?>
        </div>
        <!-- Le separateur est utilisé pour stopper le float -->
        <div class="sep"></div>
    </div>


    <!-- SECTION CATÉGORIE -->
    <div id="section-blog-category">
        <div class="page-content">
        </div>
    </div>


    <!-- SECTION DERNIER ARTICLES -->
    <div id="section-blog-last-articles">
        <div class="page-content">
            <h2>Derniers articles parus</h2>
            <!--  -->
            <div class="box-article">
                <p class="article-category">categorie : <em>énergie</em></p>
                <h3>L'ancrage</h3>
                <div class="sep"></div>
                <div class="grp-article">
                    <img src="images/ancre_mini.jpg" alt="">
                    <p class="summary-article">
                        Après des années de pratiques énergétiques, je me suis aperçue que le manque d’ancrage touche beaucoup de personnes. À mon sens, un bon enracinement est la base pour un bon équilibre énergétique et pour une vie accomplie. Dans cet article, je vais expliquer l’importance d’être bien ancré aux énergies de la terre, je vais vous détailler les signes révélant un manque d’ancrage et vous donner des conseils pour améliorer et entretenir un bon enracinement à la terre-mère.
                    </p>
                </div>
                <p class="read-article"><a href="blog/l_ancrage.html">Lire la suite de L'article...</a></p>
                <div class="footer-article">
                    <p class="author-name">Par : <em>Éloïse Delcros</em></p>
                    <p class="last-update">Dernière modification le 21 Septembre 2021</p>
                </div>
            </div>
            <!--  -->
            <div class="box-article">
                <p class="article-category">categorie : <em>réflexion</em></p>
                <h3>Si j'étais toi...</h3>
                <div class="sep"></div>
                <div class="grp-article">
                    <img src="images/statue_mini.jpg" alt="">
                    <p class="summary-article">
                        Qui n’a jamais entendu cette petite phrase énervante, bien souvent proférée par des gens à qui on n’a pas demandé leur avis, mais qui le donnent quand même…
                    </p>
                </div>
                <p class="read-article"><a href="blog/si_j_etais_toi.html">Lire la suite de L'article...</a></p>
                <div class="footer-article">
                    <p class="author-name">Par : <em>Frédérique Cantacuzène</em></p>
                    <p class="last-update">Dernière modification le 21 Septembre 2021</p>
                </div>
            </div>
            <!--  -->
            <div class="box-article">
                <p class="article-category">categorie : <em>réflexion</em></p>
                <h3>Frères humains</h3>
                <div class="sep"></div>
                <div class="grp-article">
                    <img src="images/lion_mini.jpg" alt="">
                    <p class="summary-article">
                        Frères humains, qui avec nous viviez.<br />
                        Comment avez vous pu…
                    </p>
                </div>
                <p class="read-article"><a href="blog/freres_humains.html">Lire la suite de L'article...</a></p>
                <div class="footer-article">
                    <p class="author-name">Par : <em>Frédérique Cantacuzène</em></p>
                    <p class="last-update">Dernière modification le 21 Septembre 2021</p>
                </div>
            </div>
        </div>
    </div>
    
</main>

<?php include("includes/site_nav.php"); ?>
<?php include("includes/footer.php"); ?>
<?php include("includes/end_page.php"); ?>