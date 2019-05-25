<?php
 
if(empty($_POST['tipas'])) {
    $err = "Plokštės tipas negali būti nepasirinktas!";
} elseif(empty($_POST['pl_kiekis'])) {
    $err = "Plokščių kiekis laukelis negali būti tuščias!";
} elseif(empty($_POST['nomenklatura'])) {
    $err = "SMT komponentų nomenklatūra laukelis negali būti tuščias.";
} elseif(empty($_POST['smt_skaicius'])) {
    $err = "SMT komponentų skaičius plokštėje laukelis negali būti tuščias.";
} elseif(empty($_POST['smt_komp'])) {
    $err = "SMT rankinis darbas laukelis negali būti tuščias.";
} elseif(empty($_POST['ll_skaicius'])) {
    $err = "LL komponentų skaičius plokštėje laukelis negali būti tuščias.";
} elseif(empty($_POST['ll_kiaur'])) {
    $err = "LL maskavimo kiaurymių skaičius negali būti tuščias.";
} elseif(empty($_POST['rs_taskai'])) {
    $err = "RS litavimo taškų skaičius laukelis negali būti tuščias.";
} elseif(empty($_POST['prog_darbai'])) {
    $err = "Programavimo ir tęstavimo darbai negali būti tuščias.";
} elseif(empty($_POST['pap_laikas'])) {
    $err = "Papildomų darbų laikas laukelis negali būti tuščias.";
} elseif(empty($_POST['kiekis'])) {
    $err = "Planuojamo kiekio laukelis negali būti tuščias.";
} else {
    $err = "";
}
 
if($err == "") {
function Euros($value) {
  return '€' . number_format($value, 2);
}
 
include_once("app/masinudarbai.php");
include_once("app/picknplace.php");
include_once("app/marza.php");
include_once("app/kainos.php");
include_once("app/paslaugos.php");
 
 
 
if($_POST['tipas'] == 1) {
    $trafareto_kaina = 1*80;
} elseif($_POST['tipas'] == 2) {
    $trafareto_kaina = 2*80;
}
 
 
 
//echo "Trafareto kaina : " .$trafareto_kaina ."Eur.<br />";
//echo "Pick&Place programos rasymas : " .$picknplace ."Eur.<br />";
//echo "Masinu derinimo darbai : " .$masinu_darbai ."Eur.<br />";
//echo "Imones savikainu marza pagal uzsakymo kieki : " . $marza .".<br />";
 
 echo "
<table class='table hide-bef'>
  <tr>
    <td>Plokščių kiekis panelėje</td>
    <td>".$_POST['pl_kiekis']."</td> 
  </tr>

 <tr>
    <td>Plokštės tipas</td>
    <td>".$_POST['tipas']."</td> 
  </tr>

  <tr>
    <td>LL kiekis</td>
    <td>".$_POST['ll_kiaur']."</td> 
  </tr>
  <tr>
    <td>SMT komponentų nomenklatūra</td>
    <td>".$_POST['nomenklatura']."</td> 
  </tr>
  <tr>
    <td>SMT komponentų skaičius plokštėje</td>
    <td>".$_POST['smt_skaicius']."</td> 
  </tr>
 <tr>
    <td>SMT rankinis darbas</td>
    <td>".$_POST['smt_komp']."</td> 
  </tr>
  <tr>
    <td>LL komponentų skaičius plokštėje</td>
    <td>".$_POST['ll_skaicius']."</td> 
  </tr>
    <tr>
    <td>LL maskavimo kiaurymių skaičius</td>
    <td>".$_POST['ll_kiaur']."</td> 
  </tr>
    <tr>
    <td>RS litavimo taškų skaičiuss</td>
    <td>".$_POST['rs_taskai']."</td> 
  </tr>
   <tr>
    <td>Programavimo ir tęstavimo darbai</td>
    <td>".$_POST['prog_darbai']."</td> 
  </tr>
 <tr>
    <td>Papildomų darbų laikas</td>
    <td>".$_POST['pap_laikas']."</td> 
  </tr>
  <tr>
    <td>Įveskite planuojamą užsakymo kiekį</td>
    <td>".$_POST['kiekis']."</td> 
  </tr>
</table>
";
 
echo "
<table class='table'>
  <tr>
    <td>Trafareto kaina</td>
    <td>".Euros($trafareto_kaina)."</td>
  </tr>
  <tr>
    <td>Pick & Place programos rašymas</td>
    <td>".Euros($picknplace)."</td>
  </tr>  
  <tr>
    <td>Mašinų derinimo darbai</td>
    <td>".Euros($masinu_darbai)."</td>
  </tr>
</table>
";
 
 
echo "
<table class='table'>
  <tr>
    <td>Imonės savininkų marža : </td>
    <td>".$marza."%</td>
  </tr>
</table>
";
 
  echo "
<table class='table'>
  <tr>
    <th></th>
    <th>Panelė</th>
    <th>Plokstė</th>
  </tr>
  <tr>
    <td>SMT panelės surinkimo kaina</td>
    <td>".Euros($paneles_kaina)."</td>
    <td>".Euros($plokstes_kaina)."</td>
  </tr>
    <tr>
    <td>SMT panelės rankinio darbo kaina</td>
    <td>".Euros($paneles_darbo_kaina)."</td>
    <td>".Euros($plokstes_darbo_kaina)."</td>
  </tr>
    <tr>
    <td>LL maskavimo kaina</td>
    <td>".Euros($paneles_maskavimo_kaina)."</td>
    <td>".Euros($plokstes_maskavimo_kaina)."</td>
  </tr>
    <tr>
    <td>LL surinkimo kaina</td>
    <td>".Euros($paneles_surinkimo_kaina)."</td>
    <td>".Euros($plokstes_surinkimo_kaina)."</td>
  </tr>
    <tr>
    <td>Bangos darbo kaina </td>
    <td>".Euros($paneles_banga)."</td>
    <td>".Euros($plokstes_banga)."</td>
  </tr>
    <tr>
    <td>RS darbo kaina</td>
    <td>".Euros($paneles_rs)."</td>
    <td>".Euros($plokstes_rs)."</td>
  </tr>
  <tr>
    <td>Papildomų darbų kaina</td>
    <td>".Euros($paneles_papild)."</td>
    <td>".Euros($plokstes_papild)."</td>
  </tr>
    <tr>
    <td>Programavimo ir testavimo darbų kaina</td>
    <td>".Euros($paneles_progr)."</td>
    <td>".Euros($plokstes_progr)."</td>
  </tr>
    <tr>
    <td>Bendra plokštės kaina</td>
    <td>".Euros($bendra_panele)."</td>
    <td>".Euros($bendra_plokste)."</td>
  </tr>
</table>
";
 
  echo "
<table class='table'>
  <tr>
    <th><b>EMS paslaugų kainos</b></th>
    <th></th>
  </tr>
  <tr>
    <td>SMT darbų kaina</td>
    <td>".Euros($smt_darbu_kaina)."</td>
  </tr>
    <tr>
    <td>THT darbų kaina</td>
    <td>".Euros($tht_darbu_kaina)."</td>
  </tr>
    <tr>
    <td>Papildomų darbų kaina</td>
    <td>".Euros($papildomu_kaina)."</td>
  </tr>
    <tr>
    <td><b>Gaminio kaina</td>
    <td>".Euros($gaminio_kaina)."</td>
  </tr>
</table>
";}
else {
    echo $err;
}
 
 
   
 
?>