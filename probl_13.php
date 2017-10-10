Cerința
Fiind date vârstele a doi copii (a și b) afișați care dintre ei este cel mai mare și cu cât.

Date de intrare
Programul citește de la tastatură vârstele celor 2 copii.

Date de ieșire
Programul va calcula diferența de vârstă x și va afișa pe ecran Primul copil este mai mare cu x ani dacă primul copil are cea mai mare vârstă, Al doilea copil este mai mare cu x ani dacă al doilea copil este cel mai în vârstă sau Copiii au varste egale dacă x=0.

Restricții și precizări
1 ≤ a,b ≤ 100

Exemplu
Intrare

5 8
Ieșire

Al doilea copil este mai mare cu 3 ani
Explicație
S-au citit vârstele celor 2 copii(5 și 8). Deoarece al doilea copil e mai mare cu 3 ani decât primul se afișează  Al doilea copil este mai mare cu 3 ani.

<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $b = !empty($_POST['b']) ? $_POST['b'] : '0';

    $mesaj = '';
    $rasm = '';
    $dif = 0;

    if (!is_numeric($a) || !is_numeric($b)) {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    } else if ($a >= 1 && $a <= 100 && $b >= 1 && $b <= 100) {
        if ($a > $b) {
            $dif = $a - $b;
            $rasp = "Primul copil este mai mare cu " . $dif . " ani";
        } else {
            $dif = $b - $a;
            $rasp = "Al doilea copil este mai mare cu " . $dif . " ani";
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
        Copil 1:<input type="text" name="a" value="0"></br>
        Copil 2:<input type="text" name="b" value="0"></br>
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>S-au citit vârstele celor 2 copii($a și $b). $rasp"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>