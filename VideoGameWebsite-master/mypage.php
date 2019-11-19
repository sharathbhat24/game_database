<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>
	<?php
		include "dbconnect.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM gamereviews.users WHERE id= $id";
		$result = mysqli_query($db, $query)
			or die("Error Querying Database");
		$row = mysqli_fetch_array($result);
		echo $row['userName'];
		if(isset($_SESSION['uid']) && $_SESSION['uid'] == $id){
			$isthisuser = true;
		} else {
			$isthisuser = false;
		}
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
                <li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo '<li id="active"><a href="mypage.php?id=' . $_SESSION['uid'] . '" id="current">My Page</a></li>';
						echo '<li><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li><a href="login.php">Login</a></li>';
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
		
		
	</div>
    <div class="sidebar2">
    	<div class="titleBlock">
			<?php
				echo $row['userName'] . "'s Page";
			?>
		</div>        
			<p>        	
				<h1>Name:</h1>
				<span class="dontbeallthewayontheright"><font size="3">
				<?php echo $row['name']; ?></font></span> 
				<br/><br />
				<h1>My favorite console:</h1><font size="2">
				<span class="dontbeallthewayontheright">
				<?php echo $row['favConsole']; ?></font></span> 
				<br/><br/>
				<h1>About me:</h1><font size="2">
				<span class="dontbeallthewayontheright">
				<?php
					echo $row['aboutMe'];
					echo "<br/>";
					echo "<br/>";
					echo "<hr>";
					echo"</font>";
					if($isthisuser){
						echo "<br/><a href='changeinfo.php' class='dontbeallthewayontheright'>Click here</a> to change the above information.";
					}
					echo "<br/>";
					echo "<br/>";
					echo "<hr>";
				?></span> 
				<br/>
			</p>
			<p>
				<h1>My reviews:</h1>
				<?php
					$query = "SELECT * FROM gamereviews.reviews WHERE userID = " . $_GET['id'] . " ORDER BY timeReviewed DESC;";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database 2");
					echo '<div class="reviewlist" id="reviewlist">';
				
					while($row = mysqli_fetch_array($result)) {
						$gid = $row['gameID'];
						$review = $row['userReview'];
						
						$query3 = "SELECT * FROM gamereviews.videogames WHERE id = $gid";
						$result3 = mysqli_query($db, $query3)
							or die("Error Querying Database 3");
						$row3 = mysqli_fetch_array($result3);
						$game = $row3['gamename'];
						
						echo '<h1><a href="showGame.php?id=' . $gid . '"> ' . $game . ':</a><font size="2" color = "black">' . $row['timeReviewed'] . '</h1>';
						echo '<p>  Scored: ' . $row['rating'] . '<br/> Replayability: ' . $row['replayability'] . ' <br/> </p>';
						echo '<br />';
						echo '<span class="dontbeallthewayontheright">' . $review . "</span><br/><br/>";
						echo '<hr>';
						echo '<br/>';
					}
					echo '</div>';
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