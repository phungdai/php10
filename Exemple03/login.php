<?php
//Yeu cau: Tao ra 1 mang user, trong do moi phan tu cua mang bao gom ten dang nhap va mat khau.
$userArr = array(
	"admin" => "admin",
	"user" => "user",
	"manager" => "abcd"
	);
// $user = "abn";
// $pass = "123456";

// $flag = 0;
// foreach ($userArr as $key => $value) {
// 	if ($user == $key && $pass ==$value){
// 		$flag = 1;
// 		break;
// 	}
// }
// if($flag==0){
// 	echo "dang nhap thanh cong";
// }else{
// 	echo "dang nhap that bai";
// }
//Hien thi gia tri cua phan tu thu 3 trong mang
echo $userArr['manager'];