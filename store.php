

<?php 
	include "connection.php";
	include "query.php";
 ?>
<tr>
	</tr>
	<?php 
		# birtir töflu með player og score
		foreach ($Images as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td><img src="'.$entry[1].'" width="200px" height="200px"></td></tr>' . $entry[2] . "<br>";
		}
	 ?>

<a href="index.php">Til baka á aðalsíðuna</a>