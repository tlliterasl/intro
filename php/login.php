<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>login</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	<?php
	$user=$_POST ['user'];
	$password=$_POST ['password'];
	
	$dbc = mysqli_connect('172.16.81.232', 'toni', 'toni', 'tbj_db')
	or die('Error connecting to MySQL server.');
	$query = "SELECT usuari,password FROM users where usuari='$user'";
	echo "$query<br>";
	
	$result = mysql_query($dbc, $query);
	$row = mysqli_fetch_array($result);
	echo "row the password que ve de la base de dades és: ".$row['password']."<br/>";
	echo "el password que ens ve del formulari és: $password<br>";
	if ($password==$row['password']){
		echo "LOGIN CORRECTE"<br>;
	}else{
		echo "LOGIN INCORRECTE"<br>
	}
	
	?>
	
</body>
</html>
	
