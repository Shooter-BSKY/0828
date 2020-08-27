<?php
	$names=  array("小明","小華","小張","小黃");
	$heights = array(1.74 , 1.86 , 1.65 , 1.60);
	$weights = array(45 , 104 , 70 , 55);
	
	for ($i=0; $i < count($names) ; $i++) { 
		echo "姓名：".$names[$i]. "br";
		$height=$heights[$i];
	    $weight=$weights[$i];
	

	echo "身高：", $height, "公尺<br>";
	echo "體重：". $weight. "公斤<br>"; 
	$bmi = $weight / $height ** 2;
	echo "BMI：" . (int)$bmi . "<br>";
	if ($bmi>27) {
		echo "都快地震了！";
	} else if ($bmi>=20) {
		echo "這是黃金比例嗎！";
	} else {
		echo "也太瘦了吧！";
	}
	   echo"<hr>";
	}
?>

