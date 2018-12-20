<?php
	session_start();
	//Tạo 1 CSDL gia lap chua cac TK nguoi dung 
	$account = array(
		'admin'		=> '123456',
		'manager'	=> '123',
		'member'	=> 'abc456'
	);
	

	//Kiểm tra người dùng có click vào nut 'btnLogin'
	if (isset($_POST['btnLogin'])) {
		//Tiến hành lấy dữ liệu trên FORM và xử lý đăng nhập
		$user = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		//Kiểm tra sự tồn tại của người dùng trong mảng $account
		$status = 0;
		foreach ($account as $key => $value) {
			if ($user == $key && $pass == $value) {
				$status = 1;
				break;
			} else {
				$status = 0;
			}
			
		}

		if ($status == 1) {
			//Cap phien lam viec cho user 
			$_SESSION['login'] = $user;
			$_SESSION['loggedin'] = true;
			//Dieu huong ve index
			header("location:index.php");
		} else {
			header("location:login.php");
		}

	}else{
		header("location:login.php");
	}
	
	
?>