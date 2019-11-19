<!DOCTYPE html>
<html>

<head>
<?php session_start(); ?>
	<title>
	<?php
	include "dbconnect.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM videogames WHERE id= $id";
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		$row = mysqli_fetch_array($result);
		echo $row['gamename'];
	?>
	</title>
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
                <li id=><a href="index.php">Home</a></li>
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
    <div class="sidebar1">
    	<div class="titleBlock">Game Info</div>
        <p>
        <?php
			$game = $row['gamename'];
			$rating = $row['ESRBrating'];
			$genre = $row['genre'];
			$date = $row['releasedate'];
			$score = $row['score'];
			$replayability = $row['replayability'];
			
			echo "<h1>$game</h1>";
			echo '<div id="gamelist">';
			
			echo '<div class="dontbeallthewayontheright">';
			if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
					
					echo "<form method='post' action='updatedpic.php'> Update game picture: <input type='text' id='picturelink' name='picturelink' size='22' value='" . $row['picturelink'] . "'/><br/>
					<input type='submit' value='Update game picture' class='dontbeallthewayontheright' />
					
					</form>";
					
			}else{
			}
			echo "<br/>";
			echo "ESRB rating: $rating <br/>";
			echo "Genre: $genre <br/>";
			echo "Release date: $date <br/>";
			echo "Score: $score <br/>";
			echo "Systems:<br/>";
			echo "<ul>";
			$query = "SELECT system FROM gamereviews.systems WHERE id=$id ORDER BY system;";
			$result = mysqli_query($db, $query)
					or die("Error Querying Database");
			while($row = mysqli_fetch_array($result)) {
				echo '- '.$row['system']."<br/>";
			}
			echo '</div></div>';
		
		?>
        </p>
    </div>
    <div class="sidebar2">
    	<div class="titleBlock">Reviews</div>
        <?php
			include "dbconnect.php";
			$query = 'SELECT userReview, userID, rating, replayability, timeReviewed FROM gamereviews.reviews WHERE gameID = ' . $_GET['id'] . ' ORDER BY timeReviewed DESC;';
			//echo $query;
		    $result = mysqli_query($db, $query)
   			   or die("Error Querying Database");
			echo '<div class="dontbeallthewayontheright" id="gamelist">';
				
			while($row = mysqli_fetch_array($result)) {
				$review = $row['userReview'];
				$uid = $row['userID'];
				$query2 = "SELECT userName from gamereviews.users WHERE id = $uid";
				$result2 = mysqli_query($db, $query2)
					or die("Error Querying username");
				$row2 = mysqli_fetch_array($result2);
				echo '<h1><a href="myPage.php?id=' . $uid . '">' . $row2['userName'] . '</a><font size="2" color = "maroon">' . $row['timeReviewed'] . '</font></h1>';
				echo '<p> Scored: ' . $row['rating'] . '<br/> Replayability: ' . $row['replayability'] . ' <br/> </p>';
				echo "<p>" . $review . " </p></br>";
				echo "<hr>";
				echo "<br/>";
			}
			echo '</div>';
		?>
		 <form method="post" action="insertReview.php?id=<?php echo $_GET['id'];?>">
			<span class="dontbeallthewayontheright">Enter your review of the game here: </span><br/>
			<textarea rows='10' cols='30' name="review" class="dontbeallthewayontheright"></textarea>	<br />	
			<span class="dontbeallthewayontheright">Choose your rating for this game: 
			<select name="rating" id="rating">
				<option value=0>-</option>
				<option value=1>1</option>
				<option value=2>2</option>
				<option value=3>3</option>
				<option value=4>4</option>
				<option value=5>5</option>
				<option value=6>6</option>
				<option value=7>7</option>
				<option value=8>8</option>
				<option value=9>9</option>
				<option value=10>10</option>
			</select></span><br/>
			
			<span class="dontbeallthewayontheright">Choose your replayability value for this game:
			<select name="replayability" id="replayability">
				<option value=0>-</option>
				<option value=1>1</option>
				<option value=2>2</option>
				<option value=3>3</option>
				<option value=4>4</option>
				<option value=5>5</option>
				<option value=6>6</option>
				<option value=7>7</option>
				<option value=8>8</option>
				<option value=9>9</option>
				<option value=10>10</option>
			</select></span><br/>
			
			<?php
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
					echo ' <input type="submit" value="Review" class="dontbeallthewayontheright"/> ' ;
				} else {
					echo '<div class=errorMessage> Please log in before reviewing</div>';
				}
			?>
			
		
		</form>
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