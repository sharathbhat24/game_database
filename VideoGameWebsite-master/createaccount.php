<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Create an Account</title>
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
       
        <br/></div>
    <div class="sidebar3">
    	<div class="titleBlock">Create an Account!</div>        
			<p>        	
				<?php
					if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
						echo "You can't create an account if you're signed in, silly! :P";
					} else {
						echo "<form method='post' action='accountCreated.php'>
								Please enter your name: &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' id='name' name='name' size='40'/>
                                <br/><br/>
								Please choose a username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' id='username' name='username' size='40'/>
                                <br/><br/>
								Please enter a password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' id='pw1' name='pw1' size='40' />
                                <br/><br/>
								Please re-enter your password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' id='pw2' name='pw2' size='40' />
                                <br/><br/>
								Please select your favorite console:<br/><br/> ";
						echo '<select id="system" name="system">
								<option value="sys">System</option>';
									include "dbconnect.php";
									$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
									$result = mysqli_query($db, $query)
										or die("Error Querying Database");
									while($row = mysqli_fetch_array($result)) {
										echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
									}
						echo '</select><br/>';
                        echo'<br/>';
								
						echo "<input type='submit' value='Create my account!' name='submit' />
								</form>";
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