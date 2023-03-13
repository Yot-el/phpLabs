<?php

// 1
$very_bad_unclear_name = "15 chicken wings";

$order =& $very_bad_unclear_name;
$order .= " and french fries";

echo "\nYour order is: $very_bad_unclear_name\n";

// 2
$first_digit = 15;
echo "$first_digit";
echo "\n";
$second_digit = 10.33;
echo "$second_digit";
echo 10 + 2;
$last_month = 1187.23;
$this_month = 1089.98;

echo "\nРазница между расходами - " . ($last_month - $this_month);

// 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "\n$days_per_language";

// 12
echo "\n" . (8 ** 2);

// 13
$my_num = 10;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n$answer";

// 14
$a = 10;
$b = 3;
echo "\n" . ($a % $b);
if (0 === $a % $b) {
    echo "\nДелится, " . ($a / $b);
}
else {
    echo "\nДелится с остатком, " . ($a % $b);
}

$st = pow(2, 10);
$root = sqrt(245);
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $i) {
    $sum += pow($i, 2);
}
echo "\n" . sqrt($sum) . "\n";

var_dump([round(sqrt(379), 2), round(sqrt(379), 1), round(sqrt(379))]);
var_dump(["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))]);

echo min([4, -2, 5, 19, -130, 0, 10]) . "\n";
echo max([4, -2, 5, 19, -130, 0, 10]);

echo "\n" . rand(1, 100) . "\n";
$arr_digit = [];
for ($i = 0; $i < 10; $i++) {
    $arr_digit[$i] = rand(-100, 100);
}
var_dump($arr_digit);

$divisible = 15;
$dividers_array = [];

for ($divider = 1; $divider < floor($divisible / 2); $divider++) {
    if ($divisible % $divider === 0) {
        array_push($dividers_array, $divider);
    }
}
var_dump($dividers_array);

$another_arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
while ($sum !== 10) {
    $sum += $another_arr[$i];
    $i += 1;
}
echo $i;

// 15
function printStringReturnNumber(int $x): int {
    echo "\nThis function returns x + 3";
    return $x + 3;
}

$my_num = printStringReturnNumber(10);
echo "\n{$my_num}";

// 16
function increaseEnthusiasm(string $x): string {
    return $x . "!\n";
}
echo increaseEnthusiasm("\namogus");

function repeatThreeTimes(string $x): string{
    return str_repeat($x, 3);
}
echo repeatThreeTimes("amogus");
echo "\n";
function cut(string $x, int $y = 10):string {
    return mb_substr($x, 0, strlen($x) - $y);
}
echo cut("amogus", 3);

function next_el(array $arr, int $i):void {
    if ($i < sizeof($arr)) {
        echo "{$arr[$i]} ";
        $i += 1;
        next_el($arr, $i);
    }
}
echo "\n";
next_el([1, 2, 3, 4, 5], 0);


function addition_numbers(int $x):int{
    $sum = 0;
    $str_x = (string) $x;
    for ($i = 0; $i < strlen($str_x); $i++){
        $sum += (int) $str_x[$i];
    }
    return $sum;
}
$a = 555;

while ($a > 9){
    $a = addition_numbers($a);
}
echo "\n{$a}\n";

// 17
$x_array = [];
for ($i = 0; $i < 10; $i++) {
    array_push($x_array, str_repeat("x", $i));
}
var_dump($x_array);

function arrayFill($x, int $y) : array{
    $res_arr = [];
    for ($i = 0; $i < $y; $i++) {
        array_push($res_arr, $x);
    }
    return $res_arr;
}
var_dump(arrayFill('x', 5));

$a = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
for ($i = 0; $i < sizeof($a); $i++){
    $sum += array_sum($a[$i]);
}
echo $sum;

$a = [];
$k = 1;

for ($i = 0; $i < 3; $i++){
    $b = [];
    for ($j = 0; $j < 3; $j++){
        array_push($b, $k);
        $k++;
    }
    array_push($a, $b);
}
var_dump($a);

$a = [2, 5, 3, 9];
$result = $a[0]*$a[1] + $a[2]*$a[3];
echo $result;

$user = [
    'name' => 'Елизавета',
    'surname' => 'Алексеева',
    'partonymic' => 'Алексеевна',
];

echo $user['surname'], " ", $user['name'], " ", $user['partonymic'], "\n";

$date = [
    'year' => 2023,
    'month' => 03,
    'day' => 13
];

echo $date['year'], ".", $date['month'], ".", $date['day'], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo sizeof($arr);
echo "\n" . $arr[sizeof($arr)-1] . " " . $arr[sizeof($arr)-2];

// 18

function sumOfInt(int $x, int $y) : bool {
    if ($x + $y > 10){
        return true;
    }
    return false;
}

function compareInt(int $x, int $y) : bool {
    if ($x === $y){
        return true;
    }
    return false;
}

$test = 0;
echo (($test == 0) ? "верно" : "") . "\n";

$age = 14;

function checkAge(int $x) {
    if ($x < 10){
        return "Возраст меньше десяти лет.";
    }
    else if ($x > 99) { 
        return "Возраст больше 99, жесть";
    }
    $y = (round($x / 10) + $x % 10);
    if ($y % 10 !== 0) {
        return "Сумма цифр двузначна.";
    }
    return "Сумма цифр однозначна.";
}

echo checkAge(22);

$arr = [5, 5, 5];
echo (sizeof($arr) === 3) ? array_sum($arr) : '';
echo "\n";

// 19

$x = "x";
for ($i = 1; $i < 21; $i++){
    echo str_repeat($x, $i) . "\n";
}

// 20

$a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo array_sum($a) / sizeof($a);

$arr = range(1, 100);
echo array_sum($arr);

$m = array (9, 4 ,1, 16, 25, 100, 64);
function Square($a){
    return sqrt($a);
}
$m = array_map('Square', $m);
foreach ($m as $v){
    echo $v, " ";
}

echo "\n";

$arr = array_combine(range('a', 'z'), range(1, 26));
$r = 1;
var_dump($arr);

$a = '1234567890';
echo array_sum(str_split($a, 2));