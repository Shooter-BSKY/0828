<button type=burron><a href="index.php">回首頁</a></button>
<button type=burron><a href="test01.php">回智能BMI</a></button>
<button type=burron><a href="test01.php?height=1.70&weight=65">夢想的BMI</a></button>
<button type=burron><a href="test01.php?height=1.48&weight=120">感情的BMI</a></button>
<button type=burron><a href="test01.php?height=2.00&weight=45">世界的BMI</a></button>
<hr>


<?php

    function conputeBMI($height,$weight) {
      echo "身高：", $height, "公尺<br>";
	  echo "體重：". $weight. "公斤<br>"; 
	  $bmi = $weight / $height ** 2;
	  echo "BMI：" . round($bmi, 2) . "<br>";
	    if ($bmi>27) {
		  echo "走路都快地震了！";
	    } else if ($bmi>=20) {
		  echo "這是黃金比例嗎？！";
	    } else {
		  echo "要被風吹走啦！";
	    }

    }  
    $height = $_GET["height"];
	$weight = $_GET["weight"];	
  if ($height!=NULL and $weight!=NULL){	//確定兩個值都不是空的
	//條件成立之後才會執行的部分
	      conputeBMI($height,$weight);

  } else { //如果有任何一個值是空的
    	echo "請在網址列填寫你真正的身高體重，才能勇於面對現實!<br>";
        echo "使用例：http://localhost/mysite/0827/test07.php?
              height=你的身高&weight=你的體重";    
  }


  
?>

