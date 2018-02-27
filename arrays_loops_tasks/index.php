<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<?php
header('Content-Type: text/html; charset=utf-8');

//================ 1
$arrayOne = array('html', 'css', 'php', 'js', 'jq');

foreach($arrayOne as $value){
	echo $value . "<br>";
}
br();
//================ 1

//================ 2
$arrayTwo = array(1, 20, 15, 17, 24, 35);

$result = 0;

foreach ($arrayTwo as $value){
    $result += $value; // На каждой итерации, мы прибавляем это число к уже существующей переменной.
}
echo $result ;
br();
//================ 2


//================ 3
$arrayThree = array(26, 17, 136, 12, 79, 15);

$result3 = 0;

foreach ($arrayThree as $value){
    $result += $value * $value;
}
echo $result;
br();
//================ 3


//================ 4
$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr as $key => $value){
	echo $key . "\t" . $value . "<br>";
}
br();
//================ 4


//================ 5
$arr1 = array('Коля' => '200', 'Вася' => '300', 'Петя' => '400');

foreach ($arr1 as $key => $value){
	echo "$key — зарплата $value долларов." . "<br>";
}
br();	
//================ 5


//================ 6
$arr2 = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

$en = array();
$ru = array();

foreach ($arr2 as $key => $value){
	$en[] = $key;
	$ru[] = $value;
}

foreach ($en as $value){
	echo $value . "<br>";
}
echo "<br>";
foreach ($ru as $value){
	echo $value . "<br>";
}
br();
//================ 6


//================ 7
$arrayFour = array(2, 5, 9, 15, 0, 4);

foreach($arrayFour as $value){
	if ($value > 3 && $value < 10) {
		echo $value . "<br>";
	}
}
br();
//================ 7


//================ 8
$arrayFive = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

$someString = "";

foreach ($arrayFive as $value){
	$someString .= $value . "-";
}
echo $someString;
br();
//================ 8


//================ 9
for ($i=1; $i < 101; $i++) { 
	echo $i . "<br>";
}
br();
//================ 9


//================ 10
for ($i=11; $i < 34; $i++) { 
	echo $i . "<br>";
}
br();
//================ 10


//================ 11
for ($i=0; $i < 101; $i++) { 
	echo $i % 2 == 0 ? $i : "" . "<br>";
}
br();
//================ 11


//================ 12
$n = 1000;
$j = 1;

for ($j == 2, $i == 0; $i < $n; $j++){
	$n = $n / 2;
	if($n == 62.5){
		$n = $n / 2;
	}

	$num = $n;
	echo "Итерация " . $j  . "<br>";
}
echo "Получилось число " . $num;
br();
//================ 12


//================ 13
$arraySix = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arraySix as $value){
	for ($i = 1; $i <= count($arraySix); $i++){ 
		echo "$i * $value = " . $i * $value ."<br>";
	}
	br();
}
//================ 13


//================ 14
$arraySeven = array(4, 2, 5, 19, 13, 0, 10);
foreach($arraySeven as $value){
	$e = $value;
	if($e == 2 || $e == 3 || $e == 4){
		echo "Есть!";
		break;
	}else{
		echo "Нет!";
		break;
	}
}
br();
//================ 14


//================ 15
$arr3 = array(4, 2, 5, 19, 13, 0, 10);
$count = 0;

foreach ($arr3 as $value){
	$count += 1;
}
echo $count;
br();
//================ 15


//================ 16
$arrayEight = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arrayEight as $value){
	if ($value % 3 == 0){
		echo $value . "<br>";
	}
	else{
        echo $value . ", ";
    }
}
br();
//================ 16


//================ 17
$arrayNine = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь",);

$month = 2;

foreach ($arrayNine as $key => $value) {
	$sum = ($key + 1);

	if($sum == $month){
		echo $sum ."й Месяц в году: " . "<b>" . $value . "</b><br>";
	}
	else{
		echo $sum ."й Месяц в году: " . $value . "<br>";
	}
}
br();
//================ 17


//================ 18
$arrayTen = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресение");

$saturday = 6;
$sanday = 7;

foreach ($arrayTen as $key => $value) {
	$sum = ($key + 1);

	if($sum == $saturday || $sum == $sanday){
		echo $sum ."й День недели: " . "<b>" . $value . "</b><br>";
	}
	else{
		echo $sum ."й День недели: " . $value . "<br>";
	}
}
br();
//================ 18


//================ 19
$arrayTen = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресение");

$day = 2;

foreach ($arrayTen as $key => $value) {
	$sum = ($key + 1);

	if($sum == $day){
		echo $sum ."й День недели: " . "<i>" . $value . "</i><br>";
	}
	else{
		echo $sum ."й День недели: " . $value . "<br>";
	}
}
br();
//================ 19


//================ 20
for($i = 1; $i < 20; $i++){
    echo str_repeat("x", $i) . "<br>";
}
br();
//================ 20


//================ 21
for($i = 0, $j = 1; $i < 9; $i++){
    $sum = $i + $j;
    echo str_repeat("{$sum}", $i) . "<br>";
}
br();
//================ 21


//================ 22
for($i = 1; $i < 6; $i++){
    echo str_repeat("xx", $i) . "<br>";
}
br();

// Второй способ
$i1 = 1;
while($i1 < 6){
    echo str_repeat("xx", $i1) . "<br>";
    $i1++;
}
br();
//================ 22


//================ 23
$number = 12328;

$digits = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY);

$ress = 0;

foreach($digits as $key => $value){
    
    $ress += $value;
}
echo $ress;
br();
//================ 23


//================ 24
$all_num = 442158755745;
$search_num = 7;

$digits2 = preg_split('//', $all_num, -1, PREG_SPLIT_NO_EMPTY);

$how_many = array_count_values ($digits2);

if(isset($how_many[$search_num])){
    foreach($how_many as $key => $value){
        if($key == $search_num){
            echo "Совпадений найдено: " . $value;
        }
    }
}
else{
    echo "Указанного числа не найдено";
}
br();
//================ 24


//================ 25
$new_rand_array = [];

for($i = 0; $i < 10; $i++){
    $new_rand_array[] = rand(1, 100);
}
$min_num = min($new_rand_array);
$max_num = max($new_rand_array);

foreach($new_rand_array as $key => $value){
    if($min_num == $value){
        $min_key = $key;
    }
    
    if($max_num == $value){
        $max_key = $key;
    }
}

for($i = 0; $i < 1; $i++){
    $new_rand_array[$min_key] = $max_num;
    echo "Максимальное значение " . $max_num . "; На позиции " . $max_key . "; Перемещено на позицию: " . $min_key . "<br>";
    $new_rand_array[$max_key] = $min_num;
    echo "Минимальное значение " . $min_num . "; На позиции " . $min_key . "; Перемещено на позицию: " . $max_key;
}
br();
//================ 25


//================ 26
$new_rand_array2 = [];
$for_power = [];

for($i = 0; $i < 10; $i++){
    $new_rand_array2[] = rand(1, 100);
}

foreach($new_rand_array2 as $key => $value){
    if($value > 0 && $key % 2 == 0){
        $for_power[] = $value * $value;
    }
    if($value > 0 && $key % 2 == 1){
        echo "Значение: " . $value . "; Под непарным индексом: " . $key . "<br>";
    }
}
br();
//================ 26


//================ 27
$row = 6;
$cols = 6;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo "<table border='1'  cellpadding='10'>";
for($i = 0; $i < $row; $i++){
    echo "<tr>";
    for($j = 0; $j < $cols; $j++){
        $rand_td_num = rand(0, 6);
        $rand_td_color = $colors[$rand_td_num];
        echo "<td bgcolor=" . $rand_td_color . ">" . $rand_td_num . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
br();
//================ 27


//================ 28
for ($i = 1; $i <= 9; $i++){
    for ($j = 1; $j <= 9; $j++){
        echo "$i * $j равно " . $i * $j . "<br>";
    }
    echo "<br>";
}

br();
//================ 28

//================ Functions
function br(){
	echo "<br><hr>";
};
//================ Functions
?>
