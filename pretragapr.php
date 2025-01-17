<?php

if(!isset($_GET['proizvod']) || empty($_GET['proizvod']))
{
    die('Niste uneli proizvod');
}

$proizvod = $_GET['proizvod'];

require_once "baza.php";

$rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$proizvod%' OR opis LIKE '%$proizvod%'");

if($rezultat->num_rows >= 1)
{
    echo"Uspesno ste pronasli ". $rezultat->num_rows ." proizvoda";
}

else
{
    echo"Nije pronadjen ni jedan proizvod";
}



 
