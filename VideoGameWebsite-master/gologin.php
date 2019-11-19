<?php session_start(); ?>
<!DOCTYPE html>


<html>

<head>
<?php
	include "dbconnect.php";
	if($_POST['userName'] != "" && $_POST['pw'] != ""){
		$username = $_POST['userName'];
		$password = sha1($_POST['pw']);
		$query = "SELECT id FROM gamereviews.users WHERE userName = '$username' AND password = '$password';";
		$result = mysqli_query($db, $query)
			or die("Error Querying Database");
			$row = mysqli_fetch_array($result);
		if(count($row) != 0){
			$_SESSION['uid'] = $row['id'];
			$_SESSION['loggedin'] = true;
		}
		
	}
	
	
	
?>
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
    	<div class="titleBlock">Login</div>
		<p>
		    <?php
				if($_POST['userName'] != "" && $_POST['pw'] != ""){
					if($_SESSION['loggedin'] == true){
						echo "Login successful! Click <a href='index.php'>here</a> to go to the home page!";
					} else {
						echo '<span class="errorMessage">Incorrect username/password combination.</span>
						<form method="post" action="gologin.php">
							<label for="userName">Username:</label>
							<input type="text" id="userName" name="userName" size="40" /><br/>
							<label for="password">Password:</label>
							<input type="password" id="password" name="pw" size="40" />
							<input type="submit" value="Login" name="submit" />
						</form>  ';
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