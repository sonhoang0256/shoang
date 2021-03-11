<!DOCTYPE html>
<html>
	<body>
	<?php
		$i = 1;
        $s = 0;
        while ($i <= 100) {
            $i++;
            $s += $i;
        }
		echo 'Tổng 100 số nguyên đầu tiên:'.' '.$s;
		echo 'Bình phương tổng 100 số nguyên đầu tiên:'.' '.$s*$s;
	?> 
	</body>
</html>