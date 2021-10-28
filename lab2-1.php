<title>Дурнева А.Д. ЭАС-310</title>
<b>Задание №2-1</b><br>
<?php
echo 'Массив треугольных чисел: <br>';
$treug = array();
for ($n=1;$n<=10;$n++){
	$treug[]=$n*($n+1)/2;}
for ($i=0;$i<=$n;$i++){ 
echo $treug[$i].' ';}
echo '<br> Массив квадратов натуральных чисел: <br>';
$kvd = array();
for ($n=1;$n<=10;$n++){
$kvd[]=$n*$n;}
for ($i=0;$i<=$n;$i++){ echo $kvd[$i].' ';}
echo '<br> Объединенный массив: <br>';
$gen = array_merge($treug,$kvd);
echo "<pre>";
print_r($gen);
echo "</pre>";
echo '<br>Сортировка массива<br>';
sort ($gen);
echo "<pre>";
print_r($gen);
echo "</pre>";
echo '<br>Удаление первого элеметна из массива<br>';
unset ($gen[0]);
echo "<pre>";
print_r($gen);
echo "</pre>";
echo '<br>Удаление повторяющихся элементов из массива<br>';
$unic = array_unique($gen);
echo "<pre>";
print_r($unic);
echo "</pre>";
?> <p><a href="index.php">Главное меню</a></p>
