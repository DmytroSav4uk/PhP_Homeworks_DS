<?php


//*************task1******************


echo '

<div style="border: 1px solid black; padding: 10px">

<pre>
<h1 style="text-align: center">Завдання 1</h1>
<p>Полину в мріях в купель океану,</p>
<p>Відчую  <strong>шовковистість</strong>  глибини,</p>
<p> Чарівні мушлі з дна собі дістану,</p>
<p>  Щоб взимку</p>
    <u>тішили</u>
<p>    мене</p>
<p>    вони...</p>
</div>
</pre>
';
//*************************************




//task***********2***************

$number = 1500;
$numberToDollars = $number / 42;
echo "
<div >

<h1>Завдання 2</h1>
<p>$number грн можна перевести в " . number_format($numberToDollars, 2) . " долларів</p>

</div>

";

//*********************************

//task3*************************

$month = 12;
echo "<h1>Завдання 3</h1>";
if ($month >= 3 && $month <= 5) {
    echo "<p>Весна</p>";
} elseif ($month >= 6 && $month <= 8) {
    echo "<p>Літо</p>";
} elseif ($month >= 9 && $month <= 11) {
    echo "<p>Осінь</p>";
} elseif ($month == 12 || $month == 1 || $month == 2) {
    echo "<p>Зима</p>";
} else {
    echo "<p>error</p>";
}

//****************************************************


//task4**********************

$char = 'а';

$vowels = ['а', 'е', 'є', 'и', 'і', 'ї', 'о', 'у', 'ю', 'я'];
$consonants = ['б', 'в', 'г', 'ґ', 'д', 'ж', 'з', 'й', 'к', 'л', 'м', 'н', 'п', 'р', 'с', 'т', 'ф', 'х', 'ц', 'ч', 'ш', 'щ'];


echo "<h1>Завдання 4</h1>";

switch (true) {
    case in_array($char, $vowels):
        echo "Голосна літера";
        break;
    case in_array($char, $consonants):
        echo "Приголосна літера";
        break;
    default:
        echo "error";
}


//******************************


//task5*****************************


echo "<h1>Завдання 5</h1>";

$number = mt_rand(100, 999);
echo "<p>Випадкове число: $number</p>";

$digits = str_split($number);
$sum = array_sum($digits);
echo "<p>Сума цифр: $sum<p/>";

$reversed = intval(implode('', array_reverse($digits)));
echo "<p>Число у зворотному порядку: $reversed</p>";`1`

rsort($digits);
$maxNumber = intval(implode('', $digits));

echo "<p>Найбільше можливе число: $maxNumber</p>";

//*************************************



//task6*********************************

echo "<h1>Завдання 6</h1>";

function generateTable($rows, $cols) {
    echo "<table border='1' style='border-collapse: collapse; width: 100%; text-align: center;'>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            $color = sprintf("#%06X", mt_rand(0, 0xFFFFFF));
            echo "<td style='width: 50px; height: 50px; background-color: $color;'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

function generateRandomSquares($n) {
    echo "<div style='position: relative; width: 100vw; height: 100vh; background-color: black;'>";
    for ($i = 0; $i < $n; $i++) {
        $size = mt_rand(30, 100);
        $top = mt_rand(0, 90);
        $left = mt_rand(0, 90);

        echo "<div style='
            position: absolute;
            width: {$size}px;
            height: {$size}px;
            background-color: red;
            top: {$top}%;
            left: {$left}%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20 +$size px;
            
        '>0_0</div>";
    }
    echo "</div>";
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        p{
            margin: 0;
        }

        div{
            border: 1px solid black;
            padding: 10px;
        }

        h1{
            text-align: center;
        }

        html{
            font-family: "Roboto Light", sans-serif;
        }

    </style>
</head>
<body>
<?php generateTable(5, 5);?>
<?php generateRandomSquares(10);?>
</body>
</html>

<!--//***************************************-->