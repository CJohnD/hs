Se dau 3 numere naturale.

Cerinţa
Calculaţi diferența dintre cel mai mare și cel mai mic dintre cele 3 numere date.

Date de intrare
Programul citește de la tastatură 3 numere naturale separate prin spaţii.

Date de ieşire
Programul va afișa pe prima linie a ecranului numărul mm, reprezentând valoarea cerută.

Restricţii şi precizări
numerele date vor fi mai mici decât 1.000.000.000

Exemplu
Intrare

10 7 2
Ieșire

8

<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $b = !empty($_POST['b']) ? $_POST['b'] : '0';
    $c = !empty($_POST['c']) ? $_POST['c'] : '0';

    $mesaj = '';
    $min = 0;
    $max = 0;

    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    }else{
        $max = $a;
        if ($max < $b){
            $max = $b;
        }
        if($max < $c){
            $max = $c;
        }
        $min = $a;
        if($min > $b){
            $min = $b;
        }
        if($min > $c){
            $min = $c;
        }
    $rasp = $max - $min;
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
        B:<input type="text" name="b" value="0"></br>
        C:<input type="text" name="c" value="0"></br>
        <input name="calculeaza" type="submit">
    </form>
    <?php
    if (isset($_POST['calculeaza'])) {
        echo "<h1>Numerele introduse [$a], [$b] si [$c] diferenta dintre cel mai mic si cel mai mare este, -->[MAX:$max-MIN:$min]=$rasp"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>