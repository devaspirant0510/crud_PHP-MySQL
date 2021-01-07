<?php
	require_once("login.php");

	$userID = $_POST['UserID'];
	$userName = $_POST['UserName'];
	$birthYear = $_POST['birthYear'];
	$addr = $_POST['addr'];
	$mobile = $_POST['mobile'];
	$height = $_POST['height'];
	$mDate = date("Y-m-d");
	echo $mDate;

	$sql = "INSERT INTO goodTBL VALUES('".
		$userID."','".$userName."','".$birthYear."','".
		$addr."','".$mobile."','".$height."','".date("Y-m-d")."');";
	$ret = mysqli_query($con,$sql);
	
	echo "<h1>신규 회원 입력 결과</h1>";
	if($ret){
		echo "성공적으로 입력됨";
		echo "<div><a href = main.html>홈화면</a></div>";
		echo "<div> <a href = read.php>데이터 조회</a></div>";
	}
	else{
		echo "error!";
		echo mysqli_error($con);
	}
	mysqli_close($con);
	
?>