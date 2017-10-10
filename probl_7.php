Cerința
Scrieți un program care determină câte sticle de x litri cu apă trebuie deschise pentru a umple un vas de y litri.

Date de intrare
Programul citește de la tastatură numerele naturale x și y.

Date de ieșire
Programul va afișa pe ecran numărul n, reprezentând numărul de sticle ce trebuie deschise.

Restricții și precizări
1 ≤ x,y ≤ 1.000.000 și sunt numere naturale

Exemplu
Intrare
5 8

Ieșire
2

Explicație
Pentru a umple vasul de 8 litri trebuie deschise două sticle de 5 litri.

<?php

if (isset($_POST['calculeaza'])) {
    $x = !empty($_POST['x']) ? $_POST['x'] : '0';
    $y = !empty($_POST['y']) ? $_POST['y'] : '0';
    $n = !empty($_POST['n']) ? $_POST['n'] : '0';

    $mesaj = '';
    $rez = 0;
    $n = 0;

    if (!is_numeric($x) || !is_numeric($y))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        $n = $y / $x;
        $n = round($n , 0);
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
        X litry:<input type="text" name="x" value="0">
        y litri vas:<input type="text" name="y" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Pentru a umple vasul de $y litri trebuie deschise $n sticle de $x litri"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>