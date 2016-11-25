

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
</head>
<body>
<?php

$rec_limit = 10;

$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
die('Could not connect: ' . mysql_error());
}
    mysql_select_db('db');
    /* Get total number of records */
    $sql = "SELECT count(ID) FROM Dvd_List";
    $retval = mysql_query($sql, $conn);
    if (!$retval) {
        die('Could not get data: ' . mysql_error());
    }
            $row = mysql_fetch_array($retval, MYSQL_NUM);
            $rec_count = $row[0];

            if (isset($_GET{'page'})) {
                $page = $_GET{'page'} + 1;
                $offset = $rec_limit * $page;
            } else {
                $page = 0;
                $offset = 0;
            }
            $left_rec = $rec_count - ($page * $rec_limit);

            ?>
    <form action='loginhandler.php' method='post'>
            <input type="checkbox" name="year" value="BETWEEN 2010 AND 2014">2010   and Later
            <input type="checkbox" name="year" value="BETWEEN 2000 AND 2009">2000 - 2009
            <input type="checkbox" name="year" value="BETWEEN 1990 AND 1999">1990 - 1999    
    <?php
            $sql = "SELECT * FROM Dvd_List";
            if (isset($_POST['year'])){
                $_SESSION['year'] = $_POST['year'] ;
            }
            else{
                if(!isset($_GET['page']))
                {
                    $_SESSION['year'] = "";
                }
            //$sql = $sql." AND DVD_Title LIKE '%%'"
        //  $sql = "SELECT *" . "FROM Dvd_List " . "LIMIT $offset, $rec_limit";

        }
            if(isset($_SESSION['year']))
            {
                    $sql = $sql." WHERE Year ".$_POST['year'].  " LIMIT $offset, $rec_limit";
            }

            else {
                $sql = "SELECT *" . "FROM Dvd_List " . "LIMIT $offset, $rec_limit";
            }

            $retval = mysql_query($sql, $conn);
            if (!$retval) {
                die('Could not get data: ' . mysql_error());
            }
?>
<input type="submit" name="submit" value="GO!">
</form>
<form action='handlebasket.php' method='post' accept-charset='UTF-8'><?php
print "<table border='1'>
<th></th>
<th>Title</th>
<th>Price</th>
<th>Year</th>
";

    while ($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
        print "<tr><td><input type=\"checkbox\" name=\"" . $row['ID'] . "\"/></td>  <td>{$row['DVD_Title']}</td>
            <td>{$row['Price']}</td><td>{$row['Year']}</td></tr><br>";
    }

    if ($page > 0) {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a> |";
        echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
    } else if ($page == 0) {
        echo "<a href=\"$_PHP_SELF?page=$page\">Next 10 Records</a>";
    } else if ($left_rec < $rec_limit) {
        $last = $page - 2;
        echo "<a href=\"$_PHP_SELF?page=$last\">Last 10 Records</a>";
    }
        mysql_close($conn);
?>
<input type="submit" name="submit" value="Add to cart">
</form>
</body>
</html>