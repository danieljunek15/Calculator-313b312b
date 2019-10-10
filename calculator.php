<?php
echo "jaa toppie nu moet ik weten hoe ik hem moet berekenen type een van deze in +_*_-" .PHP_EOL;
$second=readline();
echo "hey ik ben jouw splinter nieuwe super high teck rekenmachienen mag ik een nummer van jouw" .PHP_EOL;
$firstNumber=readline();
echo "ik heb nog een nummer nodig voor dat ik je kan helpen" .PHP_EOL;
$secondNumer=readline();
if($second === "*"){
     $answer = $firstNumber * $secondNumer;
}
if($second === "+"){
    $answer = $firstNumber + $secondNumer;
}
if($second === "-"){
   $answer = $firstNumber - $secondNumer;
}
echo "hier heb je je antwoord: " . " " . "$answer"; 
?>