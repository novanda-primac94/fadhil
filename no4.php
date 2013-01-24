<html>
<head>
	<title>NO.4</title>
</head>	
<body bgcolor="litblue">
<center><h1>No.4</h1>
<?php
function no4(){
	$string1 = $_REQUEST['str1'];
	$string2 = $_REQUEST['str2'];
	$string1 = strtolower($string1);
	$string2 = strtolower($string2);
	foreach (count_chars($string1, 1) as $i1 => $val1) {
		echo "";
	}
		
	foreach (count_chars($string2, 1) as $i2 => $val2) {
		echo "";
	}
		
	if ($string1 == null){
			echo "";
		}	
	else if($val1 == $val2 && $i1 == $i2){
		echo "benar";
	}
	else{
		echo "salah";
	}
}
soal4();
</center>
</body>
</html>
