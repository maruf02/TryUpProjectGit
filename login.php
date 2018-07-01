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