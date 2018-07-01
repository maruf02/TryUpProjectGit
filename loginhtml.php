<!DOCTYPE html>
<html>
<head>
<title>login page</title>

</head>
<body>

<div id="login">

        <h2>Member</h2>

        <form action="inserFile.php" method="post">
            <label><span class="style1">Username</span></label>
            <input type="text" value="" name="username" size="10" class="input_field" title="username" />
            <label><span class="style1">Password</span></label>
            <input type="password" value="" name="password" class="input_field" title="password" />
            <label><span class="style1">Select User</span></label>

            <label>
                <select name="cmbUser" id="cmbUser">
                    <option>Manager</option>
                    <option>Admin</option>
                </select>
            </label>
            <input type="submit" name="login" value="Login" alt="login" id="submit_btn" title="Login" />

        </form>
        <div class="cleaner"></div>

    </div>
</body>
</html>
