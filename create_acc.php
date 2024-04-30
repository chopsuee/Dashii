<?php 
    include 'conn.php';
    include 'header.php';
?>

<html>

<head>
    <link rel="stylesheet" href="./css/create_acc.css">
</head>

<body>
    <div class="container">

        <div class="form-box">
        <h4>Create Account, Dashii!</h4>
        <form action="add_acc.php" method="post" class="login-box">
        
            <input type="text" id="NameField" name="FirstName" placeholder="First Name"><br>

            <input type="text" id="LnameField" name="LastName" placeholder="Last Name"> <br>

            <input type="text" id="UnameField" name="UserName" placeholder="Username" required> <br>

            <input type="password" id="PassField" name="UserPassword" placeholder="Password" required> <br>
            <button type="submit">Create Account</button>

        </form>           
        </div>
    </div>
</body>

</html>