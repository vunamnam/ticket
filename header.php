<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="styles.css">  
 <title>Welcome to tiNi World</title>
</head>
<body>
<?php  
$Ca;
$_SESSION["Ca"]=NULL;
$_SESSION['nhanvien'];
 $tennhanvien_id;
 $tennhanvien='admin';	
ob_start(); 
if(isset($_SESSION['nhanvien']))
		{
				$tennhanvien_id=$_SESSION['nhanvien'];
		}
date_default_timezone_set("Asia/Ho_Chi_Minh");
	$gio=date("H");
	$phut=date("i");
	if($gio<14)
	{
		$Ca="Sang";
	}
	else
	{
		$Ca="Chieu";
	}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ticket";
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 	
				  
			mysqli_set_charset($conn,"utf8");
	$tennv = "select tentaikhoan from taikhoan where id='$tennhanvien_id'";
			$resultnv=$conn->query($tennv);		
			if($resultnv->num_rows>0)
			{
				while ($rownv=$resultnv->fetch_assoc()) {
					$tennhanvien=$rownv["tentaikhoan"];				
				}
			}
			?>
<style>
span
{
margin: 30px 10px 10px 0px;
padding:10px;
}
a 
{
 font-size: 60px;
color: White;

}
.mymenu
{
	background-color: green;
	box-shadow: 0px 10px 10px grey;
}
</style>
<div class="logout" style='float: right;'> <a style='float: right; color:White; background-color: Blue;' href="dangnhap.php">Thoát</a></div>
<div class="mymenu">
<span class="menu"><a href="baocao.php" >Báo cáo  </a></span>
<span class="menu"><a href="themdiem.php" >Quản lý điểm</a></span>
</div></br>
<div class="ca">Ca: <?php   echo $Ca . ".     ".date("l") . " - " . date("Y-m-d") ;    ?>     Nhân viên: <?php echo $tennhanvien ?></div>	

<style>
.ca
{
	width: 100%;
box-shadow: 0px 10px 10px grey;

}
</style>

			