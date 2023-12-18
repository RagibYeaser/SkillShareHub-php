<?php
session_start();
?>


<!-- navigation features -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=no"
    />
    <link
      rel="stylesheet"
       <link href=
"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"
              rel="stylesheet" />
    <style type="text/css">
      body {
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: grayscale;
      }

      .ui.center.aligned.container {
        margin-top: 4em;
      }

      p.lead {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1.3em;
        color: #333333;
        line-height: 1.4;
        font-weight: 300;
      }

      .ui.huge.header {
        font-size: 36px;
      }


      .ui.inverted.menu {
        border-radius: 0;
        flex-wrap: wrap;
        border: none;
        padding-left: 0;
        padding-right: 0;
      }

      .ui.mobile.only.grid .ui.menu.ui.vertical.menu {
        display: none;
      }

      .ui.inverted.menu.item {
        color: rgb(157, 157, 157);
        font-size: 16px;
      }
      

      .ui.inverted.menu .active.item {
        background-color:off white ;
      }
    </style>
    <!-- LOGO -->
  </head>
  <div class="ui tall stacked segment">
  <div class="ui tall stacked segment">
    
  <a href="home.php">
    

        <img alt="Tution World" src="tutionWorldLogo.JPG"
         width="200px" height="50px">
         
         
      </a>
      
<!-- navigation -->
  <body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui borderless fluid small inverted menu">
        <div class="ui container">
          <a class="item" href="home.php">HOME</a>
          <a class="item" href="skill_exchange.php">  Skill Exchange</a>
          <a class="item" href="location.php">Nearest Location</a>
          <a class="active item" href="all_users.php">ALL Users</a>
          <a class="item" href="contact_us.php">Contact Us</a>
      


          
          
          <!-- profile -->
        <!-- <a class="right menu"></a>
      
        <a class="ui huge green button"href="registration.php">Quick Registration</a> -->
      </div>
    </div>
    </div>


   
   

          <!-- php code  -->

<h1><center>All Users List</center></h1>
<h1><br></h1>
        
          <?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM user" )
		or die("Can not execute query");

		echo"<table class='ui red celled padded table' style='margin: 0 auto;'> \n";
	echo"<th>Name</th> <th>Email</th> <th>Phone Number</th> <th>Location	</th>  <th>Skill</th>  \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
			echo "<td> $name</td>";
			echo "<td> $email</td>";
			echo "<td> $phone</td>";
			echo "<td> $location	</td>";
      echo "<td> $skill</td>";
			
			
		
		echo "</tr> \n";
	}

	echo "</table><br>";
	

?>


         


 



    <!-- footer -->
  <div class="ui inverted vertical footer segment">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="three wide column">
          <h4 class="ui inverted header">Important Links</h4>
          <div class="ui inverted link list">
            <a href="skill_exchange.php" class="item">SKILL EXCHANGE</a>
            <a href="location.php" class="item">location</a>
            <a href="all_users.php" class="item">ALL USERS</a>
      
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">Follow Us</h4>
          <div class="ui inverted link list">
          <button class="ui circular facebook icon button">
          <a href="https://www.facebook.com/" class="item"> <i class="facebook icon"></i> </a> 
</button>
<button class="ui circular twitter icon button">
<a href="https://www.twitter.com/" class="item">  <i class="twitter icon"></i></a>
</button>
<button class="ui circular linkedin icon button">
<a href="https://www.linkedin.com/" class="item">  <i class="linkedin icon"></i> </a> 
</button>
<button class="ui circular google plus icon button">
<a href="https://www.googleplus.com/" class="item"> <i class="google plus icon"></i> </a> 
</button>
          </div>
        </div>
        
        <div class="seven wide column">
          <h4 class="ui inverted header">Contact Us</h4>
          <p> <i class="ui inverted header">Hotline: +880 1716337123</i></p>
          <p>Email: info@skillsharehub.com</p>
          <p> Address: Road-12,Ave-02,Mirpur DOHS</p>
        </div> <div class="seven wide column">
          <h4 class="ui inverted header"> ©2023 SkillShareHUb</h4>
          <p>All Rights Reserved</p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>

    
    
  </body>
</html>
