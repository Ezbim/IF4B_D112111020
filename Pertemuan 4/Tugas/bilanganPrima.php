<?php
$bilangan=intval(readline("Masukkan angka : "));

echo "Bilangan Prima = ";
for ($i=1; $i <= $bilangan ; $i++) { 
    $faktor=0;
    for ($j=1; $j<=$i; $j++) { 
        if ($i%$j==0) {
            $faktor=$faktor+1;
        }
    }
    if ($faktor==2) {
        echo $i . " ";
    }
}
?>