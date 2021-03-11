<!DOCTYPE html>
<html>
	<body>
	<?php
    	$i = 20;
        echo 'Các số 20>=50 chia hết cho 3 là:'.'<br>';
    	while ($i <=50){
			if($i % 3 == 0){
				echo $i.", ";
			}
        	$i++;
    	}
	?> 
	</body>
</html>