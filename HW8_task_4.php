<?php
function bigestDevider($n)
{
    $i = 2;
    while ($i * $i < $n) {
        while ($n % $i == 0) {
            $n = $n / $i;
        }
        $i = $i + 1;
    }
    return $n;
}
echo bigestDevider(600851475143);
