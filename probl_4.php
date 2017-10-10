Cerința
Într-un brad sunt a globuri albe, de două ori mai multe globuri roșii și globuri verzi cu 3 mai puține ca numărul de globuri roșii. Câte globuri sunt în total ?

Date de intrare
Programul citește de la tastatură numărul natural a.

Date de ieșire
Programul va afișa pe ecran numărul total de globuri.
<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $y = !empty($_POST['y']) ? $_POST['y'] : '0';
    $z = !empty($_POST['y']) ? $_POST['y'] : '0';

    $mesaj = '';
    $rez_last = 0;

    if (!is_numeric($a) || !is_numeric($y) || !is_numeric($z))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        $y = $a * 2;
        $z = $y - 3;
        $rez_last = $a + $y + $z;
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
        Nr1:<input type="text" name="a" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Sunt ".$a." globuri albe, ".$y." rosii si ".$z." verzi. In total sunt = " . $rez_last . " globuri</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>