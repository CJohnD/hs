Cerinţa
Se citește de la tastatură un număr natural de 3 cifre. Să se determine câte cifre impare conține.

Date de intrare
Programul va citi de la tastatură un număr natural cu exact 3 cifre.

Date de ieşire
Programul va afișa numărul de cifre impare ale valorii citite.

Restricţii şi precizări
Numărul citit este cuprins între 100 și 999, inclusiv.

Exemplu
Intrare

323
Ieșire


<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $mesaj = '';
    $counter = 0;

    if (!is_numeric($a))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    }
    if ($a < 100 || $a >= 999){
        $mesaj = 'Numerul introdus trebuie sa fie intre 100 si 999!';
    } else {
        $lungimeSir = strlen($a);
        for ($i = 0; $i< $lungimeSir; $i++){
            if($a[$i] % 2 != 0){
                $counter++;
            }
        }
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
        echo "<h1>Numerul introdus $a contine $counter nr impare "."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>