<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
</head>
<body>
	<?php
	//Kiểm tra sự tồn tại 'id' và 'catid' trên url
	//Nếu tồn tại đồng thời thì hiện thị chi tiết sp
	//Nếu không tồn tại, thì điều hướng về 'index.php'
	if (isset($_GET['id']) && isset($_GET['catid'])) {
		//lấy giá trị của tham số trên url
		$masp = $_GET['id'];
		$madm = $_GET['catid'];

		echo "Mã sản phẩm". $masp;
		if ($madm==1) {
			echo "<br>Sản phẩm thuộc danh mục Computer";
		}elseif ($madm==2) {
			echo "<br>Sản phẩm thuộc danh mục Laptop";
		}
	}else{
		header("location:index.php");
	}
			
	?>
</body>
</html>