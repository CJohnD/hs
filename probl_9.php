Cerinţa
Se dau trei numere naturale a b x. Să se verifice dacă numărul x aparține intervalului [a,b].

Date de intrare
Programul citește de la tastatură numerele a b x.

Date de ieşire
Programul afișează pe ecran mesajul DA, dacă numărul x aparține intervalului [a,b], respectiv NU în caz contrar.

Exemplu
Intrare
a b x
4 9 8
Ieșire
DA

<?php

if (isset($_POST['calculeaza'])) {
    $x = !empty($_POST['x']) ? $_POST['x'] : '0';
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $b = !empty($_POST['b']) ? $_POST['b'] : '0';

    $mesaj = '';
    $verdict = '';

    if (!is_numeric($x) || !is_numeric($a) || !is_numeric($b))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else if ($x >= $a && $x <= $b){
        $verdict = 'Apartine!';

    }else {
        $verdict = 'Nu Apartine';
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
        Numar Evaluat:<input type="text" name="x" value="0"></br>
        Intervalul:</br>
        A:<input type="text" name="a" value="0"></br>
        B:<input type="text" name="b" value="0"></br>
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>S-a citit intervalul [$a:$b] deci numarul $x, $verdict intervalului"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>