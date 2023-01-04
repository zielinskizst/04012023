<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<br><center>
	<h1>4 stycznia 2023</h1>
	<h1>Dodaj ucznia</h1>
		
		<form method="post">
			<input type="text" name="posted" hidden="true">
			Wprowadź imie delikwenta <input type="text" name="imie">
			Wprowadź nazwisko delikwenta <input type="text" name="nazwisko">
			Z jakiej on jest klasy <select name="klas">
				<option value="1">1a</option>
				<option value="2">1b</option>
				<option value="3">2a</option>
				<option value="4">2b</option>
			</select>
			<input type="submit" name="wys">
		</form>
	<?php 
	if(isset($_POST['posted']))
	{
		$imie=$_POST['imie'];
		$nazwisko=$_POST['nazwisko'];
		$klasa=$_POST['klas'];
		$con=mysqli_connect("localhost","root","","szkola");
		$sql="DELETE FROM uczen WHERE imie='$imie' AND nazwisko='$nazwisko' AND id_klasy='$klasa'";
		$res=mysqli_query($con,$sql);
		echo "Cyknięty";
		mysqli_close($con);
	}
	?>
		</center>
		<a href="meni.php">Powrót do menu</a>
</body>
</html>