<?php
$smt_darbu_kaina = ($plokstes_kaina + $plokstes_darbo_kaina) / 100 * $marza;
$tht_darbu_kaina = ($plokstes_maskavimo_kaina + $plokstes_surinkimo_kaina + $plokstes_banga + $plokstes_rs) / 100 * $marza; 
$papildomu_kaina = ($plokstes_papild + $plokstes_progr) / 100 * $marza;
$gaminio_kaina = $smt_darbu_kaina + $tht_darbu_kaina + $papildomu_kaina;
?>

