<?php
$n = 1;
$char = 97;
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        if ($i % 2 == 0) {
            echo $n++ . " ";
        } else {
            echo chr($char++) . " ";
        }
    }
    echo "<br>";
}

