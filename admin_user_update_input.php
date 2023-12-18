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

          <p> 



          <!-- php code -->


    <!-- question & answer section -->
    <div class="ui vertical stripe quote segment">
    <div class="ui equal width stackable internally celled grid">
      <div class="center aligned row">
       
        <div class="column">
         
        


        <?php
	$id=$_GET["id"];
	$name=$_GET["name"];
	$gender=$_GET["gender"];
	$phone_no=$_GET["phone_no"];
	$email=$_GET["email"];
	$present_insti=$_GET["present_insti"];
	$medium=$_GET["medium"];
	$class=$_GET["class"];
	$present_district=$_GET["present_district"];
	$area=$_GET["area"];
	$join_date=$_GET["join_date"];

?>



<h1>Update Record</h1>



<form class="ui centered form" method=get action=admin_student_update_result.php>


	<input type=hidden name=id value='<?php echo $id; ?>'> <br>

<p>
    Name: <input type=text Name=name value='<?php echo $name; ?>'></p><br>
	

	<p>

	Gender: <input type=text Name=gender value='<?php echo $gender; ?>'></p><br>

	<p>
	
	Phone NUM: <input type=text Name=phone_no value='<?php echo $phone_no; ?>'></p><br>

	<p>

	Email: <input type=text Name=email value='<?php echo $email; ?>'></p><br>

	<p>

	Present Institute: <input type=text Name=present_insti value='<?php echo $present_insti; ?>'></p><br>

	<p>

	Medium: <input type=text Name=medium value='<?php echo $medium; ?>'></p><br>

	<p>

	Class: <input type=text Name=class value='<?php echo $class; ?>'></p><br>

	<p>

	Present District: <input type=text Name=present_district value='<?php echo $present_district; ?>'></p><br>

	<p>
	Area: <input type=text Name=area value='<?php echo $area; ?>'></p><br>
	<p>
	<!-- Join Date: <input type=text Name=join_date value='<?php echo $join_date; ?>'></p> -->

<p>

	<input type=submit value=Update>

</form>







        </div>
      </div>
    </div>
  </div>


    
    
  </body>
</html>
