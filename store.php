<?php 
	include "connection.php";
	include "query.php";
 ?>
 <link href="css/store.css" type="text/css" rel="stylesheet"/>
<body>
	<table class="tablestore">

	<?php 
	$name = null;
	$image = null;
	$price = null;
	$teljari = 0;



		foreach ($Images as $entry) {
		$name[] = $entry[0]; 
		$image[] = $entry[1];
		$price[] = $entry[2];
		}
		echo '<tr>';
		foreach ($name	 as $entry) {
			echo '<td>' . $entry . '</td>';
		}
		echo '</tr><tr>';
		foreach ($image	 as $entry) {
			echo "<td><a href='store.php?id=2&cookie=" . $teljari++ . "'><img src=' ".$entry."' width='200px' height='200px'></a></td>";
			
		}
		echo '</tr><tr>';
		foreach ($price	 as $entry	) {
			echo '<td>'.$entry.'</td>';
		}
		echo '</tr>';

	 ?>
</table>
<h2>Recently Viewed</h2>
<?php


          /*                          PHP Kóði fyrir Recently Viewed.*/
if(isset($_GET['cookie'])){
    $img ="";
    if (isset($_COOKIE['pic'])) {
        $img=$_COOKIE['pic'];
    }
    $id = $_GET["cookie"];

    if($id == 0){
        $img = $img.'0';
    }
    if($id == 1){
        $img = $img.'1';
    }
    if($id == 2){
        $img = $img.'2';
    }
    if($id == 3){
        $img = $img.'3';
    }
    if (strlen($img)==5) {
        $img = substr($img, 1);
    }


        $expire = time()+(60*60*24*7);
        setcookie("pic", $img, $expire);
}
  
?>
<div id="body">
    <div>
        <?php
            if(isset($_COOKIE['pic'])&&isset($_GET['cookie'])){
                echo "<p>Nýlega Skoðað</p>";
                for ($i=strlen($img)-1; $i >= 0; $i--) { 
                        if($img[$i] == $id){
                        echo "<img src='".$image[$id]."' width='200px' height='200px'";
                    
                    }

                }
            } 

            /*
            RECENTLY VIEWED Kóði ENDAR

            */
        ?>
<button><a href="index.php"><br>Til baka á aðalsíðuna</a></button>
</body>