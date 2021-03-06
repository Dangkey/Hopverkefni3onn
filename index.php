
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Verkefni 5 VSH</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="js/jquery.js"></script>
  <script type="text/javascript" src="js/view.js"></script>
  <script src="js/js-image-slider.js" type="text/javascript"></script> 

</head>
<body>

<script type="text/javascript" src="scroll.js"></script>

  <header class="header">
  
  <input type="checkbox" id="menu" name="menu" class="menu-checkbox">
  <div class="menu">
    <label class="menu-toggle" for="menu"><span>Toggle</span></label>
    <ul>
      <li>
        <a href="#banner" class="smoothScroll">Overwatch</a>
      </li>
      <li>
        <a href="#flex1" class="smoothScroll">Titanfall 2</a>
      </li>
      <li>
        <a href="#Layout" class="smoothScroll">Store</a>
      </li>
</div>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>
  
      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="banner" id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        
        <div class="row center">
          
        </div>
        <div class="row center">
          <button class="button"><a href="flexbox.html"><span>Sjá nánar </span></a></button>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.png" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">About</h5>

            <p class="light">Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Microsoft Windows, PlayStation 4, and Xbox One..</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Gameplay</h5>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7eTBPQZo-lg" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

        
      </div>

    </div>
  </div>


  <div id="flex1" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div  class="container">
        <div class="row center">
          <button  class="button"><a href="flexbox2.html"><span>Sjá Nánar</span></a></button>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <h5 class="center">About</h5>

            <p class="light">
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
        <h1>Myndir</h1>
        <a href="index.php?id=2&cookie=0"><img width="200px" src="http://plusquotes.com/images/quotes-img/cool-pictures-24.jpg"></a>
        <a href="index.php?id=2&cookie=1"><img width="200px" src="http://www.planwallpaper.com/static/images/7004205-cool-black-backgrounds-27640_lhK8IKI.jpg"></a>
        <a href="index.php?id=2&cookie=2"><img width="200px" src="http://www.planwallpaper.com/static/images/Cool-logo-live-hd-wallpapers-2-1-s-307x512.jpg"></a>
        <a href="index.php?id=2&cookie=3"><img width="200px" src="http://www.planwallpaper.com/static/images/Cool_background-2.jpg"></a>
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

            /*
            RECENTLY VIEWED Kóði ENDAR

            */
        ?>
    </div>
</div></p>
          </div>
        </div>

            <h5 class="center">Gameplay</h5>
            <iframe class="iframet" width="970" height="315" src="https://www.youtube.com/embed/SCenq-HHDMc" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>


    </div>
  </div>


  <div id="Layout" class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <button   class="button"><a href="./flexboxstore.php"><span>Store</span></a></button>
          <button   class="button"><a href="./login.php"><span>Store Admin</span></a></button>
          <h5>


          </h5>
          
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Contact us</h5>
          <form class="contact_form" action="#" method="post" name="contact_form">     
     <aside class="div3">

        
             
             
        
            <label>
            Username
            <br>
            <input type="text" name:"name" placeholder="Elas" required title="Það vantar nafn" />
            </label>
            <br>

            <label>
            Password
            <br>
            <input type="password" name:"password" placeholder="12345" required title="Password Required"/>
            </label>
            <br>
        
            <label>
            Email
            <br>
            <input type="email" name="email" placeholder="example@example.com" required/>
            </label>
            Message:<br> 
  <textarea rows="4" cols="30" name="textalysing"></textarea>
             <br>               
            <button class="submit" type="submit">Submit Form</button>
            <br>
            <br>
</aside>



        </div>
        
        <div class="col l3 s12">
          <h5 class="white-text">Find us here</h5>
          <ul><script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://www.buyinstagramfollowersreviews.net/">buyinstagramfollowersreviews.net</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(64.14210380255781,-21.92951728829961),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(64.14210380255781,-21.92951728829961)});infowindow = new google.maps.InfoWindow({content:'<strong>Reykjavik</strong><br>Hallgrímstorg 101, Reykjavík, Iceland<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript" href="scroll.js"></script>
  </body>
</html>
