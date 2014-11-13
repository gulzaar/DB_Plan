<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<title>SignUp</title>
</head>

<body>

<body>
	<div><?php include('header.php');?></div>  <!-- header -->
    
<div id=nav> 
			<ul>
				<li><a href="login.php">Login</a></li>
            </ul>
	</div>
		
	<div id=section>
	  <form action="<?php echo $_SERVER['PHP_SELF']?>" form name="loginform" method="post"> 
		<div class="loginspacer">
					<table align="center" cellpadding="4" id="tb">
		
			
			<td class="field">Username :</td>
			<td><input type="text" class="text" name="username"   id="username" maxlength="60" /></td>
			</tr>
			<tr>
			<td class="field">Password :</td>
			<td><input type="password" class="text" name="pass" id="pass" maxlength="10" /></td>
			 <tr>
			 <td class="field">Confirm Password :</td>
			<td><input type="password"  class="text" name="pass2" maxlength="10"></td></tr>
			</tr>
			</table>
			<table align="center" cellpadding="4">
			<tr>
			<td class="field"></td>
			<td> <input type="submit" class="inputbutton" name="submit" value="Register"/></td>
			<tr>			
			</table>		<!-- end table-->
					</div>
		</form>
    </div><br><br>  
    <!-- middle content -->

<div><?php include('footer.php');?> 
</div>		<!-- footer -->

</body>
</html>