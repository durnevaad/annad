<title>Дурнева А.Д.</title>
<b>Задание №2-4</b><br>
<?php
//задан массив
$a = rand(3, 10);
$mas = array();
for ($n=1;$n<=$a;$n++){
	$mas[]= rand(1,20);} 
echo "Массив из $a элементов, заполненный случайными числами: ";
for ($i=0;$i<=$n;$i++){ 
echo $mas[$i].' ';} 
?> <p><a href="index.php">Главное меню</a></p>
