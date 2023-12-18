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
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
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
        background-color: off-white;
      }
    </style>
    <!-- LOGO -->
  </head>
  <div class="ui tall stacked segment">
  <div class="ui tall stacked segment">
    
  <a href="admin.php">
    

        <img alt="Tution World" src="tutionWorldLogo.JPG"
         width="200px" height="50px">
         
         
      </a>
      
<!-- navigation -->
  <body id="root">
    <div class="ui tablet computer only padded grid">
      <div class="ui borderless fluid small inverted menu">
        <div class="ui container">
          <a class="active item" href="admin.php">DASHBOARD</a>
          <a class="item" href="admin_student.php">STUDENTS</a>
          <!-- <a class="item" href="admin_teacher.php">TEACHERS</a> -->
          <a class="item" href="admin_queries.php">QUERIES!</a>
          
            <!-- profile -->
        <a class="centered menu"></a>
      
      
      </div>
    </div>
    </div>
      <!-- background image -->
      
   


    <!--feature tutors-->

    <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
        <div class="column"><br>
         
      
          <p> 



          <!-- php code -->


    <!-- question & answer section -->
    <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
       
        <div class="column">



        <?php
	$name=$_GET["name"];
    $gender=$_GET["gender"];
	$phone_no=$_GET["phone_no"];
	$email=$_GET["email"];
    $present_insti=$_GET["present_insti"];
    $medium=$_GET["medium"];
	$class=$_GET["class"];
    $present_district =$_GET["present_district"];
	$area=$_GET["area"];
	// $join_date=$_GET["join_date"];
    

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO student VALUES ('','$name', '$gender', '$phone_no', '$email', '', '$present_insti','$medium','$class', '$present_district','$area','')")
		or die("Can not execute query");

	echo "<b>Record inserted:</b<br><br> name = $name <br> gender = $gender <br> phone_no = $phone_no <br> email = $email <br> present_insti  = $present_insti <br> medium = $medium <br> class = $class <br> present_district = $present_district <br>area = $area <br> <br>";

	echo "<p><a href=admin_student.php><button class='ui button'>READ all records</a>";
?>

        </div>
      </div>
    </div>
  </div>


    
    
  </body>
</html>
