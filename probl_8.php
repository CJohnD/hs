Cerința
Fiind dată nota unui elev să se afișeze dacă acesta este corigent sau promovat.

Date de intrare
Programul citește de la tastatură numărul natural n.

Date de ieșire
Programul va afișa pe ecran corigent dacă n este mai mic ca 5, altfel va afișa promovat.

Restricții și precizări
1 ≤ n ≤ 10

<?php

if (isset($_POST['calculeaza'])) {
    $x = !empty($_POST['x']) ? $_POST['x'] : '0';
    $mesaj = '';
    $verdict = '';

    if (!is_numeric($x))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else if ($x > 5 || $x == 5){
        $verdict = 'promovat!';

    }else if ($x < 4 || $x == 4){
        $verdict = 'corigent!';
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
        Nota Elev:<input type="text" name="x" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>S-a citit nota $x deci elevul este $verdict"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>