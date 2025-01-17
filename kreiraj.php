<?php

if(!isset($_POST['ime']) || empty($_POST['ime']))
{
    die("Unesite ime proizvoda");
}
if(!isset($_POST['opis']) || empty($_POST['opis']))
{
    die("Unesite opis proizvoda");
}
if(!isset($_POST['cena']) || empty($_POST['cena']))
{
    die("Unesite cenu proizvoda");
}
if(!isset($_POST['slika']) || empty($_POST['slika']))
{
    die("Unesite sliku proizvoda");
}
if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
{
    die("Unesite kolicinu proizvoda");
}

require_once "baza.php";

$cena = $_POST['cena'];
$ime = $_POST['ime'];
$opis = $_POST['opis'];
$slika = $_POST['slika'];
$kolicina = $_POST['kolicina'];

$rezultat = $baza->query("INSERT INTO proizvodi (ime, opis, cena, slika, kolicina) VALUES ('$ime','$opis',$cena,'$slika',$kolicina)");

echo "Uspesno ste kreirali proizvod!";