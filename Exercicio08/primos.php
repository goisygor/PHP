<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$primos = [];

for ($i = 2; $i <= 1000; $i++) {
    if (isPrime($i)) {
        $primos[] = $i;
    }
}

echo implode(' ', $primos);
?>
