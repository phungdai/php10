<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		
		/*
		// Mang kieu Indexed

		$arrAge = array(15,16,21,35);
		$arrAge[4] = 25;
		echo $arrAge[4]; 
		
		//Mang kieu ket hop  key,value
		
		$arrCustomer = array(
			'coo1' => 'khuong', 
			'coo4' => 'Chau' ,
			'coo3' => 'An' ,
		);
		
		//Mang cua mang

		$arrProduct = array(
			'P001' => 'IphoneX',
			'P002' => array("samsung", 20)	
		);
		*/
	?>
	
	<?php

		//Tao ra mot mang ket hop '$arrCustomer'
		$arrCustomer = array(
			'P001' => 'Khuong', 
			'P004' => 'Chau' ,
			'P008' => 'An' ,
		);

		//Them moi mot phan tu den mang
		$arrCustomer['P003'] = 'Dung';
		$arrCustomer['P010'] = 'Huong';

		//Hien thi cac phan tu trong mang
		echo "<table border ='1'>";
		echo "<tr><th>Ma HV</th><th>Ten HV</th></tr>";
		foreach ($arrCustomer as $key => $value) {
			echo "<tr>";
			echo "<td>".$key."</td>" ;
			echo "<td>".$value."</td>" ;
			echo "</tr>";
		}
		echo "</table>"
	?>
</body>
</html>