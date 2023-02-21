<?php 
//get V_source
$Vsource=readline('Enter Vsource: ');
//get V_out
$Vout=readline('Enter Vout: ');
//get I_max
$Imax=readline('Enter Imax: ');
//calculate powerRating
$powerRating=$Vout*$Imax;
//calculate esistanceValue
$resistanceValue=(($Vsource-$Vout)/$Imax)*1000;
//calculate resistancePowerRating
$resistancePowerRating=($Vsource*$Imax)-($Vout*$Imax);
//output
echo "Zener diode power rating: "  . $powerRating . " mW" ."\n";
echo "Resistance value: " . $resistanceValue . " ohms" ."\n";
echo "Resistance power rating: " . $resistancePowerRating . " mW" ."\n";





























 ?>