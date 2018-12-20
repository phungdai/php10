<?php
	//Tao ra mot mang 'Cart' co cau truc nhu sau:
	$cart = array(
		'P001' => array('name' =>'Iphone X','price' => 1000, 'quantity' => 1),
		'P005' => array('name' =>'Macbook Pro','price' => 3000, 'quantity' => 2),
		'P002' => array('name' =>'Tivi Sony','price' => 4000, 'quantity' => 1)
	);
	// //Tinh tien theo gia va so luong cua moi san pham
	// echo $cart['P005']['price']*$cart['P005']['quantity'];
	// //Hien thi ten cua san pham thu 2 trong 'gio hang
	// echo $cart['P005']['name'];
	$total = 0;
	echo "<h1>Gio Hang</h1><br>";
	echo "<table border ='1'>";
	echo "<tr><th>Ten SP</th>
			<th>Gia</th>
			<th>So luong</th>
			<th>Thanh tien</th>
			</tr>";			
	foreach ($cart as $k => $v) {
		$tt = $v['quantity']*$v['price'];
		echo "<tr>";
			echo "<td>".$v['name']."</td>";
			echo "<td>".$v['price']."</td>";
			echo "<td>".$v['quantity']."</td>";
			echo "<td>".$tt."</td>";
			$total += $tt;
		echo "</tr>";
	}

	
	echo "<tr><td colspan ='3'>tong tien</td><td>".$total."</td></tr>";
	echo "</table>";
?>
