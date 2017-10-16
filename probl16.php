<!--4. Create a script to construct the following pattern, using nested for loop.-->
<!---->
<!--*/n-->
<!--* */n-->
<!--* * */n-->
<!--* * * */n-->
<!--* * * * */n-->
<!--* * * * */n-->
<!--* * * * /n-->
<!--* * * /n-->
<!--* * /n-->
<!--* /n-->


<?php
for($x=1;$x<=5;$x++)
{
    for ($y=1;$y<=$x;$y++)
    {
        echo "*";
        if($y < $x)
        {
            echo " ";
        }
    }
    echo "<br>";
}

for($x=5;$x>=1;$x--)
{
    for ($y=1;$y<=$x;$y++)
    {
        echo "*";
        if($y < $x)
        {
            echo " ";
        }
    }
    echo "<br>";
}
?>

<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>
