<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Video Game Reviews</title>
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
                <li id="active"><a href="memberlist.php" id="current">Member List</a></li>
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
    	<div class="titleBlock">Check out the other members!</div>
			<h1>Make friends, make enemies. We don't care just have fun!</h1>
			<p>
				<?php
					include "dbconnect.php";
					$query = 'SELECT u1.userName, u2.name, u2.id FROM users u1 INNER JOIN users u2 ON u1.id = u2.id ORDER BY u1.userName ASC';
					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						$user = $row['userName'];
						$id = $row['id'];
						$name = $row['name'];
						echo 'Username:<a href="mypage.php?id=' . $id . '">&nbsp' . $user . '</a> &nbsp Name: ' . $name . '</a><br/>';
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
