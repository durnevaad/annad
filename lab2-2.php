<title>Дурнева А.Д.</title>
<b>Задание №2-2</b><br>
<?php
//случайная переменная для присвоения кол-ва эл-в в массиве
$a = rand(3, 20);
$mas = array();
for ($n=1;$n<=$a;$n++){
	$mas[]= rand(10,99);} 
echo "Массив из $a элементов, заполненный случайными числами: ";
for ($i=0;$i<=$n;$i++){ 
echo $mas[$i].' ';} 
//сортируем
echo "<br> Массив в отсортированном виде: ";
sort ($mas);
for ($i=0;$i<=$n;$i++){ 
echo $mas[$i].' ';} 
//обратный порядок
echo "<br> Элементы массива в обратном порядке: ";
$rev = array_reverse($mas);
for ($i=0;$i<=$n;$i++){ 
echo $rev[$i].' ';} 
//минус последний
echo "<br> Массив после удаления последнего элемента: ";
$min = array_pop($rev);
for ($i=0;$i<=$n;$i++){ 
echo $rev[$i].' ';} 
//сумма эл-в в массиве
echo "<br> Сумма элементов массива: ".array_sum($rev);
//кол-во эл-в в массиве
echo "<br> Количество элементов массива: ".count($rev);
//ср.ар. для элементов
$sr = array_sum($rev) / count($rev);
echo "<br> Среднее арифметическое для элементов массива: $sr";
//проверка на число
if (in_array("50",$rev)){
echo "<br>Число 50 есть в массиве.";}
else {echo "<br>Числа 50 нет в массиве.";}
if (in_array("10",$rev)){
echo "<br>Число 10 есть в массиве.";}
else {echo "<br>Числа 10 нет в массиве.";}
//удалить повторения
echo "<br> Массив из уникальных значений: ";
$unic = array_unique($rev);
for ($i=0;$i<=$n;$i++){ 
echo $unic[$i].' ';} 
?> <p><a href="index.php">Главное меню</a></p>
