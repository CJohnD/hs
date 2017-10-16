<!--Write a program which will give you all of the potential combinations of a two-digit decimal combination, printed in a comma delimited format.-->

<?php
for($x=0;$x<10;$x++)
{
    for ($y=0;$y<10;$y++)
    {
        echo $x.$y.", ";

    }
    echo "<br>";
}

?>
