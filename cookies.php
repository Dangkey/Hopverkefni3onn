<?php
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
        <h1>Myndir</h1>
        <a href="cookies.php?id=2&cookie=0"><img width="200px" src="http://plusquotes.com/images/quotes-img/cool-pictures-24.jpg"></a>
        <a href="cookies.php?id=2&cookie=1"><img width="200px" src="http://www.planwallpaper.com/static/images/7004205-cool-black-backgrounds-27640_lhK8IKI.jpg"></a>
        <a href="cookies.php?id=2&cookie=2"><img width="200px" src="http://www.planwallpaper.com/static/images/Cool-logo-live-hd-wallpapers-2-1-s-307x512.jpg"></a>
        <a href="cookies.php?id=2&cookie=3"><img width="200px" src="http://www.planwallpaper.com/static/images/Cool_background-2.jpg"></a>
    </div>
    <div>
        <?php
            $mynd = "";
            if(isset($_COOKIE['pic'])&&isset($_GET['cookie'])){
                echo "<p>Nýlega Skoðað</p>";
                for ($i=strlen($img)-1; $i >= 0; $i--) { 
                        if($img[$i] == '0'){
                    $mynd = "http://plusquotes.com/images/quotes-img/cool-pictures-24.jpg";
                    }
                    else if($img[$i] == '1'){
                        $mynd = "http://www.planwallpaper.com/static/images/7004205-cool-black-backgrounds-27640_lhK8IKI.jpg";
                    }
                    else if($img[$i] == '2'){
                        $mynd = "http://www.planwallpaper.com/static/images/Cool-logo-live-hd-wallpapers-2-1-s-307x512.jpg";
                    }
                    else if($img[$i] == '3'){
                        $mynd = "http://www.planwallpaper.com/static/images/Cool_background-2.jpg";
                    }
                    echo  "<img width=\"200px\" src=\"{$mynd}\">"; 
                }
            } 
        ?>
    </div>
</div>
<a href="index.php">Til baka á aðalsíðuna</a>