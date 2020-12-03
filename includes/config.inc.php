<?php
$ablakcim = array(
    'cim' => 'gazditkeresek.hu',
);

$fejlec = array(
    'kepforras' => 'logo.jpg',
    'kepalt' => 'logo',
	'cim' => 'gazditkeresek.hu',
	'motto' => 'állatvédelmi közösségi portál és adatbázis',
	'link' => 'http://gazditkeresek.hu',
	'linknev' => 'gazditkeresek.hu'
);

$lablec = array(
    'copyright' => 'Fejlesztette: Pánya Nándor '.date("Y").'.',
    'ceg' => 'gazditkeresek.hu - 2005 óta az állatok szolgálatában '
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => 'Üzenetek', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>