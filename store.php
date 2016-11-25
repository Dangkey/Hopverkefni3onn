<?php 
	include "connection.php";
	include "query.php";
 ?>
 <link href="css/store.css" type="text/css" rel="stylesheet"/>
<body>
	<table class="tablestore">
	<?php 

		# birtir töflu með player og score
		foreach ($Images as $entry) {
			echo '<tr><th>'.$entry[0].'</th><th><img src="'.$entry[1].'" width="200px" height="200px"></th><th>' . $entry[2] . "</th></tr>";


		}
	 ?>
</table>
<h2>Recently Viewed</h2>
<button><a href="index.php">Til baka á aðalsíðuna</a></button>
</body>