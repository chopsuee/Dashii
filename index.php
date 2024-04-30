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
        <h4>Login, Dashii!</h4>
        <form action="" class="login-box">
        



            <input type="text" id="LnameField" name="LastName" placeholder="Username" required> <br>

            <input type="password" id="LnameField" name="Password" placeholder="Password"> <br>

            <button type="submit">Log in</button>

        </form>
        
        <a href="create_acc.php">Sign up to create an account</a>
        </div>
    </div>
</body>

</html>