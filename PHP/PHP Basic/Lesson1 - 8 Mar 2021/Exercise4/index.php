<!DOCTYPE html>
<html>
	<body>
	<?php
		$module = 'EV2009';
		$name = 'Tấm hợp kim nhôm ngoài trời EV2009';
		$quantity = 500;
		$price = 160000;
		$VAT = 0.05;
		echo 'Tên sản phẩm:' .$name."<br>";
		echo 'Mã sản phẩm:' .$module."<br>";
		echo 'Số lượng:' .$quantity."<br>";
		echo 'Đơn giá:' .$price."<br>";
		echo 'Thuế VAT:' .$VAT."<br><br>";
		
		echo 'Tổng tiền trước khi trừ thuế VAT:' .$quantity*$price."<br>";
		echo 'Sau khi trừ thuế VAT:' .$quantity*$price*$VAT."<br>";
	?>
	</body>
</html>