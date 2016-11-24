

<?php 
	include "connection.php";
	include "query.php";
 ?>
<table border="1">	
<tr>
	<th>Mynd Heiti</th>
	<th>Mynd</th>
	</tr>
	<?php 
		# birtir töflu með player og score
		foreach ($Images as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td><img src="'.$entry[1].'" width="400px" height="400px"></td></tr>';
		}
	 ?>
</table>


<form action="insert.php" method="post">
        <label>Myndheiti: </label>
        <input type="text" name="imageName" required ><br>
        
        <label>Myndslóð: </label>
        <input type="text" name="imagePath" required ><br>

        <input type="submit">
    </form>


<a href="index.php">Til baka á aðalsíðuna</a>