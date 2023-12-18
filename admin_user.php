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
          <a class="item" href="admin.php">DASHBOARD</a>
          <a class="active item" href="admin_student.php">STUDENTS</a>
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
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT* FROM user")
		or die("Can not execute query");

        echo"<table class='ui unstackable celled collapsing table' style='margin: 0 auto;'> \n";
	echo " <th>Name</th> <th>Gender</th> <th>Phone_no</th> <th>Email</th> <th>Present Institute</th> <th>Medium</th> <th>Class</th> <th>Present District</th> <th>Area</th> <th>Join ate</th>  \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
			echo "<td> $name</td>";
			echo "<td> $gender</td>";
			echo "<td> $phone_no</td>";
			echo "<td> $email</td>";
			echo "<td> $present_insti</td>";
			echo "<td> $medium</td>";
			echo "<td> $class</td>";
			echo "<td> $present_district</td>";
			echo "<td> $area</td>";
			echo "<td> $join_date</td>";
           
			

			echo "<td> <a href = 'admin_student_delete.php?id=$id'> <button class='negative ui button'>Delete </a> </td>";
			echo "<td> <a href = 'admin_student_update_input.php?id=$id&name=$name&gender=$gender&phone_no=$phone_no&email=$email&present_insti=$present_insti&medium=$medium&class=$class&present_district=$present_district&area=$area&join_date=$join_date'><button class='positive ui button'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=admin_student_create_input.php><button class='#B5CFEC fluid ui button'>CREATE a new record</a>";
?>








        </div>
      </div>
    </div>
  </div>


    
    
  </body>
</html>
