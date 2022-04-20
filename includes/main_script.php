<?php
$actualFilePath = $_SERVER['SCRIPT_NAME'];
$actualFileName = basename($actualFilePath);

$pageTitleEnd = 'Éloïse Delcros - Magnétiseuse Énergéticienne';

if ($actualFileName == 'index.php')
{
    $pageTitle = $pageTitleEnd;
    $pageH1 = 'Accueil';
}
elseif ($actualFileName == 'soin_cabinet.php')
{
    $pageTitle = 'Soin énergétique - ' . $pageTitleEnd;
    $pageH1 = 'Soin énergétique';
}
elseif ($actualFileName == 'soin_distance.php')
{
    $pageTitle = 'Soin à distance - ' . $pageTitleEnd;
    $pageH1 = 'Soin à distance';
}
elseif ($actualFileName == 'nettoyage_lieu.php')
{
    $pageTitle = 'Nettoyage de lieu - ' . $pageTitleEnd;
    $pageH1 = 'Nettoyage de lieu';
}
elseif ($actualFileName == 'contact.php')
{
    $pageTitle = 'Contact - ' . $pageTitleEnd;
    $pageH1 = 'Contact';
}
elseif ($actualFileName == 'blog.php')
{
    $pageTitle = 'Blog - ' . $pageTitleEnd;
    $pageH1 = 'Blog';
}
else
{
    $pageTitle = 'Page indéfinie';
    $pageH1 = 'Page indéfinie';
}

function printClassCurentPage($fileName)
{
    global $actualFilePath;
    global $actualFileName;
    if ($actualFileName == $fileName) {
        echo 'class="curent-page"';
    }
}
//
$jobName = 'Magnétiseuse Énergéticienne';

$phoneNumber = '07 68 22 43 27';
$urlPhoneNumber = 'tel:+'. str_replace(' ', '', $phoneNumber);
$linkPhoneNumber = 
    '<a href="' . $urlPhoneNumber . '">' .
    str_replace(' ', '&nbsp;', $phoneNumber) . '</a>';

$emailAdress = 'contact@vienlumiere.fr';
$urlEmailAdress = 'mailto:' . $emailAdress;
$linkEmailAdress = 
    '<a href="' . $urlEmailAdress . '">' .
    $emailAdress . '</a>';

$OfficeAdressFull = 
    'Mas Calmettes<br />201 chemin de sainte Eugénie
    <br />66200 Elne';
$OfficeAdressTown = 'Elne';
$OfficeAdressStreet = 'Mas Calmettes 201 chemin de sainte Eugénie';

$urlFacebook = '#';
$urlGoogleBusiness = '#';
$urlLocationGoogle = '#';
$urlLocationLeaflet = '#';

$webmasterUrlSite = 'https://www.webdragon.fr';
$webmasterLinkUrlSite =
'<a href="https://www.webdragon.fr">Adrien Delcros</a>';
$webmasterUrlFacebook = '#';
//
?>