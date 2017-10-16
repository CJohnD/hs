Cerinţa
Să se scrie o funcție C++ care să returneze pentru un număr natural n transmis ca parametru valoarea lui n!, adică 1•2•...•n.

Restricţii şi precizări
numele funcției va fi fact
funcția va avea un singur parametru, n
valoarea lui n! va fi returnată de către funcție
prin definiție, 0!=1
0 ≤ n ≤ 12

Exemplu
fact(4) = 24


<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $factorial = 1;

    if (!is_numeric($a))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    }else{
        for ($i=$a; $i>=1; $i--)
        {
            $factorial = $factorial * $i;
        }
        echo "Factorial of $a is $factorial";
    }
}
?>
<!doctype html>
<html>
<head>
    <title></title>
</head>
<body>
<div>
    <form method="post" action="">
        A<input type="text" name="a" value="<?php echo $a; ?>"></br>
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>fact($a)=$factorial"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>