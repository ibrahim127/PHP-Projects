<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<html>
<head>
<title>
POS
</title>
  <link rel="shortcut icon" href="main/images/pos.jpg">

  <link href="main/css/bootstrap.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="main/css/DT_bootstrap.css">
   <link rel="stylesheet" href="main/font/font.css">
  <link rel="stylesheet" href="main/css/font-awesome.min.css">
    <style type="text/css">
      body {
        padding-top: 160px;
        padding-bottom: 40px;
	background-image: url("main/images/pizza-wallpaper-background-1871-1968-hd-wallpapers.jpg");
    background-color: #cccccc;
	background-repeat: no-repeat;
    background-attachment: fixed;
			background-size: cover;

      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
  <link href="main/css/bootstrap-responsive.css" rel="stylesheet">

<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">


<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
	foreach($_SESSION['ERRMSG_ARR'] as $msg) {
		echo '<div style="color: red; text-align: center;">',$msg,'</div><br>'; 
	}
	unset($_SESSION['ERRMSG_ARR']);
}
?>    
       <center>
       <form action="login.php" method="post" style="box-shadow:1px 1px 20px  #f5f5f0;width:50%;"><br/><br/>
          <div class="form-group">
			<font style="font-family: 'AbandoN'; font-size: 250%;text-shadow:1px 1px 15px #000; color:black;">Best Bite</font>
			</div>
		    <br/><br/><br/>

		
     <div class="form-group">
		<span style="height:30px; width:25px;" class="form-control"><i class="icon-user icon-2x"></i></span>&nbsp<input style="height:40px;" type="text" name="username" Placeholder="Username" required/><br>
     </div>
     <div class="form-group">
	    <span style="height:30px; width:25px;" class="form-control"><i class="icon-lock icon-2x"></i></span>&nbsp<input type="password" style="height:40px;" name="password" Placeholder="Password" required/><br>
	 </div>
	 <br/>
	    <div class="form-group">
	

	 
		<button class="btn btn-info" type="submit"><i class="icon-signin icon-large"></i> Login</button>
        </div>
		<br/>
		 </form>
</div>
		 </center>
</div>
</div>
</div>
</body>
</html>