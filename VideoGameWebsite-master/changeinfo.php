<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Update my Info</title>
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
				if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = true){
					include "dbconnect.php";
					$id = $_SESSION['uid'];
					$query = "SELECT * FROM gamereviews.users WHERE id= $id";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					$row = mysqli_fetch_array($result);
					$username = $row['userName'];
					$uid = $row['id'];
					$name = $row['name'];
					$console = $row['favConsole'];
					$aboutme = $row['aboutMe'];
					echo "<form method='post' action='gochangeinfo.php'>
						Name: <input type='text' id='name' name='name' size='25' value='" . $name . "'/><br/>
						Favorite console: ";
					echo '<select id="system" name="system">
							<option value="sys">System</option>';
								$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
								$result = mysqli_query($db, $query)
									or die("Error Querying Database");
								while($row = mysqli_fetch_array($result)) {
									echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
								}
					echo '</select><br/>';
					echo "About me:<br/>
						<textarea rows='10' cols='30' id='aboutme' name='aboutme'>" . $aboutme . "</textarea><br/>
						
						<input type='submit' value='Update my information' name='submit' />
						</form>";
				} else {
					echo "You can only edit your information if you\'re logged in.";
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