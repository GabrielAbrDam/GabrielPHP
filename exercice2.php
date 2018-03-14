<?php 

// ****************** EXERCICE 2 ************************
//*******************************************************

$amount = "1";
$convertIn= "US Dollar";
$eurCurrencyRatio = "1.085965";
$usdCurrencyRatio = "0.920839999";

if ($convertIn == "US Dollar"){
    $resultat = $amount * $eurCurrencyRatio;
    echo $resultat;
}else{
    $resultat = $amount * $usdCurrencyRatio;
    echo $resultat;
}
// not sur about my logic: to be honest, i find it in internet, but hade to adapt ...