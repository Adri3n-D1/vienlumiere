<!-- Top of all site pages  -->

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link type="text/css" rel="stylesheet" href="style_fonts.css" />
        <link type="text/css" rel="stylesheet" href="style_base.css" />
        <link type="text/css" rel="stylesheet" href="style_main.css" />
        <link type="text/css" rel="stylesheet" href="style_blog.css" />
        <?php 
        if ($actualFileName == 'contact.php') {
            include("includes/map_leaflet.php");
        }
        ?>
        <script src="header_menu.js" async></script>
        <title>Éloïse Delcros - Magnétiseuse - Énergéticienne</title>
    </head>
    <body id="page-accueil">