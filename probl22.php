<!--Write a PHP program which iterates the integers from 1 to 50.-->
<!--For multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz". -->
<!--For numbers which are multiples of both three and five print "FizzBuzz".-->
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    for ($x=1;$x<=50;$x++){
        if($x % 3 == 0 && $x % 5 == 0){
             echo  $x. " | FizzBuzz"."<br>";
        }
        else if($x % 5 == 0){
            echo $x. " | Buzz"."<br>";
        }
        else if($x % 3 == 0 ){
            echo $x. " | Fizz"."<br>";
        }else{
            echo $x."<br>";
        }

    }

?>
</body>
</html>