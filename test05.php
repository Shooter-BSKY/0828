<h2>利息試算程式</h2>
<hr>
<form method='POST' action="test05.php">
本金：<input type="text" size="10" name="money" value="0">元<br>
利率：<input type="text" size="10" name="rate"  value="0">%<br>
期數：<input type="text" size="10" name="years" value="0">年<br>
<input type="submit" value="計算">	





</form>
<?php
	
	$money = $_POST["money"];
	$rate = $_POST["rate"]/100;
	$years = $_POST["years"];

	echo "<table border=3 width=300>";
	
	echo "<tr>";
	echo "<td width=120 bgcolor=#ccffcc>本金</td><td bgcolor=#ccaaaa>" . $money . "元</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>利率</td><td bgcolor=#ccaaaa>" . $rate * 100 . "%</td>";
	echo "</tr>";

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>期數</td><td bgcolor=#ccaaaa>" . $years . "年</td>";
	echo "</tr>";

	$s_amount = $money * (1 + $rate * $years);
	$c_amount = $money * (1 + $rate) ** $years;

	echo "<tr>";
	echo "<td bgcolor=#ccffcc>單利試算結果</td><td bgcolor=#ccaaaa>" . (int)$s_amount . "元</td>";
	echo "</tr>";

	echo "<td bgcolor=#ccffcc>複利試算結果：</td><td bgcolor=#ccaaaa>" . (int)$c_amount . "元</td>";
	echo "</table>";
?>