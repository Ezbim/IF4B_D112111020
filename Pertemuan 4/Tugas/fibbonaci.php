<?php
$angkaSebelumnya = 0;
$angkaSekarang = 1;

echo "$angkaSebelumnya $angkaSekarang";

for ($i = 0; $i < 10; $i++) {

    $output = $angkaSekarang + $angkaSebelumnya;
    echo " $output". " ";

    $angkaSebelumnya = $angkaSekarang;
    $angkaSekarang = $output;
}
?>