<?php

echo "Mengitung Rata2 Nilai",PHP_EOL,PHP_EOL ;

$nilaiMatematika=intval(readline("Nilai Matematika : "));
$nilaiFisika=intval(readline("Nilai Fisika : "));
$nilaiBiologi=intval(readline("Nilai Biologi : "));

$nilaiRata=($nilaiMatematika+$nilaiFisika+$nilaiBiologi)/3;

echo PHP_EOL,"Nilai Rata-rata anda = ";
echo number_format($nilaiRata,2);

if ($nilaiRata>=60) {
    echo PHP_EOL,"lulus";
}
elseif ($nilaiRata<60 && $nilaiRata>0) {
    echo PHP_EOL,"gagal";
}else {
    echo PHP_EOL,"anda tidak mengerjakan";
}
?>