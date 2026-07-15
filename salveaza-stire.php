<?php

// Fișierul unde salvăm știrile
$filename = "stiri.json";

// Preluăm datele din formular
$data = $_POST["data"];
$titlu = $_POST["titlu"];
$text = $_POST["text"];

// Structura știrii
$stire = [
    "data" => $data,
    "titlu" => $titlu,
    "text" => $text
];

// Dacă fișierul există, îl citim
if (file_exists($filename)) {
    $stiri = json_decode(file_get_contents($filename), true);
} else {
    $stiri = [];
}

// Adăugăm știrea nouă la începutul listei
array_unshift($stiri, $stire);

// Salvăm totul înapoi în fișier
file_put_contents($filename, json_encode($stiri, JSON_PRETTY_PRINT));

echo "<script>alert('Știrea a fost adăugată!'); window.location.href='index.html';</script>";

?>
