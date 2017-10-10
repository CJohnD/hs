Cerința
Fiind date două numere naturale x și y determinați valoarea care trebuie adunată la x pentru a obține triplul lui y.

Date de intrare
Programul citește de la tastatură numerele x și y.

Date de ieșire
Programul va afișa pe ecran numărul care adunat la x va obține triplul lui y.
<?php

if (isset($_POST['calculeaza'])) {
    $x = !empty($_POST['x']) ? $_POST['x'] : '0';
    $y = !empty($_POST['y']) ? $_POST['y'] : '0';
    $z = !empty($_POST['z']) ? $_POST['z'] : '0';

    $mesaj = '';
    $rez_last = 0;
    $triplu = 0;

    if (!is_numeric($x) || !is_numeric($y))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        $triplu = $y * 3;
        $val_det = $triplu - $x;

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
        Nr1:<input type="text" name="x" value="0">
        Nr1:<input type="text" name="y" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Valoarea care trebuie adunată la ".$x." pentru a obține triplul lui ".$y." = ".$val_det."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>