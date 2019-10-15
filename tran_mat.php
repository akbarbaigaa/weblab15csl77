<?php
$a=trans(array(1,2,3),
		 array(4,5,6),
		 array(7,8,9));

		echo"<p>Matrix</p>"
		for($row=0; $row<=3;$row++)
		{
			echo"<br>";
			for($col=0; $col<=3; $col++)
			{
				
				echo"".$c[$row][$col];
				
			}
			
		}
		
		echo"<p>Transpose_Matrix</p>"
		for($row=0; $row<=3;$row++)
		{
			echo"<br>";
			for($col=0; $col<=3; $col++)
			{
				
				echo"".$c[$col][$row];
				
			}
			
		}
	
	?>