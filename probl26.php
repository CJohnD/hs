<!--Write a function to sort an array.-->
<?php
function arraySort($arr){
    for($x=0;$x < count($arr);++$x)
    {
        $min = $x;
        for($y=$x+1;$y < count($arr);++$y)
        {
            if($arr[$y] < $arr[$min] )
            {
                $temp = $arr[$min];
                $arr[$min] = $arr[$y];
                $arr[$y] = $temp;
            }
        }
    }
    return $arr;
}

$a = array([3],[4],[5],[6],[7],['sd']);
echo arraySort($a);
