<!--Write a function to reverse a string-->

<?php
function reverse_string($str)
{
    $strLength = strlen($str);
    for ($i = $strLength; $i >= 0; $i--) {
        echo $str[$i];
    }
}
echo (reverse_string('1234')."<br>");