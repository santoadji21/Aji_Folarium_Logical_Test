<?php
function cariKota($inputkota){
$namakota = array("Jakarta", "Yogyakarta", "Bandung", "Bogor", "Semarang");
$IsKotaInArray = false;
$search = in_array($inputkota, $namakota);
  if ($search == 1)
  {
    $IsKotaInArray = true;
    $result = var_export($IsKotaInArray);
    echo $result;
  } else {
   $result = var_export($IsKotaInArray);
    echo $result;
  }
}
cariKota("Jakartay");

?>