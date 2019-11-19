<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Search Results</title>
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
                
                <li><a href="reviewlink.php">Reviews</a></li>
                <li><a href="memberlist.php">Member List</a></li>
				<li id="active"><a href="search.php" id="current">Search</a></li>
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
    	<div class="titleBlock">Search Results</div>
        <p>
        	
			<?php
				include "dbconnect.php";
				$query = "SELECT videogames.id,videogames.gamename from videogames";
				if($_GET['system'] != "sys"){
					$query = $query . " INNER JOIN systems ON videogames.id = systems.id";
				}
				if($_GET['name'] != ""){
					$name = mysqli_real_escape_string($db, $_GET['name']);
					$query = $query . " WHERE videogames.gamename LIKE '%$name%'";
				}
				if($_GET['esrb'] != "none"){
					if($_GET['name'] != ""){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$esrb = mysqli_real_escape_string($db, $_GET['esrb']);
					$query = $query . "videogames.ESRBrating='$esrb'";
				}
				if($_GET['genre'] != ""){
					if($_GET['name'] != "" || $_GET['esrb'] != "none"){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$genre = mysqli_real_escape_string($db, $_GET['genre']);
					$query = $query . "videogames.genre LIKE '%$genre%'";
				}
				if($_GET['month'] != "m" && $_GET['day'] != "d" && $_GET['year'] != "y"){
					if($_GET['name'] != "" || $_GET['esrb'] != "none" || $_GET['genre'] != ""){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$month = $_GET['month'];
					$day = $_GET['day'];
					$year = $_GET['year'];
					$query = $query . "videogames.releasedate = '$year-$month-$day'";
				}
				if($_GET['system'] != "sys"){
					if($_GET['name'] != "" || $_GET['esrb'] != "none" || $_GET['genre'] != "" &&
							$_GET['month'] != "m" && $_GET['day'] != "d" && $_GET['year'] != "y"){
						$query = $query . " AND ";
					} else {
						$query = $query . " WHERE ";
					}
					$system = $_GET['system'];
					$query = $query . "systems.system = '$system'";
				}
				$query = $query . ";";
				//echo $query;
				$result = mysqli_query($db, $query)
					or die("Error Querying Database");
				echo '<div class="gamelist" id="gamelist">';
				
				while($row = mysqli_fetch_array($result)) {
					$game = $row['gamename'];
					$id = $row['id'];
					echo '<br/>&nbsp&nbsp&nbsp&nbsp<a href="showGame.php?id=' . $id . '"> - ' . $game . '</a><br/>';
				}
				echo '</div>';
		
		
			?>
			<div>
				<br/><br/><hr>
				&nbsp&nbsp&nbsp Don't see the game you're looking for? 
				<a href="addGame.php">Create a page for it!</a>
			</div>
		</p>
	</div>
    <br class="clearfloat" />
</div>
<!-- end #container -->
<!-- begin #footer -->
    <div id="footer">
        <p>
         WEB TECHNOLOGY LAB PROJECT 2018
       SYED MALIK 4MH15CS101
       SANJANA S SWAMY 4MH15CS117
        </p>
    </div>
<!-- end #footer -->
	



</body>

</html>