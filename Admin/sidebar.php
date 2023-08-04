<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
      <link rel="stylesheet" href="style.css">

      <style type="text/css">
      .sidebar
{
	margin-top:0px;
	position: fixed;
	width:100%;
	height: 100%;
	background-color: #8D1381;  
}
.sidebar ul li a pre{
    
    text-decoration: none;
	color: white;
	font-size: 20px;
	padding:  30px;
	text-align: center;
  margin-top:-30px;
    
}
.sidebar ul li a pre:hover{
    color: yellow;
    font-size:x-large;
    cursor: pointer;
}

.sidebar ul{
    margin-top: 15%;
}
.toggle-btn
{
	position: absolute;
	left: 85%;
	top:1.3%;

}

.sidebar2
{
    margin-left: 20%;
    position: fixed;
    width:100%;
	height: 100%;
    background-color:#DA29CE ;
    transition: 0.5s; 
}
 .button-menu
 {

    margin-top: 0.7%;
    font-size: 0px;
    margin-left: 0.5%;
 }
</style>
</head>
<body>

<div id="sidebarID" class="sidebar">
 
  <nav>
    <ul style="list-style-type:none">
    
        <li><a href= "admin_mcpage.php" target="contentFrame"><pre>Viwe Medical  </pre></a></li>
        <li><a href="admin_resitPage.php" target="contentFrame"><pre>Viwe Resit</pre></a></li>
        <li><a href="admin_examEnteyPage.php" target="contentFrame"><pre>Viwe Exam Entry</pre></a></li>
        <li><a href="" target=""><pre>uplod Timetable</pre></a></li> 
        <li><a href="notification .php" target="contentFrame"><pre>Notice Board</pre></a></li><br>
        <li><a href="" target=""><pre>Result</pre></a></li> 
        <li><a href="forgetpass.php" target="contentFrame"><pre>User Account </pre></a></li> 
        <li><a href="AddUser.php" target="contentFrame"><pre>Add user</pre></a></li> 
    </ul> 
</nav>
</div>


<script src="EMS.js"></script>

</body>
</html>