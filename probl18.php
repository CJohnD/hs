<!--Write a program which will count the "r" characters in the text "w3resource".-->
<?php
$string="w3resourcesr";
$lungimeSir = strlen($string);
$counter = 0;
echo $lungimeSir;

for($i=0;$i<$lungimeSir;$i++){
    if($string[$i] == "r"){
        echo $string[$i];
        $counter++;
    }
    echo $counter;
}