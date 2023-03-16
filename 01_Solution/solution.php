<?php 
$a = 0; 
$b = 1; 
  
echo "<h2>Die Fibonacci-Zahlen bis zum Wert 10000:</h2> \n"; 

echo $a.'; '; 
echo $b.'; ';  
while(($a + $b) < 10000) 
{ 
    $c = $a + $b; 
    echo $c.'; '; 
    $a = $b; 
    $b = $c; 
} 
?>