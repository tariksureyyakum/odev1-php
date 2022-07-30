<?php
error_reporting(E_ALL);

function ucgen($str) {
    $stt = 1;
    while ($str>=$stt)
    {
        for ($x = 1; $x <= $stt; $x++)
        {
            echo "O";
        }
        echo "<br>";
        $stt++;
    }
}

$y = 15;
if (is_int($y))
    ucgen($y);
else
    echo "GİRİLEN DEĞER TAM SAYI OLMALI!";

?>