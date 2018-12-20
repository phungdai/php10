<?php
	session_start();
	if (isset($_SESSION['login']) && isset($_SESSION['loggedin']) 
		&& $_SESSION['loggedin'] == true) {
		//Hien thi trang index	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="container page-header">
			<div class="row">
				<div class="col-md-6">
					Welcome: <?php echo $_SESSION['login']; ?>
				</div>
				<div class="col-md-6" style="text-align: right">
					<a href="logout.php">Logout</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3" style="border:1px solid blue;height: 400px">
					Category
				</div>
				<div class="col-md-9" style="border: 1px solid red;height: 400px">
					Content
				</div>
			</div>
		</div>	
	</div>
</body>
</html>
<?php
	} else {
		//Dieu huong ve login
		header("location:login.php");
	}
?>