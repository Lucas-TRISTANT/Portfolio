<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$mail = $_POST["mail"];
$chaine = $nom . " " . $prenom . " " . $mail . "\n";
$rate = file_put_contents('les-contacts-avecstring.txt', $chaine, FILE_APPEND);
if ($rate == false) {
    echo "Erreur";
} else {
    echo "Merci ! <br>Nom : " . $nom . "<br> Prénom : " . $prenom . "<br> Mail: " . $mail;
}

if (file_get_contents('les-contacts-en-json.txt') == false) {
    $arr=array();
    array_push($arr, $_POST);
} else {
    $arr = json_decode(file_get_contents('les-contacts-en-json.txt'), JSON_OBJECT_AS_ARRAY);
    array_push($arr, $_POST);
}

file_put_contents('les-contacts-en-json.txt', json_encode($arr, JSON_PRETTY_PRINT) );
