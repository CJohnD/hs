<!--Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cellspacing="0px" to the table tag.-->
<!--1 * 1 = 1	1 * 2 = 2	1 * 3 = 3	1 * 4 = 4	1 * 5 = 5-->
<!--2 * 1 = 2	2 * 2 = 4	2 * 3 = 6	2 * 4 = 8	2 * 5 = 10-->
<!--3 * 1 = 3	3 * 2 = 6	3 * 3 = 9	3 * 4 = 12	3 * 5 = 15-->
<!--4 * 1 = 4	4 * 2 = 8	4 * 3 = 12	4 * 4 = 16	4 * 5 = 20-->
<!--5 * 1 = 5	5 * 2 = 10	5 * 3 = 15	5 * 4 = 20	5 * 5 = 25-->
<!--6 * 1 = 6	6 * 2 = 12	6 * 3 = 18	6 * 4 = 24	6 * 5 = 30-->
<html>
<body>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
for ($x=1; $x <= 6;$x++){
    echo"<tr>";
        for ($y=1; $y <= 5;$y++){
            $ec = $y*$x;
            echo "<td>".$x." * ".$y."=".$ec."<td>";
            echo " ";
        }
    echo "<tr>";
}
?>
</table>
</body>
</html>