<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<link href="styles.css" rel="stylesheet" type="text/css" />
    <style>
    
                     body {
  background-image: url('pubg.jpg');
                   background-attachment: fixed;
  background-size: cover;
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
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li><a href="mypage.php?id=' . $_SESSION['uid'] . '">My Page</a></li>';
						echo '<li id="active"><a href="logout.php" id="current">Logout</a></li>';
					} else {
						echo '<li id="active"><a href="login.php" id="current">Login</a></li>';
					}
				?>
                
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li><a href="search.php">Search</a></li>
            </ul>
        </div>
        <!-- end #navcontainer -->
    </div>
    <!-- end #header -->
    <div><br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
       
   
        <br/></div>
    <div class="sidebar3">
    	<div class="titleBlock">Let's Begin Reviewing</div>
			<h1>Thank you for coming to VideoGameWebsite</h1>
			<p>
        	For our returning members:
			<br /><br />
			Thank you for returning to our website. We appreciate your loyalty to our video game review website over other sites. Please login and read or write some reviews
			<br /><br />
			For our first time members:
			<br /><br />
			WELCOME TO VIDEOGAMEWEBSITE! Here we try and provide a simple way of reading reviews and writing reviews for videogames. Please join us in the quest to make picking video games as easy as possible.
			</p>
		
			<h1>Login</h1>
			<form method="post" action="gologin.php">
				<label for="userName">Username:</label> &nbsp; &nbsp;
				<input type="text" id="userName" name="userName" size="40" padding="4px" value=""/>
                <br/><br/>
				<label for="password">Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="password" id="password" name="pw" size="40" padding="4px"/>
                 <br/><br/><br/>
				<input type="submit" value="Login" name="submit" />
			</form>
			<h1>Don't have an account?</h1>
			<a href="createaccount.php">Click here</a> 
	</div>    
	<br class="clearfloat" />
</div>
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