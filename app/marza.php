<?php

	$kiekis = $_POST['kiekis'];
	$marza = '';
	if($kiekis >= 0 && $kiekis < 5) {
		$marza = "2000";
	} elseif($kiekis >= 5 && $kiekis < 10) {
		$marza = "1400";
	} elseif($kiekis >= 10 && $kiekis < 30) {
		$marza = "1000";
	} elseif($kiekis >= 30 && $kiekis < 80) {
		$marza = "750";
	} elseif($kiekis >= 80 && $kiekis < 200) {
		$marza = "550";
	} elseif($kiekis >= 200 && $kiekis < 400) {
		$marza = "400";
	} elseif($kiekis >= 400 && $kiekis < 800) {
		$marza = "300";
	} elseif($kiekis >= 800 && $kiekis < 1500) {
		$marza = "200";
	} elseif($kiekis >= 1500 && $kiekis < 3000) {
		$marza = "150";
	} elseif($kiekis >= 3000) {
		$marza = "125";
	} else {
		$marza ="klaida";
	}
?>