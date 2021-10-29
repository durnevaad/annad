<title>Дурнева А.Д.</title>
<b>Задание №2-3</b><br>
<?php
//ассоциативный массив
echo "Ассоциативный массив: <br>";
$cust = array("cnum" => "2001",
"cname" => "Hoffman",
"city" => "London",
"snum" => "1001");
foreach($cust as $key => $value){
echo ($key .' = '. $value .'<br />');}
//добавление ключа
echo "Массив с добавлением ключа: <br>";
$cust1 = array("rating" => "100",
"cnum" => "2001",
"cname" => "Hoffman",
"city" => "London",
"snum" => "1001");
foreach($cust1 as $key => $value){
echo ($key .' = '. $value .'<br />');}
//сортировка по значениям
echo "Сортировка по значениям: <br>";
array_multisort($cust1);
foreach($cust1 as $key => $value){
echo ($key .' = '. $value .'<br />');}
//сортировка по ключам
echo "Сортировка по ключам: <br>";
ksort($cust1);
foreach($cust1 as $key => $value){
echo ($key .' = '. $value .'<br />');}
//сортировка с помощью функции
echo "Сортировка с функцией: <br>";
sort($cust1);
foreach($cust1 as $key => $value){
echo ($key .' = '. $value .'<br />');}

?> <p><a href="index.php">Главное меню</a></p>
