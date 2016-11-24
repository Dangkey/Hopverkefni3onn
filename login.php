<?php session_start();
	
		
	if(isset($_POST['Submit'])){
		
		$logins = array('admin' => '12345','username1' => 'password1',);
		
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:adminpage.php");
			exit;
		} else {
			
			$msg="<span style='color:red'>Vitlaust Login</span> <br> Reyndu admin og 12345";
		}
	}
?>
<title>Verkefni 5</title>
<form action="" method="post" name="Login_Form">
  <table width="400" align="center">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td> </td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>