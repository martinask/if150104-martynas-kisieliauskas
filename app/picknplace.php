<?php

if($_POST['nomenklatura'] > 0 && $_POST['nomenklatura'] < 50) {
	$picknplace = 1;
} elseif($_POST['nomenklatura'] >= 50 && $_POST['nomenklatura'] < 100) {
	$picknplace = 1.25;
} elseif($_POST['nomenklatura'] >= 100 && $_POST['nomenklatura'] < 200) {
	$picknplace = 1.50;
} elseif($_POST['nomenklatura'] >= 200 && $_POST['nomenklatura'] < 300) {
	$picknplace = 1.75;
} elseif($_POST['nomenklatura'] >= 300) {
	$picknplace = 2;
} else {
	$picknplace = "klaida";
}

$picknplace = 40 * $picknplace;

?>