<!DOCTYPE html>
<html>
<head>
	<title>Online Tutor</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: url(assets/img/download.jpg);
		background-repeat: no-repeat;
		width: 100%;
		height: auto;
	}
	#center{
		text-align: center;
		margin-top: 250px;
		opacity: 0.8;
		color: #fff;
	}
</style>
<body class="p-3 mb-2 bg-info text-dark">
<div class="container">
	<div class="row" id="center">
		<div class="col-sm-4" >

			<a href="Admin/login.php"><button type="button" class="btn btn-primary btn-lg"style="height: 150px;width: 180px"><!-- <img src="asset/Admin-icon.png" width="100" height="80" /> --><br>Admin</button></a>
		</div>
		<div class="col-sm-4">
		<a href="Tutor/tutor-login.php">	<button type="button" class="btn btn-primary btn-lg" style="height: 150px;width: 180px;text-align: center"><!-- <img src="asset/tutor-icon-1.jpg" width="100" height="100" /> <br>-->Tutor</button>
		</div>
		<div class="col-sm-4">

			<a href="Student/index.php"><button type="button" class="btn btn-primary btn-lg" style="height: 150px;width: 180px"><!-- <img src="asset/student_icon-512.webp" width="100" height="80" /><br> -->Student</button></a>
		</div>
	</div>
</div>


</body>
</html>
