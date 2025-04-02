<?php

$json_text = file_get_contents("./dischi.json");

$dischi = json_decode($json_text);

$dischi[] = [
    "titolo" => $_POST['record_title'],
    "artista" => $_POST['record_artist'],
    "url_cover" => $_POST['record_image_url'],
    "anno_pubblicazione" => $_POST['record_year'],
    "genere" => $_POST['record_genre']
];

$json_text = json_encode($dischi);

file_put_contents('./dischi.json', $json_text);

header('Location: ./index.php');