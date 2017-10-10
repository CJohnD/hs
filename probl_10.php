Se dau 3 numere întregi.

Cerinţa
Calculaţi minimul celor 3 numere date.

Date de intrare
Programul citeşte de la tastatură 3 numere întregi separate prin spaţii.

Date de ieşire
Programul va afişa pe ecran cel mai mic dintre numerele citite.

Exemplu
Intrare

125 68 200
Ieşire

68

if(a<b)
m=a;
else m=b;
if(m<c)
min=m;
else min=c;
cout<<min;

<?php

if (isset($_POST['calculeaza'])) {
    $a = !empty($_POST['a']) ? $_POST['a'] : '0';
    $b = !empty($_POST['b']) ? $_POST['b'] : '0';
    $c = !empty($_POST['c']) ? $_POST['c'] : '0';

    $mesaj = '';
    $rasp = '';
    $aux = 0;

    if (!is_numeric($a) || !is_numeric($b) || !is_numeric($c))
    {
        $mesaj = 'Numerele introduse nu sunt corecte!';
    }
    if ($a<$b){
        $aux = $a;
    }else {
        $aux = $b;
    }
    if($aux < $c){
        $rasp = $aux;
    }else{
        $rasp = $c;
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
        echo "<h1>Cel mai mic nr dintre numerele [$a], [$b] si [$c] este, -->[$rasp]"."</h1>";
    }

    if (!empty($mesaj)) {
        echo "<h1>" . $mesaj . "</h1>";
    }
    ?>
</div>
</body>
</html>