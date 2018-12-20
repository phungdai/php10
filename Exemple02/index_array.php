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
		//Cau truc tao mang kieu 'index - chi so'
		$arrCar = array("volvo", "mecerdes", "toyota", "lexus");
		//Them mot thanh vien moi vao mang $arrCar
		$arrCar[4] = 'vinfast';
		//Hien thi cac gia tri cua cac phan tu trong mang $arrName
		echo "danh sach hang xe la: ";
		for ($i=0; $i < count($arrCar); $i++) { 
			echo $arrCar[$i]. ", ";
		}

	?>
</body>
</html>