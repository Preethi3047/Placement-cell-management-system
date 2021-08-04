<!DOCTYPE html>
<html>
<head>
<title>STUDENT PAGE</title>
<meta charset="utf-8">
<meta name="width=device-width,initial-scale=1">
<style>
*{
	box-sizing: border-box;
}
body{
	margin:0px;
}
.header{
	width:100%;
	height:70px;
	background:rgb(219,112,147);
	color:black;
	text-align:center;
	border:2px solid;
	border-color:black;
	font-weight:bolder;
    text-shadow:2px 2px white;
}
.left-menu{
	width:300px;
	height:580px;
	background:rgb(255,182,193);
	float:left;
	border:2px solid;
	border-color:black;
	font-size:23px;
	text-align:left;
	display:block;
	overflow: hidden;
	padding:14px 14px 14px;
}
.left-menu a{
	color:black;
	text-decoration:none;
	padding:14px 14px;
}
.left-menu a:hover{
	background-color:black;
	color:white;
}
.middle{
	height:580px;
	background:url("img12.png");
	background-repeat:no-repeat;
	background-size:100% 100%;
	border:2px solid;
	border-color:black;
	text-align:right;
	font-size:25px;
}
.middle a{
	color:white;
	text-decoration:none;
	padding:14px 14px;
}
.middle a:hover{
	background-color:black;
	color:white;
}
</style>
</head>
<body>
<div class="header">
<h1>STUDENT DASHBOARD</h1>
</div>
<div class="left-menu"><br>
<img src="img19.png" height="30px" width="30px"><a href="studetails.php">Enter your details</a><br><br>
<img src="img20.png" height="30px" width="30px"><a href="applyjob.php">Apply for a job</a><br><br>
<img src="img17.jpg" height="30px" width="30px"><a href="checkers.php">Check interview result</a><br><br>
<img src="img14.png" height="30px" width="30px"><a href="chngpwd.php">Change Password</a><br><br>
</div>
<div class="middle">
<br><img src="img6.png" height="100px" width="100px" style="float:right;border:3px solid black;">&emsp;<br><br><br><br>
<a href="logout.php">Logout</a>
</div>
</body>
</html>