<!--
Ajout de la bibliothèque leaflet et de ses feuilles de style css:
Permet l'intégration d'une map OpenStreetMap de façon beaucoup optimisée
et l'ajout d'élément sur cette map'.

Ajout du greffon de la bibliothèquer leaflet, leaflet-gesture-handling
et de sa feuille de style css :
leaflet-gesture-handling permet de modifier la façon de zoomer avec la 
molette de la souris afin d'éviter de zoomer par inadvertence en voulant
faire defiler la page :
Sans le greffon -> molette de la souris uniquement
Avec le greffon -> ctrl + molette de la souris
-->
<!-- inclusion de la feuille css leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">

<!-- inclusion de la feuille css leaflet-gesture-handling (affiche les commande de zoom modifiées) -->
<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">

<!--
Inclusion de la bibliothèque leaflet...
-->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" async></script>

<!--
Inclusion du greffon leaflet-gesture-handling de la bibliothèque leaflet...
Modifie la façon de zommer avec la molette de la souris:
-->
<script src="https://unpkg.com/leaflet-gesture-handling"></script>
<script src="map.js" async></script>
