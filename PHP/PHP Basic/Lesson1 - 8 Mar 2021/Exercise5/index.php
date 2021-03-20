<!DOCTYPE html>
<html>
	<body>
		<?php
			$ElectricNum = 460;
			$BeforeVAT = "Tiền điện trước khi tính thuế là: ";
			$AfterVAT = "Tiền điện sau khi tính thuế là: ";
			$price1 = $ElectricNum*450;
			if ($ElectricNum<=100) {
				echo $BeforeVAT.$price1."<br>";
				echo $AfterVAT.($price1+0.1*$price1);
			}
			else if ($ElectricNum > 100 && $ElectricNum <= 200) {
				$price2 = ($ElectricNum - 100)*600 + 100*450;
				echo $BeforeVAT.$price2."<br>";
				echo $AfterVAT.($price2+0.1*$price2);
			}
			else if ($ElectricNum > 200 && $ElectricNum <= 300) {
				$price3 = 100*(450+600)+($ElectricNum-200)*750;
				echo $BeforeVAT.$price3."<br>";
				echo $AfterVAT.($price3+0.1*$price3);
			}
			else if ($ElectricNum > 300 && $ElectricNum <= 500) {
				$price4 = 100*(450+600+750)+($ElectricNum-300)*900;
				echo $BeforeVAT.$price4."<br>";
				echo $AfterVAT.($price4+0.1*$price4);
			}
			else if ($ElectricNum > 500 && $ElectricNum <= 1000) {
				$price5 = 100*(450+600+750)+(200*900)+($ElectricNum-500)*1000;
				echo $BeforeVAT.$price5."<br>";
				echo $AfterVAT.($price5+0.1*$price5); 
			}
			else {
				$price6 = 100*(450+600+750)+(200*900+500*1000)+($ElectricNum-1000)*1200;
				echo $BeforeVAT.$price6."<br>";
				echo $AfterVAT.($price6+0.1*$price6);
			}
		?>
	</body>
</html>