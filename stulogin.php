<html>
<head>
<style>
body{
    background-image: url('img7.jpg');
    background-repeat:no-repeat;
    background-size:100% 100%;
}
.loginblock
{
	top: 50%;
    left:50%;
    background:#000;
    color:#fff;
    width:320px;
    height:420px;
	position:absolute;
    transform:translate(-50%,-50%);
    box-sizing:border-box;
    padding:70px 30px;
    font-size:17px;
}
.avatar{
    width:100px;
    height:100px;
    border-radius:50%;
    position:absolute;
    top:-50px;
    left: calc(50% - 50px);
}
.loginblock p{
    margin:0;
    padding:0;
    font-weight:bold;
}
.loginblock input{
    width:100%;
    margin-bottom:20px;    
}
.loginblock input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background:transparent;
    outline : none;
    height:40px;
    color:white;
}
</head>
</style>
<body>
<div class="loginblock">
<img src="img6.png" class="avatar">
<h1 style="text-align:center;">Student Login</h1><br>
<form method="post" action="checks.php">
<p>User Name</p>
<input type="text" name="uname" placeholder="Enter your name">
<p>Password</p>
<input type="password" name="pwd" placeholder="Enter your password">
<input type="hidden" name="usertype" value="S">
<input type="submit" name="submit" name="submit" style="background-color:blue;height:40px;border-radius:20px;">
</form>
</div>
</body>
</html>