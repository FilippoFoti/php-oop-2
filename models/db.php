<?php

// require_once __DIR__ . "/models/Products.php";
// require_once __DIR__ . "/models/Categories.php";

$prodotti = [
    new Food("Cibo", "Pedigree Biscotti per Cani Gravy Bones", 1, new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/273530-1800-1800/pedigree-biscrock-gravy-bones.jpg?v=1770810223&quality=1&width=1800&height=1800", "Biscotti", "Carne"),
    new Kennels("Cuccia", "Brandina in Alluminio Sabbia", 1, new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/253147-1800-1800/BRANDINA-SABBIA.jpg?v=1770807334&quality=1&width=1800&height=1800", "Lettimo", "Rettangolare"),
    new Toys("Giocattolo", "Pallina Sport per Cane In Latex Mix Color", 1, new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/209755-1800-1800/YES--pallina-sport-in-latex-7-cm.jpg?v=1770509702&quality=1&width=1800&height=1800", "Palla", "Plastica"),
    new Food("Cibo", "Natural Trainer Gatto Sterilised Salmone", 1, new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/284743-1800-1800/natural-trainer-cat-sterilised-1-5-kg.jpg?v=1770806461&quality=1&width=1800&height=1800", "Croccantini", "Pesce"),
    new Kennels("Cuccia", "Cuccia Sacco Cangaroo con Coperta per Gatto", 1, new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/277232-1800-1800/united-pets-cuccia-sacco-cangaroo-con-coperta-rosa-per-gatto.jpg?v=1767716731&quality=1&width=1800&height=1800", "Cuscino", "Rettangolare"),
    new Toys("Giocattolo", "Trixie Gioco Active Mouse Peluche", 1, new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/223852-1800-1800/trixie-gatto-gioco-active-mouse-peluche.jpg?v=1763987785&quality=1&width=1800&height=1800", "Pupazzo", "Stoffa"),
];

try {
    $prodotti[0]->setPrice(2);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $prodotti[1]->setPrice(15);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $prodotti[2]->setPrice(5);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $prodotti[3]->setPrice(3);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $prodotti[4]->setPrice(15);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $prodotti[5]->setPrice(3);
} catch (Exception $err) {
    echo $err->getMessage();
}

?>
