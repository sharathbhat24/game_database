<?php session_start(); ?>
<!DOCTYPE html >
<html lang="en">
<head>
<title>VideoGame Reviews</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


           <style>
  /* Make the image fully responsive */
               body {
  background-image: url('pubg.jpg');
                   background-attachment: fixed;
  background-size: cover;
}
  .carousel-inner img {
      width: 30%;
      height: 30%;
  }
               h5{
                   color: darkred;
               }
  </style>
    
   </head>

 


<body>
  
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="logoContainer">
            <div class="logo">VIDEO GAME<span> Reviews</span></div>
            <div class="author"><a href="http://www.freewebsite-template.com"></a></div>
        </div>
           

        <!-- begin #navcontainer -->
        <div id="navcontainer">
            <ul id="navlist">
                <li id="active"><a href="index.php" id="current">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '">My Page</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
					}
				?>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="top5.php">Top 5 Games</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li><a href="search.php">Search</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                
                
            </ul>
        </div>
    
    </div>
   <style>

        .tb{
    margin:20px;
    padding-left:30px;
    padding-right:30px;
    }
    </style>
           
                 
    
    
    <br/>
    <br/>
    <br/>
    \<br/>
    
    <div id="demo" class="carousel slide" data-ride="carousel">
  

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>


  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="grandtheft.jpg" alt="Grand-Theft">
    </div>
    <div class="carousel-item">
      <img src="lastofus.jpg" alt="Last Of Us">
    </div>
    <div class="carousel-item">
      <img src="reddead.jpg" alt="Red Dead Redemption 2">
    </div>
      <div class="carousel-item">
      <img src="halo.jpg" alt="Halo">
    </div>
      <div class="carousel-item">
      <img src="starwars.jpg" alt="Star Wars">
    </div>
      <div class="carousel-item">
      <img src="witcher.jpg" alt="Witcher">
    </div>
      <div class="carousel-item">
      <img src="worldofwar.jpg" alt="World Of War">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

    
    </div>
        <!-- end #navcontainer -->
 
    <!-- end #header -->
    <div>
  <br/>
        <br/>
        <br/>
        
    </div>
    
   

             <div class="tb">
    	<div class="titleBlock">Welcome to Video Game Reviews!</div>
                 <h3 style="color:#ff0000">Tired of the press reviewing games and inflating scores? No more my friend. At Video Game Reviews, you make the review and share it with the community. Let your voice be heard.</h3>
        <h5>
        Here at Video Game Reviews you can look up reviews for virtually every game in existence! Share your opinion. 
        </h5>
        <br/>
		<br class="clearfloat" />
    </div>
       	
    <br/>
      
 

	
<!-- end #container -->
<!-- begin #footer -->
    <div id="footer">
        <p>
       WEB TECHNOLOGY LAB PROJECT 2019
       NIDA SUSAN A K 4VV16IS026
       SANJANA M S 4VV16IS041
       THANUSHREE C P 4VV17IS411
        MEGHANA B U 4VV16IS059
        </p>
    </div>
<!-- end #footer -->
    
</body>
    
</html>
