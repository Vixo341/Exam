<?php include 'inc/header.php'; ?>

<?php
  Session::checkLogin();
?>

<div class="main">
<h1>User Login</h1>

	<div class="segment" style="padding-right:500px; width:500px; height: 200px;">
	<form action="" method="post">
		<table class="tbl" style="padding-left: 350px; padding-top: 65px; width:500px; height: 200px;">
			 <tr>
			   <td>E-mail:</td>
			   <td><input name="email" id="email" type="text" required="" placeholder="Enter Email"></td>
			 </tr>
			 <tr>
			   <td>Password:</td>
			   <td><input name="password" id="password" type="password" required="" placeholder="Enter Password"></td>
			 </tr>
			  <tr>
			  <td></td>
			   <td class="button_class"><input type="submit" id="loginSubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>

    
        <br/>
        <p style="font-size: 14px; text-align: center;"><span class="empty" style="display: none">Fields Must Not be Empty!</span></p>
        <p style="font-size: 14px; text-align: center;"><span class="error" style="display: none">Email or Password Not Matched!</span></p>
        <p style="font-size: 14px; text-align: center;"><span class="disable" style="display: none">User ID Disabled From Admin!</span></p>

    </div>
	
</div>
<?php include 'inc/footer.php'; ?>