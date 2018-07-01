<?php
if (isset($_POST['button'])) {
    $name = $_POST['name'];
    $pname = $_POST['pname'];
    

    // Establish Connection with MYSQL
    $con = mysql_connect("localhost", "root","maruf");
    // Select Database
    mysql_select_db("isp", $con);
    // Specify the query to Insert Record
    $sql = "insert into pollist (name,pname) values('" . $name. "','" . $pname . "')";
    // execute query
    mysql_query($sql, $con);
    // Close The Connection
    mysql_close($con);

    echo '<script type="text/javascript">alert("Complaint Submited Succesfully");window.location=\'addPoll.php\';</script>';
} else {
	echo('not save');
    header("location:index.php");
}
?>


<?php
        session_start();
        $UserName = $_POST['username'];
        $Password = $_POST['password'];
        $UserType = $_POST['cmbUser'];
        if ($UserType == "Admin") {
            $con = mysql_connect("localhost", "root","maruf");
            mysql_select_db("isp", $con);
            $sql = "select * from adminlogin where username='" . $UserName . "' and password='" . $Password . "'";
            $result = mysql_query($sql, $con);
            $records = mysql_num_rows($result);
            $row = mysql_fetch_array($result);
            if ($records == 0) {
                echo $records;
                echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
            } else {
               $_SESSION['username'] = $UserName;
                header("location:dashboard.php");
            }
            mysql_close($con);
        }  else {
            $con = mysql_connect("localhost", "root","maruf");
            mysql_select_db("isp", $con);
            $sql = "select * from managerlogin where userName='" . $UserName . "' and password='" . $Password . "'";
            $result = mysql_query($sql, $con);
            $records = mysql_num_rows($result);
            $row = mysql_fetch_array($result);
            if ($records == 0) {
                echo $records;
                echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'index.php\';</script>';
            } else {
               
				$_SESSION['username'] = $UserName;
                header("location:dashboard.php");
            }
            mysql_close($con);
        }
        ?>




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
	//$op=":-";
	
	
    

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
