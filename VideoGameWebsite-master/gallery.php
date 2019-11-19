<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>gallery</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
    
<style>
                 body {
  background-image: url('pubg.jpg');
                   background-attachment: fixed;
  background-size: cover;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</head>

    

<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="logoContainer">
            <div class="logo">Video Game <span>Reviews</span></div>
            <div class="author"><a href="http://www.freewebsite-template.com"></a></div>
        </div>
        <!-- begin #navcontainer -->
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="index.php">Home</a></li>
			
               
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    </div>
    <br/>
    <br/>
    <br/>
    <h1 style="font-size:40px;">GALLERY</h1>
    <br/>
    <br/>
    <br/>
    <br/>
    
    <div class="gallery">
  <a target="_blank" href="img1.jpg">
    <img src="img1.jpg" alt="Battlefield 3" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img2.jpg">
    <img src="img2.jpg" alt="Diablo" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img3.jpg">
    <img src="img3.jpg" alt="Dominion" width="600" height="400">
  </a>
  
</div>

<div class="gallery">
  <a target="_blank" href="img4.jpg">
    <img src="img4.jpg" alt="unreal tournment" width="600" height="400">
  </a>
  
</div>

   <div class="gallery">
  <a target="_blank" href="img5.jpg">
    <img src="img5.jpg" alt="gamer" width="600" height="400">
  </a>
  
</div>
 
   
    

    
</body>
</html>