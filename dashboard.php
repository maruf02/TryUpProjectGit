<?php
session_start();
echo 'Welcome'." ".($_SESSION['username']);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User InterFace</title>
</head>

<body>
	<h1 style="text-align: center;">Add User</h1>
	<form action="inserFile.php"  method="post">
		 Username  
			<input type="text" name="username" size="20" required><br/><br/>
		
		 password  
			<input type="text" name="password" size="20" required><br/><br/>
		 Client Name  
			<input type="text" name="cln" size="20" required><br/><br/>
		Email:- 
			<input type="email" name="email" size="20" required><br/><br/>
		 Phone  
			<input type="tel" name="phn" size="20" required><br/><br/>
		 NID No  
			<input type="text" name="nid" size="20" required><br/><br/>
		 Address  
			<input type="text" name="add" size="20" required><br/><br/>
		 Parent Account 
			<input type="text" name="paccnt" size="20" required><br/><br/>
		Account Expired 
			<input type="text" name="aexp" size="20" required><br/><br/>
		Active <label>
		 <input type="radio" name="act" value="Yes" checked> Yes
           <input type="radio" name="act" value="No"> No<br>
			<br/></label>
		
		<input type="submit" name="button1" value="Submite">
 			
		
		</form>
</body>
</html>



