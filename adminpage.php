

<?php 
	include "connection.php";
	include "query.php";
 ?>
 
<table border="1">	
<tr>
	<th>Mynd Heiti</th>
	<th>Mynd</th>
	<th>Price</th>
	<th>Link</th>
	</tr>
	<?php 
		# birtir töflu með player og score
		foreach ($Images as $entry) {
			echo '<tr><td>'.$entry[0].'</td><td><img src="'.$entry[1].'" width="100px" height="100px"</td><td>' . $entry[2] ."</td><td>" . $entry[3] ."</td></tr>";
		}
	 ?>
</table>


<form action="insert.php" method="post">
        <label>Myndheiti: </label>
        <input type="text" name="imageName" required ><br>
        
        <label>Myndslóð: </label>
        <input type="text" name="imagePath" required ><br>

        <label>Verð: </label>
        <input type="text" name="Price" required ><br>

        <label>Slóð til að kaupa: </label>
        <input type="text" name="link" required ><br>

        <input type="submit">
    </form>    

<?php session_start(); /* Starts the session */

if(!isset($_SESSION['UserData']['Username'])){
  header("location:login.php");
  exit;
}

?>
<button><a href="logout.php">Log Out</a></button>