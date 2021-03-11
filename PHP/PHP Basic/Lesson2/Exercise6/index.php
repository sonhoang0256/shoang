<!DOCTYPE html>
<html>
	<body>
	<?php
		$n = 50;
		$string = 1;
		$i = 2;
		while ($i<$n){
			$i++;
			$string.='-'.$i;
		}
        echo $string;
	?> 
	</body>
</html>