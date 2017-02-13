<?php 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to srm learning center</title>
	<meta charset="utf-8">
	<meta lang="en">
	<meta name="viewport" content="width=device-width initial-scale-1">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
</head>
<body>
<nav class="nav-extended">
	<div class="nav-wrapper">
		<a href="#" class="brand-logo">SRM-ulc</a>
		<a href="#" data-activates="mobile-demo" class="button-collapse">
		<i class="material-icons">Menu</i>
		</a>
		<ul style="float:right;">
			<li><?php echo "Hi ,"; echo  $_SESSION['activeuser'];?></li>
			<li><a href="#">Courses registered</a></li>
			<li><a href="#">History</a></li>
			<li><a href="logoutulc.php">Logout</a> </li>
		</ul>
	</div>
	<div class="nav-content">
		<ul class="tabs tabs-transparent">
			<li class="tab"><a href="#home">Home</a></li>
			<li class="tab"><a href="#about">About ULC</a></li>
			<li class="tab"><a href="#activities">Activities</a></li>
			<li class="tab"><a href="#core">Core Members</a></li>
			<li class="tab"><a href="#events">Events</a></li>
		</ul>
	</div>

</nav>
<br>
<br>
<div id="home">
	<h3 class="center">
	<b style="color:green">Welcome to SRM University Learning Centre</b>
	 <nav>
    <div class="nav-wrapper">
      
        <a href="#!" class="breadcrumb">Home</a>
     
    </div>
  </nav>
  <center>
  	<div class="chip">
    <img src="https://image.freepik.com/free-icon/user-male-shape-in-a-circle-ios-7-interface-symbol_318-35357.jpg" alt="Contact Person">
    kumar saurav-developer
  </div>
  <div class="chip">
    <img src="https://image.freepik.com/free-icon/user-male-shape-in-a-circle-ios-7-interface-symbol_318-35357.jpg" alt="Contact Person">
    User2-developer
  </div>

  <br>
  <form action="#">
    <p class="range-field" style="width:50px;">
      <input type="range" id="test5" min="0" max="5" />
    </p>
  </form>
  </center>

  <div class="fixed-action-btn vertical">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>
        
	</h3>
	<div>
	<br>
		<h3 class="center">Vision</h3>
		<h5 class="bold italic">
		The SRM University Learning Centre (ULC), is a place where our University faculty, staff, students, and other members work in a collaborative environment to create rich, engaged learning and teaching experiences; conduct research in all aspects of education; increase student success, build vital partnerships for improved learning, and invites individuals to become members of an intellectually diverse, active learning community.
		</h5>
		<br>
		<br>
		<br>
		<h3 class="center">Mission</h3>
		<h5>
		To facilitate a productive educational environment in the Institute by motivating teachers and students towards an efficient and enjoyable educational interaction through exposure to research-based, scientifically-proven, and innovative teaching-learning methodologies, to promote high class research in education, to create and develop synergy between the teachers and students for a new and sustainable paradigm of higher technical education, with the ultimate aim of producing human resources of the highest professional and personal quality.
		</h5>
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="center">
 	 <button class="btn waves-effect waves-light" type="submit" name="action">E-Lab
    <i class="material-icons right">send</i>
  </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
 	 <button class="btn waves-effect waves-light" type="submit" name="action">E-Learn
    <i class="material-icons right">send</i>
  </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 	 <button class="btn waves-effect waves-light" type="submit" name="action">E-Think
    <i class="material-icons right">send</i>
  </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  
 	 <button class="btn waves-effect waves-light" type="submit" name="action">E-Verify
    <i class="material-icons right">send</i>
  </button>
  </div>
</div>
<div id="about">
		<h3 class="center">
	<b style="color:green">About SRM University Learning Centre</b>
	</h3>
	<div>
	<nav>
    <div class="nav-wrapper">
      
        <a href="#!" class="breadcrumb">Home</a>

        <a href="#!" class="breadcrumb">About</a>
     
    </div>
  </nav>

  
	<br>
		<h3 class="center">Center Goals</h3>
		<h5 class="bold italic">
		The SRM University Learning Centre (ULC) will:<br>

		a) Engage University faculty, staff, students, to work in a collaborative environment to create rich, engaged learning and teaching experiences;<br>
		b) Contribute to significant increases in student learning retention and graduation rates; and thus<br>
		c) Establish our University as a System leader in the areas of Educational Research.<br>
		</h5>
		<br>
		<br>
		<br>
		<h3 class="center">Mission</h3>
		<h5>
			The Center will be:<br>

		a) Integral to the academic mission of the university<br>
		b) Essential in offering stronger and more integrated learning support services to its faculty members and students <br>
		c) Led by experienced faculty, staff, and students <br>
		d) Charged to build the capacity of the university to integrate teaching, learning, with engagement through active-learning and related academic initiatives <br>
		e) Provided with curricular support for both traditional and distant learning courses and environments <br>
		f) Conducting research in education to support arts education, science education and engineering education <br>
		g) Positioning the institution as a leader in efforts to advance engaged teaching and learning.
		</h5>
		<br>
		<br>
		<div class="center">
 	 <button class="btn waves-effect waves-light" type="submit" onclick="location.href='srm_mindmap.jpg'">Mind-Map
    <i class="material-icons right">send</i>
  </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
	<br>
	<br>
	<br>
	<br>
	<br>
</div>
</div>
<div id="activities"><h3>Workshops and events</h3>
<br>
<br>
<br>
<br>
<nav>
    <div class="nav-wrapper">
      
        <a href="#!" class="breadcrumb">Home</a>

        <a href="#!" class="breadcrumb">About</a>
        <a href="#!" class="breadcrumb">Workshops and events</a>
     
    </div>
  </nav><p>events</p></div>
<div id="core">core
<br>
<br>
<br>
<br>
<nav>
    <div class="nav-wrapper">
      
        <a href="#!" class="breadcrumb">Home</a>

        <a href="#!" class="breadcrumb">About</a>
        <a href="#!" class="breadcrumb">workshop and events</a>
        <a href="#!" class="breadcrumb">core</a>
     
    </div>
  </nav>
  <br><br>
   <ul class="collection">
   <form action="#">
    <p class="range-field" style="width:50px;">
      <input type="range" id="test5" min="0" max="5" />
    </p>
  </form>
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
          </div>
<div id="events">tes
<nav>
    <div class="nav-wrapper">
      
        <a href="#!" class="breadcrumb">Home</a>

        <a href="#!" class="breadcrumb">About</a>
        <a href="#!" class="breadcrumb">workshop and events</a>
         <a href="#!" class="breadcrumb">core</a>
     
    </div>
  </nav></div>

</body>
</html>