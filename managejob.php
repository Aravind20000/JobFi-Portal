<?php 

include 'config.php';
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JobFi</title>
  
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="managejob.css" rel="stylesheet">
   
</head>
	<header>
	<div class="logo">
	<img src="site-logo.png">
	</div>
   <div class="names">
   <?php echo "<h3>Welcome " . $_SESSION['username'] . "</h3><br>"; ?>
    </div>

		
    </header>


    <div class="container">
			
			<ul class="nav">
				<li>
					<a href="adminh.php">Home</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="logout.php">LOGOUT</a>
				</li>
			</ul>
		</div>


        <div class="testavail">  <h1 ><br>Available Jobs </h1></div><br><br>
        <h3><span style="color:white;position:absolute;left:3em;font-size: 25px;">Employer Name</span><span style="color:white;position:absolute;left:17em;em;font-size: 25px;" >Company Name</span>
        </span><span style="color:white;position:absolute;left:35em;em;font-size: 25px;" >Job Title</span></h3><br><br><br>

        <div class="cardbody">

        <form method="post" >
            <?php

                
            $sql = "SELECT * FROM jobs WHERE Status='Available'";
            $query= mysqli_query($conn,$sql);
            while ($row =mysqli_fetch_array($query)){
                
            ?>
            <form method="post">
            <div class="card">
          
            <input class="hid" type="hidden" name="username" value="<?php echo $row['username']?>">
            <li><span style="color:#0fd84c;font-size: 30px;"><?php echo $row['username'] ?></span><span style="position: absolute;left:13em;font-size: 35px;"><?php echo $row['Company_Name'];?></span> <span style="color:white;font-size: 35px;position:absolute;left:24.5em;"><?php echo $row['job_position'] ?></span>
		    </div>
            <br><br>
            </form>
           
           <?php
            }
            
            ?>

        </div>
       





</body>
<html></html>