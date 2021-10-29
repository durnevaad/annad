<title>Дурнева А.Д.</title>
<b>Задание №2-6</b><br>
<?php
function viv(){echo "Условие задачи:<br>Дана квадратная матрица порядка N.<br>Если в матрице есть отрицательные элементы, найти наименьший из них. <br><br>";}
viv();
function mass($n, $m) {
//Заполнение двумерного массива в таблицу 
global $arr; $arr = array(); 
for ($i=0; $i<$n; $i++)
{ $arr[$i] = array(); 
for($j=0; $j<$m; $j++)
{ $arr[$i][$j] = rand(-99, 99);}}
echo "<TABLE border=1>"; 
for ($i=0; $i<$n; $i++) { 
// запускаем первый цикл 
echo ("<tr>"); 
// начало строки таблицы
 for ($j=0; $j<$m; $j++) {
// запускаем второй цикл
echo ("<td align=center>");
// открываем ячейку таблицы
echo $arr[$i][$j];
// выводим его, 
echo ("</td>"); 
// а потом закрываем ячейку 
} echo ("</tr>"); 
// конец строки таблицы 
} 
echo "</TABLE>";} 
$p = rand (2,7);
$a = mass($p, $p); 
$out_array=array();
foreach($arr as $sub_array) {
	
	$out_array = array_merge($out_array, $sub_array);
	
} 
echo "<br> Наименьший: ";
echo min($out_array); 
?> <p><a href="index.php">Главное меню</a></p>
