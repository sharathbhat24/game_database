<?php session_start(); ?>
<!DOCTYPE html >
<html>

<head>

<?php
	include "dbconnect.php";
	if(!isset($_SESSION['uid']) || !isset($_SESSION['loggedin'])){
		$_SESSION['uid'] = -1;
		$_SESSION['loggedin'] = false;
	}
	if($_POST['username'] != "" && $_POST['pw1'] != "" && $_POST['pw2'] != "" && $_POST['name'] != "" && $_POST['system'] != "sys"){
		$allfields = true;
		$username = $_POST['username'];
		$pw1 = sha1($_POST['pw1']);
		$pw2 = sha1($_POST['pw2']);
		$name = $_POST['name'];
		$console = $_POST['system'];
		if($pw1 == $pw2){
			$pwmatch = true;
			$query = "SELECT id FROM gamereviews.users WHERE userName = '$username';";
			$result = mysqli_query($db, $query)
				or die("Error Querying Database");
			$row = mysqli_fetch_array($result);
			if(count($row) == 0){
				$usernameavailable = true;
				$query = "INSERT INTO gamereviews.users (id, userName, password, name, favConsole) VALUES(NULL, '$username', '$pw1', '$name', '$console');";
				mysqli_query($db, $query)
					or die("Error Querying Database");
				$_SESSION['loggedin'] = true;
				$query = "SELECT id FROM gamereviews.users WHERE userName = '$username';";
				$result = mysqli_query($db, $query)
					or die("Error Querying Database");
				$row = mysqli_fetch_array($result);
				$uid = $row['id'];
				$_SESSION['uid'] = $uid;
			} else {
				$usernameavailable = false;
			}
		} else {
			$pwmatch = false;
		}
	} else {
		$allfields = false;
		if(isset($_POST['username'])){
			$username = $_POST['username'];
		}
		if(isset($_POST['name'])){
			$name = $_POST['name'];
		}
	}





?>
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
    <div ><br/>
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
    	<div class="titleBlock">Create an Account!</div>        
			<p>        	
				<?php
					if($_SESSION['loggedin'] == true){
						echo "Your account has successfully been created!";
					} else {
						if($allfields){
							if($pwmatch){
								if($usernameavailable){
							
								} else {
									echo '<div class="errorMessage">Sorry, that username has already been taken. Please choose another one.</div><br/>';
								}
							} else {
								echo '<div class="errorMessage">Your passwords don\'t match.</div><br/>';
							}
							
						} else {
							if($_SESSION['loggedin'] == true){
								echo "You can't create an account if you're already logged in, silly! :P";
							} else {
								echo '<div class="errorMessage">Please fill out all fields.</div><br/>';
							}
						}
						echo "<form method='post' action='accountCreated.php'>
								Please enter your name: <input type='text' id='name' name='name' size='40' value='";
								if(isset($name)){
									echo $name;
								}
								echo "'/><br/>
								Please choose a username: <input type='text' id='username' name='username' size='40' value='";
								if(isset($username)){
									echo $username;
								}
								echo "'/><br/>
								Please enter a password: <input type='password' id='pw1' name='pw1' size='40' /><br/>
								Please re-enter your password: <input type='password' id='pw2' name='pw2' size='40' /><br/>
								Please select your favorite console: ";
						echo '<select id="system" name="system">
								<option value="sys">System</option>';
									$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
									$result = mysqli_query($db, $query)
										or die("Error Querying Database");
									while($row = mysqli_fetch_array($result)) {
										echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
									}
						echo '</select><br/>';
								
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