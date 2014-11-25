<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>untitled</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Geany 1.23.1" />
</head>

<body>

	<?php
	$usuaris=$_POST ['usuaris']
	$password=$_POST ['password']
	$nom=$_POST ['nom']
	$llinatge1=$_POST ['llinatge1']
	$llinatge2=$_POST ['llinatge2']
	
	<?php
	$dbc = mysqli_connect('172.16.81.232', 'toni', 'toni', 'tbj_db')
	or die('Error connecting to MySQL server.');
	$query = 'insert into users (usuari,password,nom,llinatge1,llinatge2)
		values ('$usuaris','$password','$password','$nom','$llinatge1','$llinatge2')

	






</body>
