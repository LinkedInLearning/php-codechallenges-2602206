

<?php
function isPrime($number) {
    if ($number == 1) {
        return false;
    }
    else if ($number == 2) {
        return true;
    }
    for ($i = 2; $i <= ($number/2+1); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

for($i = 2; $i < 100; $i++){
    if(isPrime($i)){
        echo $i . " ist eine Primzahl.<br />\n";
    }
    
}
?>