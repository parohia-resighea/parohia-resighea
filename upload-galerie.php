<?php

$target_dir = "images/galerie/";

// Creăm folderul dacă nu există
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Numele original al fișierului
$original_name = basename($_FILES["poza"]["name"]);

// Generăm un nume unic (evităm suprascrierea)
$target_file = $target_dir . time() . "-" . $original_name;

// Verificăm dacă fișierul este imagine
$check = getimagesize($_FILES["poza"]["tmp_name"]);
if($check === false) {
    die("Fișierul încărcat nu este o imagine.");
}

// Mutăm fișierul în folderul galeriei
if (move_uploaded_file($_FILES["poza"]["tmp_name"], $target_file)) {
    echo "<script>alert('Poza a fost încărcată în galerie!'); window.location.href='galerie.html';</script>";
} else {
    echo "Eroare la încărcarea fișierului.";
}

?>
