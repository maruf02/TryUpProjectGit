<?php
session_start();

if (isset($_POST['button1'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
	$cln = $_POST['cln'];
	$email = $_POST['email'];
	$phn = $_POST['phn'];
	$nid = $_POST['nid'];
	$add = $_POST['add'];
	$paccnt = $_POST['paccnt'];
	$aexp = $_POST['aexp'];
	$act = $_POST['act'];
	$user=$_SESSION['username'];
	$op=":-";
	
	
    

    // Establish Connection with MYSQL
    $conn = mysql_connect("localhost", "root","maruf");
    // Select Database
    mysql_select_db("isp", $conn);
    // Specify the query to Insert Record
    $sql = "insert into users (username,password,clienname,email,phone,nid,address,parrent_account,account_expired,active,insertby) values('" . $username. "','" . $password . "','" . $cln. "','" . $email. "','" . $phn. "','" . $nid. "','" . $add. "','" . $paccnt. "','" . $aexp. "','" . $act. "','" . $user. "')";
    
	//$sql.= "insert into radcheck (username,attribute,op,value) values('" . $username. "','" . $password . "','" . $op. "','" . $add. "')";
	// execute query
	//mysql_multi_query($sql, $conn);
    mysql_query($sql,$conn);
    // Close The Connection
    mysql_close($conn);

    echo '<script type="text/javascript">alert("Complaint Submited Succesfully");window.location=\'dashboard.php\';</script>';
} else {
	echo('not save');
    header("location:index.php");
}
?>