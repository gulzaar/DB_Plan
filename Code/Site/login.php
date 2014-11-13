<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/common.css" rel="stylesheet" type="text/css" />
<title>Login</title>
</head>

<body>

<body>
	<div><?php include('header.php');?></div>  <!-- header -->
    
<div id=nav> 
			<ul>
				<li><a href="newuser.php">SignUp</a></li>
            </ul>
	</div>
		
	<div id=section>
	<form action="login1.php" form name="loginform" method="post"> 
                    <div class="loginspacer">
			<table align="center" cellpadding="4" id="tb">
                            <tr>
                                <td class="field">Username :</td>
                                <td><input type="text" class="text" name="login_name"   id="login_name" maxlength="40" /></td>
                            </tr>
							
                            <tr>
                                <td class="field">Password :</td>
                                <td><input type="password" class="text" name="password" id="password" maxlength="50" /></td>
                            </tr>
			</table>
			
                        <table align="center" cellpadding="4">
                            <tr>
                                <td class="field"></td>
                                <td> <input type="submit" class="inputbutton" name="submit" value="Submit"/></td>
                            <tr>
                        </table>
      </div>
	  </form>
    </div>  
    <!-- middle content -->

<div><?php include('footer.php');?> 
</div>		<!-- footer -->

</body>
</html>