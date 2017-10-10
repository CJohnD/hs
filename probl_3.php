Cerința
Se dau două numere naturale x și y. Calculați ultima cifră a sumei lor.

Date de intrare
Programul citește de la tastatură numerele x și y.

Date de ieșire
Programul va afișa pe ecran ultima cifră a sumei x+y.
<?php

if (isset($_POST['calculeaza'])) {
    $n = !empty($_POST['n']) ? $_POST['n'] : '0';
    $y = !empty($_POST['y']) ? $_POST['y'] : '0';

    $mesaj = '';
    $suma = 0;
    $rez_last = 0;

    if (!is_numeric($n) || !is_numeric($y))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        $suma = $n + $y;
        $rez_last = substr($suma, -1);
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
        Nr1:<input type="text" name="n" value="0">
        Nr2:<input type="text" name="y" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Ultima cifra din suma este ".$n." + ".$y." = " . $rez_last . "</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>