<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Add a Game</title>
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
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
					}
				?>
                
                <li id="active"><a href="reviewlink.php" id="current">Reviews</a></li>
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
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/></div>
    <div class="sidebar3">
    	<div class="titleBlock">Add a Game</div>        
			<p>
				<?php
				include "dbconnect.php";
				//echo $_POST["name"];
				if($_POST["name"] != "" && $_POST["esrb"] != "none" && $_POST["genre"] != "" && $_POST["month"] != "m" && $_POST["day"] != "d" && $_POST["year"] != "y" && $_POST["piclink"] != "" && $_POST["system"] != "sys"){
					$name = $_POST["name"];
					$esrb = $_POST["esrb"];
					$genre = $_POST["genre"];
					$month = $_POST["month"];
					$day = $_POST["day"];
					$year = $_POST["year"];
					$piclink = $_POST["piclink"];
					$system = $_POST["system"];
					
					//echo $year/4;
					if((($month == 9 || $month == 4 || $month == 6 || $month == 11) && $day > 30) || ($month == 2 && (($year % 4 != 0 && $day > 28) || $day > 29))){
						echo "Ha, ha. Very funny. Please enter a valid date.";
					} else {
						//at this point, everything has been filled out, and the date given is a valid date.
						$query = 'INSERT INTO gamereviews.videogames (id, gamename, ESRBrating, genre, releasedate, score, replayability, AdminReview, picturelink) VALUES (NULL, "'.$name.'", "'.$esrb.'", "'.$genre.'", "'.$year.'-'.$month.'-'.$day.'", NULL, NULL, NULL, "'.$piclink.'");';
						mysqli_query($db, $query)
								or die("Error Querying Database: add game");
						$query = 'SELECT id FROM gamereviews.videogames WHERE gamename = "'.$name.'" AND ESRBRating = "'.$esrb.'" AND releasedate = "'.$year.'-'.$month.'-'.$day.'";';
						//echo $query;
						$result = mysqli_query($db, $query)
								or die("Error Querying Database: find game");
						$row = mysqli_fetch_array($result);
						$id = $row['id'];
						//echo " The id is $id!";
						echo 'Click <a href="showGame.php?id=' . $id . '">here</a> to go to the page you just created!';
						$query = "INSERT INTO gamereviews.systems (id, system) VALUES($id, '$system');";
						//echo " $query";
						mysqli_query($db, $query)
								or die("Error Querying Database: add system");
						
					}
					
				} else {
					echo "Please fill out all required fields.";
				}

				?>
			</p>    
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