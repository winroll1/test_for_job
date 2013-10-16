<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="style1.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="js/jq.js"></script>
</head>

<body>

<div id="wrapper">

	<header id="header">
		<strong>Header!!:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tortor. Praesent dictum, libero ut tempus dictum, neque eros elementum mauris, quis mollis arcu velit ac diam. Etiam neque. Quisque nec turpis. Aliquam arcu nulla, dictum et, lacinia a, mollis in, ante. Sed eu felis in elit tempor venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut ultricies porttitor purus. Proin non tellus at ligula fringilla tristique. Fusce vehicula quam. Curabitur vel tortor vitae pede imperdiet ultrices. Sed tortor.
	</header><!-- #header-->

	<div id="content">
		<?

$file ="test.txt"; // указываем файл с данными

$file_array = file($file); // формируем массив из содержание файла
/*
print $file_array[0];
print"<br>";
print $file_array[1];
print"<br>";
print $file_array[2];
*/
list($gorod, $poyas) = explode(";",$file_array[0]); // формируем переменные из первой строки массива с помощью разделителя ";"
print"<br>";
/*
print $gorod;
print"<br>";
print$poyas;
*/
print"<br>";

list($gorod1, $poyas1) = explode(";",$file_array[1]); // формируем переменные из второй строки массива с помощью разделителя ";"
/*
print"<br>";
print $gorod1;
print"<br>";
print$poyas1;
*/
print"<br>";

list($gorod2, $poyas2) = explode(";",$file_array[2]); // формируем переменные из третей строки массива с помощью разделителя ";" 
/*
print"<br>";
print $gorod2;
print"<br>";
print$poyas2;
*/


$aFileContent = array ($gorod => $poyas , $gorod1 => $poyas1 , $gorod2 => $poyas2); // собираем значения переменных в ассоциативный массив


print"<div id='center'>";
ksort($aFileContent); // сортировка по ключу в алфавитном порядке
//reset($aFileContent); // возврат на исходную позицию в массиве
$i=0;
while (list($gorod, $poyas) = each($aFileContent)) { // вывод в цикле ключ значение из ассоциативного массива
    echo "<div class='v$i'>$gorod  $poyas</div><br><div></div>\n";
$i++;
	}
?>


<b id="seconds">0</b>

<script Language="JavaScript">
var hours = <?php echo date("H"); ?>;
var min = <?php echo date("i"); ?>;
var sec = <?php echo date("s"); ?>;
function display() {
if (sec == 59) {
  sec = 0;
if (min >= 59) {
  min = 0;
if (hours >= 24)
  hours = 0;
}
else
  min+=1;
} else {
sec+=1;



if (sec<10)
  sec2display = "0"+sec;
else
  sec2display = sec;


if (min<10)
  min2display = "0"+min;
else
  min2display = min;

if (hours<10)
  hour2display = "0"+hours;
else
  hour2display = hours;


}
document.getElementById("seconds").innerHTML = hour2display+":"+min2display+":"+sec2display;
setTimeout("display();", 1000);
}
display();
</script>


  
	</div><!-- #content-->

	<footer id="footer">
		<strong>Footer:</strong> Mus elit Morbi mus enim lacus at quis Nam eget morbi. Et semper urna urna non at cursus dolor vestibulum neque enim. Tellus interdum at laoreet laoreet lacinia lacinia sed Quisque justo quis. Hendrerit scelerisque lorem elit orci tempor tincidunt enim Phasellus dignissim tincidunt. Nunc vel et Sed nisl Vestibulum odio montes Aliquam volutpat pellentesque. Ut pede sagittis et quis nunc gravida porttitor ligula.
	</footer><!-- #footer -->

</div><!-- #wrapper -->

</body>
</html>
