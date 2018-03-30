<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript">
		if(document.forms["Myform"]["Username"].value=="")
			document.getElementById('u').style.color="red";
		else if(document.forms["Myform"]["Password"].value=="")
			document.getElementById('p').style.color="red";
	</script>
</head>
<body>
	<div class="sg">
		<form method="post" name="Myform" onsubmit="">
			<h3>Login</h3>
			<p id="u">Username: <input type="text" name="Username"></p>
			<p id="p">Password: <input type="password" name="Password"></p>
			<input type="submit" value="Submit">
			<p id="stat"></p>
		</form>
	</div>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "login";

    $u=$_POST["Username"];
    $p=$_POST["Password"];

    $conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * FROM details WHERE email='$u' AND password='$p'";

if($conn->query($sql) === FALSE){
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
</body>
</html>