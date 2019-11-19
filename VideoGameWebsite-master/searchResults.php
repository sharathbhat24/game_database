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
		if(isset($_GET['searchterm'])){
			$searchTerm = mysqli_real_escape_string($db, $_GET['searchterm']);
			$query = "SELECT * FROM videogames INNER JOIN systems ON videogames.id = systems.id WHERE gamename LIKE '%$searchTerm%'";
			//$query = "SELECT * FROM videogames WHERE videogames.id IN (SELECT systems.id FROM systems WHERE videogames.gamename LIKE '%$searchTerm%')";
			$result = mysqli_query($db, $query)
				or die("Error Querying Database");
			echo '<div id="gamelist">';
			while($row = mysqli_fetch_array($result)) {
				if(isset($id) && $id == $row['id']){
					$system = $row['system'];
					echo ", " . $system;
				} else {
					$game = $row['gamename'];
					$id = $row['id'];
					$system = $row['system'];
					echo '<br/><br/> &nbsp&nbsp&nbsp&nbsp<a href="showGame.php?id=' . $id . '"> - ' . $game . '</a>' . '&nbsp: &nbsp' . $system;
				}
			}
			echo '</div>';
		}
		
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