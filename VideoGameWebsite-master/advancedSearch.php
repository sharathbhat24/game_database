<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Advanced Search</title>
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
						echo '<li id=><a href="logout.php">Logout</a></li>';
					} else {
						echo '<li id=><a href="login.php">Login</a></li>';
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
    
        <br/></div>
    <div class="sidebar3">
    	<div class="titleBlock">Advanced Search</div>
        <p>
        	<form method="get" action="advancedSearchResults.php">
		Enter your search terms here: <br/>
                <br/>
		Name of game: <input type="text" id="name" name="name" size="40"/>
                <br/><br/>
		ESRB Rating: 
			<select id="esrb" name="esrb">
				<option value="none">Select...</option>
				<option value="Early Childhood">EC - Early Childhood</option>
				<option value="Everyone 10+">E10 - Everyone 10+</option>
				<option value="Teen">T - Teen</option>
				<option value="Mature">M - Mature</option>
				<option value="Adults Only">A - Adults Only</option>
				<option value="Rating Pending">RP - Rating Pending</option>
			</select><br/>
                <br/>
		Genre: <input type="text" id="genre" name="genre" size="40"/><br/>
                <br/>
		Release Date:
			<select id="month" name="month">
				<option value="m">Month</option>
				<option value="1">January</option>
				<option value="2">February</option>
				<option value="3">March</option>
				<option value="4">April</option>
				<option value="5">May</option>
				<option value="6">June</option>
				<option value="7">July</option>
				<option value="8">August</option>
				<option value="9">September</option>
				<option value="10">October</option>
				<option value="11">November</option>
				<option value="12">December</option>
			</select>
			<select id="day" name="day">
				<option value="d">Day</option>
				<?php
					for($i=1; $i<32; $i++){
						echo "<option value=\"$i\">$i</option>\n";
					}
				?>
			</select>
			<select id="year" name="year">
				<option value="y">Year</option>
				<?php
					for($i=2050; $i>1949; $i--){
						echo "<option value=\"$i\">$i</option>\n";
					}
				?>
			</select><br/>
                <br/>
			System: 
			<select id="system" name="system">
				<option value="sys">System</option>
				<?php
					include "dbconnect.php";
					$query = "SELECT DISTINCT system FROM systems ORDER BY system;";
					$result = mysqli_query($db, $query)
						or die("Error Querying Database");
					while($row = mysqli_fetch_array($result)) {
						echo '<option value="' . $row['system'] . '">' . $row['system'] . '</option>\n';
					}
				?>
			</select><br/>
                <br/>
		<input type="submit" value="Search" name="submit" /><br/>
                <br/>
	</form>
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