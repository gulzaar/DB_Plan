<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<title>Home</title>
</head>

<body>
	<div><?php include('includes/header.php');?></div>  <!-- header -->
    
<div id=nav> 
			<ul>
				<li><a href="login.php">Login</a></li>
                <li><a href="newuser.php">SignUp</a></li>
            </ul>
	</div>
		
	<div id=section>
	<?php include('includes/about.php');?>
    </div>      <!-- middle content -->

<div><?php include('includes/footer.php');?> 
</div>		<!-- footer -->

</body>
</html>