<?php
include_once ('Ong.php');
include_once ('Cha.php');
include_once ('Con.php');

$ong  = new Ong(80);
echo 'Tuoi ong la: '.$ong->age;
$cha = new Cha(50,123);
