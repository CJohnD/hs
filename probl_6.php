Cerința
Câte cutii cubice de latură l pot fi suprapuse într-o încăpere de înălțime h.

Date de intrare
Programul citește de la tastatură numerele naturale l și h.

Date de ieșire
Programul va afișa pe ecran numărul n, reprezentând numărul de cutii ce pot fi suprapuse.
<?php

if (isset($_POST['calculeaza'])) {
    $l = !empty($_POST['l']) ? $_POST['l'] : '0';
    $h = !empty($_POST['h']) ? $_POST['h'] : '0';
    $z = !empty($_POST['z']) ? $_POST['z'] : '0';

    $mesaj = '';
    $val_det = 0;

    if (!is_numeric($l) || !is_numeric($h))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        $val_det = $h / $l;
        floor($val_det);

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
        Nr1:<input type="text" name="l" value="0">
        Nr1:<input type="text" name="h" value="0">
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Numărul de cutii ce pot fi suprapuse este = ".$val_det."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>