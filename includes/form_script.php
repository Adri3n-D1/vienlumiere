<?php

$nameInputs = array(
    'form-first-name',
    'form-last-name',
    'form-phone',
    'form-email',
    'form-message');

$valueDefault = array(
    'form-first-name' => 'Prénom',
    'form-last-name' => 'Nom',
    'form-phone' => 'Téléphone',
    'form-email' => 'Email',
    'form-message' => 'Votre message &gt;&gt;&gt;');

$valueUser = array(
    'form-first-name' => null,
    'form-last-name' => null,
    'form-phone' => null,
    'form-email' => null,
    'form-message' => null);

$stateUser = array(
    'form-first-name' => null,
    'form-last-name' => null,
    'form-phone' => null,
    'form-email' => null,
    'form-message' => null);

$displayError = array(
    'form-first-name' => null,
    'form-last-name' => null,
    'form-phone' => null,
    'form-email' => null,
    'form-message' => null);

$errorInput = array(
    'form-first-name' => '',
    'form-last-name' => '',
    'form-phone' => '',
    'form-email' => '',
    'form-message' => '');

$errorInputEmpty = array(
    'form-first-name' => '&uarr; Votre prénom est requis ! &uarr;',
    'form-last-name' => '&uarr; Votre nom est requis ! &uarr;',
    'form-phone' => '&uarr; Votre numéro de téléphone est requis ! &uarr;',
    'form-email' => '&uarr; Votre adresse email est requise ! &uarr;',
    'form-message' => '&uarr; Votre message est vide ! &uarr;');

$errorInputSize = array(
    'form-first-name' => '&uarr; Le champs prénom doit contenir entre 3 et 50 lettres ! &uarr;',
    'form-last-name' => '&uarr; Le champs nom doit contenir entre 3 et 50 lettres ! &uarr;',
    'form-phone' => '&uarr; Le champs numéro de téléphone doit contenir entre 10 et 20  chiffres ! &uarr;',
    'form-email' => '&uarr; Le champs adresse email doit contenir entre 3 et 50 lettres ! &uarr;',
    'form-message' => '&uarr; Le champs message doit contenir entre 15 et 1000 caractère ! &uarr;');

$evalValidity = array(
    'form-first-name' => (isset($_POST['form-first-name']) and strlen($_POST['form-first-name']) > 2 and strlen($_POST['form-first-name']) < 50),
    'form-last-name' => (isset($_POST['form-last-name']) and strlen($_POST['form-last-name']) > 2 and strlen($_POST['form-last-name']) < 50),
    'form-phone' => (isset($_POST['form-phone']) and strlen($_POST['form-phone']) > 9 and strlen($_POST['form-phone']) < 20),
    'form-email' => (isset($_POST['form-email']) and strlen($_POST['form-email']) > 2 and strlen($_POST['form-email']) < 50),
    'form-message' => (isset($_POST['form-message']) and strlen($_POST['form-message']) > 14 and strlen($_POST['form-message']) < 1000));


$deliveryConfirmation = 'Merci pour votre message! Je vous répondrais dans les plus brefs délais.';


//
foreach ($nameInputs as $nameInput) {
    if (isset($_POST[$nameInput]))
    {
        $valueUser[$nameInput] = htmlspecialchars($_POST[$nameInput]);
        if (strlen($valueUser[$nameInput]) == 0)
        {
            $errorInput[$nameInput] = $errorInputEmpty[$nameInput];
            $stateUser[$nameInput] = 'required';
            $displayError[$nameInput] = true;
        }
        elseif (! $evalValidity[$nameInput])
        {
            $errorInput[$nameInput] = $errorInputSize[$nameInput];
            $stateUser[$nameInput] = 'required';
            $displayError[$nameInput] = true;
        }
        else
        {
            $stateUser[$nameInput] = 'completed';
            $displayError[$nameInput] = false;
        }
    }  
}

// On test si tous les champs on été remplis
$countEntryTotal = 0;
$countEntryCompleted = 0;

foreach ($nameInputs as $nameInput) {
    $countEntryTotal++;
    if ($stateUser[$nameInput] == 'completed')
    {
        $countEntryCompleted++;
    }
}

if ($countEntryTotal > 0 and $countEntryTotal == $countEntryCompleted)
{
    $displayDeliveryConfirmation = true;
    // $disableOrNot = 'disabled';
    $disableOrNot = '';
    foreach ($nameInputs as $nameInput) {
        $stateUser[$nameInput] = 'send';
    }
}
else
{
    $displayDeliveryConfirmation = false;
    $disableOrNot = '';
}
?>