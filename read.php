<?php
	require_once("login.php");
	
	$sql = "SELECT * FROM goodTBL";
	$ret = mysqli_query($con,$sql);
	if ($ret){
		$count = mysqli_num_rows($ret);
		echo "데이터를 성공적으로 불러옴 : ${count} 개";
	}
	else{
		echo "오류";
	}
	echo "<h1> 회원 검색 결과 </h1>";
	echo "<table border=1>";
	echo "<tr><th>아이디</th><th>이름</th><th>출생년도</th><th>지역</th><th>연락처</th><th>키</th><th>가입일</th><th>수정</th><th>삭제</th></tr>";
	while ($row = mysqli_fetch_array($ret)){
		echo "<tr>";
		echo "<td>".$row['UserID']."</td>";
		echo "<td>".$row['UserName']."</td>";
		echo "<td>".$row['birthYear']."</td>";
		echo "<td>".$row['addr']."</td>";
		echo "<td>".$row['mobile']."</td>";
		echo "<td>".$row['height']."</td>";
		echo "<td>".$row['mDATA']."</td>";
		echo "<td><a href=update.php?id=".$row['UserID'].">수정</a></td>";
		echo "<td><a href=delete.php?id=".$row['UserID'].">삭제</a></td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<div><a href=main.html>홈으로</a></div>";

?>
