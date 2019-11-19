<?php session_start(); ?>
<!DOCTYPE html >
<html>

<head>
	<title>
	<?php
		include "dbconnect.php";
		if(isset($_SESSION['uid']) && $_SESSION['loggedin'] == true){
			$id = $_SESSION['uid'];
			$query = "SELECT * FROM gamereviews.users WHERE id= $id";
			$result = mysqli_query($db, $query)
				or die("Error Querying Database");
			$row = mysqli_fetch_array($result);
			echo $row['userName'];
		} else {
			echo "Please log in first.";
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
    <div class="sidebar3">
    	<div class="titleBlock">Update my Info</div>        
			<p>        	
				<?php
					if($_POST['system'] != "sys" && isset($id)){
						$console = $_POST['system'];
						$query = "UPDATE gamereviews.users SET favConsole='$console' WHERE id='$id';";
						mysqli_query($db, $query)
						or die("Error Querying Database");
						echo "<br/>You changed your favorite system!";
						}
					if($_POST['name'] != "" && isset($id)) {
						$name = $_POST['name'];
						$query = "UPDATE gamereviews.users SET name='$name' WHERE id='$id';";
						mysqli_query($db, $query)
						or die("Error Querying Database");
						echo "<br/>You changed your name!";
						}
					if($_POST['aboutme'] != "" && isset($id)) {
						$aboutme = mysqli_real_escape_string($db, $_POST['aboutme']);
						$query = "UPDATE gamereviews.users SET aboutMe='$aboutme' WHERE id='$id';";
						mysqli_query($db, $query)
						or die("Error Querying Database");
						echo "<br/>You changed your about me!";
						}
					if($_POST['piclink'] != "" && isset($id)) {
						$piclink = mysqli_real_escape_string($db, $_POST['piclink']);
						$query = "UPDATE gamereviews.users SET piclink='$piclink' WHERE id='$id';";
						mysqli_query($db, $query)
						or die("Error Querying Database");
						echo "<br/>You changed your profile picture!";
					} else {
						if(isset($id)){
						} else {
							echo "Please log in first.";
							}
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