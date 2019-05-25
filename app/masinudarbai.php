<?php

if($_POST['nomenklatura'] > 0 && $_POST['nomenklatura'] < 60) {
	$masinu_darbai = 1;
} elseif($_POST['nomenklatura'] >= 60 && $_POST['nomenklatura'] < 120) {
	$masinu_darbai = 1.25;
} elseif($_POST['nomenklatura'] >= 120 && $_POST['nomenklatura'] < 240) {
	$masinu_darbai = 1.25;
} elseif($_POST['nomenklatura'] >= 240) {
	$masinu_darbai = 1.75;
} else {
	$masinu_darbai = "klaida";
}

$masinu_darbai = 40 * $masinu_darbai;

?>