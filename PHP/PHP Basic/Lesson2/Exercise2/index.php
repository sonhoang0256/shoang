<!DOCTYPE html>
<html> 
   <body>
		<?php	
			$arr = array(1,2,3,4,5,6,7,8,9,10);
			$max_value = max($arr);
            $min_value = min($arr);
            foreach ($arr as $c)  
			{  
			  echo "$c, "."<br>";  
			}  
            echo 'Giá trị lớn nhất trong mảng:'.$max_value."<br>";
            echo 'Giá trị nhỏ nhất trong mảng:'.$min_value."<br>";
		?>
   </body>
</html>