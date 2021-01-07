<html>
	<head>
		<meta http-equiv="content-type" cotent="text/html" charset="utf-8">
	</head>
	<body>
		<h1>
			신규회원 입력
		</h1>
		<form method="post" action="create_result.php">
			<div>
				아이디 : <input type="text" name="UserID">
			</div>
			<div>
				이름 : <input type="text" name="UserName">
			</div>
			<div>
				출생연도 : <input type="text" name="birthYear">
			</div>
			<div>
				지역 : <input type="text" name="addr">
			</div>
			<div>
				연락처 : <input type="text" name="mobile">
			</div>
			<div>
				키(cm) : <input type="text" name="height">
			</div>	
			<br><br>
			<button type = "submit">
				제출
			</button>
		<form>
	</body>
</html>