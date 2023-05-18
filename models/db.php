<?php

// require_once __DIR__ . "/models/Products.php";
// require_once __DIR__ . "/models/Categories.php";

$prodotti = [
    new Food("Cibo", "Pedigree Biscotti per Cani Gravy Bones", 1, "2€", new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/273530-1800-1800/pedigree-biscrock-gravy-bones.jpg?v=1770810223&quality=1&width=1800&height=1800", "Biscotti", "Carne"),
    new Kennels("Cuccia", "Brandina in Alluminio Sabbia", 1, "15€", new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/253147-1800-1800/BRANDINA-SABBIA.jpg?v=1770807334&quality=1&width=1800&height=1800", "Lettimo", "Rettangolare"),
    new Toys("Giocattolo", "Pallina Sport per Cane In Latex Mix Color", 1, "5€", new Categories('<i class="fa-solid fa-dog"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/209755-1800-1800/YES--pallina-sport-in-latex-7-cm.jpg?v=1770509702&quality=1&width=1800&height=1800", "Palla", "Plastica"),
    new Food("Cibo", "Natural Trainer Gatto Sterilised Salmone", 1, "3€", new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/284743-1800-1800/natural-trainer-cat-sterilised-1-5-kg.jpg?v=1770806461&quality=1&width=1800&height=1800", "Croccantini", "Pesce"),
    new Kennels("Cuccia", "Cuccia Sacco Cangaroo con Coperta per Gatto", 1, "15€", new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/277232-1800-1800/united-pets-cuccia-sacco-cangaroo-con-coperta-rosa-per-gatto.jpg?v=1767716731&quality=1&width=1800&height=1800", "Cuscino", "Rettangolare"),
    new Toys("Giocattolo", "Trixie Gioco Active Mouse Peluche", 1, "3€", new Categories('<i class="fa-solid fa-cat"></i>'), "https://arcaplanet.vtexassets.com/arquivos/ids/223852-1800-1800/trixie-gatto-gioco-active-mouse-peluche.jpg?v=1763987785&quality=1&width=1800&height=1800", "Pupazzo", "Stoffa"),
];

?>
