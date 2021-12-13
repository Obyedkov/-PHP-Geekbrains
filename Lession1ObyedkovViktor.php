<?php 
    $title = "Главная страница.";
    $H1 = "Добро пожаловать!";
    $p = "Первый урок.";
    $a = 5;
    $b = '05';
    
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <h1><?=$H1?></h1>
    <p><?=$p?></p>
    <hr>
    <p>a : <?=$a?></p>
    <p>b :<?=$b?></p>
    <p><?=var_dump($a == $b);?></p>
    <p>Почему true?</p>
    <p style="color:green">Потому что а (целыечисла) а b(строки). Оператор двойное равно(==) считает не точный</p>
    
    <p><?=var_dump((int)'012345');?></p>
    <p style="color:green">Потому что я указал целые числа(int) поэтому ноль убирает</p>
    <p><?=var_dump((float)123.0 === (int)123.0);?></p>
    <p style="color:green">Потому что я указал целые числа(int) и дробные числа(float). Строго равенство(===) не совпадает. 123(int) === 123,0(float) равно false</p>
    <p><?=((int)0 === (int)'hello, world');?></p>
    <p style="color:green">Не знаю почему. Наверно string это и есть ноль поэтому 0 строго равенство " " равно 1</p>

    <hr>
    <p>5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя.</p>
    <?php
        $a = 3;
        $b = 5;
        echo "a = " . $a . "<br>" . "b = " . $b ."<br><br>";
        $a = $a + $b;
        $b = $b - $a;
        $b = -$b;
        $a = $a - $b;
        echo "a = " . $a . "<br>" . "b = " . $b;
    ?>

</body>
</html>