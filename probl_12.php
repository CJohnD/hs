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

2

<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $mesaj = '';
    $arr = [];
    $arr = $a;


    if (!is_numeric($arr))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    }
    if ($a < 100 || $a >= 999){
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else {
        function odd($var)
        {
            // întoarce true dacă numărul întreg transmis este impar
            return($var & 1);
        }

        function even($var)
        {
            // întoarce true dacă numărul întreg transmis este par
            return(!($var & 1));
        }


        echo "Odd :\n";
        print_r(array_filter($arr, "odd"));
        echo "Even:\n";
        print_r(array_filter($arr, "even"));
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
        A<input type="text" name="a" value="0"></br>
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Numerul introdus $a contine $arr[0] nr impare "."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>