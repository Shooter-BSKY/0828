<?php
	echo "<table width=300>";
	echo "<tr bgcolor=#aa0000>
	      <td>i</td>
	      <td>i**2</td>
	      <td>i**3</td>
	      </tr>";
	for($i=1; $i<=9; $i++) {	
		if ($i%2) 
			echo "<tr bgcolor=#bbccdd>";
		else
		echo "<tr bgcolor=#0fffbb>";
		echo "<td>$i</td><td>" . $i**2 . 
		     "</td><td>" . $i**3 . 
		     "</td>";
        echo "</tr>";
	}
	echo "</table>";
?>