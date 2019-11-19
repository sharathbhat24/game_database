<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Top5games</title>
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
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
   <div class="titleBlock">Highest Rated Games</div>
        <h1>Top 5 Games</h1>
        <p>
        	<?php
		include "dbconnect.php";
		$query = 'SELECT * FROM videogames ORDER BY score DESC';
		$result = mysqli_query($db, $query)
   			or die("Error Querying Database");
		
		echo '<div class="gamelist">';
		$i = 0;
		while($row = mysqli_fetch_array($result)) {
  			$game = $row['gamename'];
  			$id = $row['id'];
		  	if($i < 5) {
		  		echo '<a href="showGame.php?id=' . $id . '">- ' . $game . '</a><br/>';
				$i++;
	    	}
	    }
		echo '</div>';
		
	?>
			</p>
 

          
      

    
</body>
</html>