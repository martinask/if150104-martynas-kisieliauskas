<?php


//medziagu sanaudos
$azoto_kaina = "15";
$pastos_kaina = "39";
$pastos_gramas = $pastos_kaina / 500;
$pastos_suvartojimas = "2";
$pastos_panelei = $pastos_gramas * $pastos_suvartojimas;
$mask_kaina = "19";
$mask_kiekis = "3200";
$mask_taskas = $mask_kaina / $mask_kiekis;

//iranogs sanaudos
$elektra = "7";
$ir_nusid = "13";
$worker_mokestis = "17";
$smt_skaicius = "2";
$smt_darbo_laikas = "10";
$smt_valandine = $elektra + $ir_nusid + $smt_skaicius * $worker_mokestis;
$irangos_greitis = "10000";
$paneles_per_h = $irangos_greitis/($_POST['smt_skaicius']*$_POST['pl_kiekis']);
$azoto_panelei = $azoto_kaina / $paneles_per_h;

//LL darbo sanaudos
$ll_darb = "9.90";
$ll_skaicius = "1";
$ll_h_kaina = $ll_skaicius * $ll_darb;
$ll_mont = "6";
$ll_mask = "3";
$bang = "80";
$rs_lit = "0.2";
$test_darb = "8";


//smt paneles surinkimo kaina
$paneles_kaina = (($smt_valandine / $paneles_per_h) + $azoto_panelei + $pastos_panelei) * $_POST['tipas'];

$plokstes_kaina = $paneles_kaina / $_POST['pl_kiekis'];

//smt paneles rankinio darbo kaina
$paneles_darbo_kaina = ($_POST['smt_komp'] * $smt_darbo_laikas * $_POST['pl_kiekis']) / 3600 * $smt_valandine; 

$plokstes_darbo_kaina = $paneles_darbo_kaina / $_POST['pl_kiekis'];


//ll maskavimo kaina
$paneles_maskavimo_kaina = ((($_POST['ll_kiaur'] * $ll_mask) / 3600 * $ll_h_kaina) + ($_POST['ll_kiaur'] * $mask_taskas)) * $_POST['pl_kiekis'];

$plokstes_maskavimo_kaina = $paneles_maskavimo_kaina / $_POST['pl_kiekis'];


//ll surinkimo kaina
$paneles_surinkimo_kaina = ($ll_mont * $_POST['ll_skaicius']) / 3600 * $ll_h_kaina * $_POST['pl_kiekis'];

$plokstes_surinkimo_kaina = $paneles_surinkimo_kaina / $_POST['pl_kiekis'];


//bangos darbo kaina
if($_POST['ll_skaicius'] == 0) {
	$paneles_banga = 0.00;
} else {
	$paneles_banga = ($azoto_kaina + $ll_darb) / $bang * $_POST['pl_kiekis'];
}


$plokstes_banga = $paneles_banga / $_POST['pl_kiekis'];

//rs darbo kaina
$paneles_rs = ($_POST['rs_taskai'] * $rs_lit) / 60 * $ll_h_kaina * $_POST['pl_kiekis'];

$plokstes_rs = $paneles_rs / $_POST['pl_kiekis'];


//papild darbu kaina
$paneles_papild = $_POST['pap_laikas'] / 60 * $ll_darb * $_POST['pl_kiekis'];

$plokstes_papild = $paneles_papild / $_POST['pl_kiekis'];

//programavimo darbu kaina
$paneles_progr = $_POST['prog_darbai'] / 60 * $test_darb * $_POST['pl_kiekis'];

$plokstes_progr = $paneles_progr / $_POST['pl_kiekis'];


//bendra plokst kaina
$bendra_panele = $paneles_kaina + $paneles_darbo_kaina + $paneles_maskavimo_kaina + $paneles_surinkimo_kaina + $paneles_banga + $paneles_rs + $paneles_papild + $paneles_progr;

$bendra_plokste = $plokstes_kaina + $plokstes_darbo_kaina + $plokstes_maskavimo_kaina + $plokstes_surinkimo_kaina + $plokstes_banga + $plokstes_rs + $plokstes_papild + $plokstes_progr;

?>
