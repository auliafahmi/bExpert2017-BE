<html>
    <head>
        <title>Log-In</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" type="text/css" media="screen" rel="stylesheet">
        
    </head>
    <body>
        <div class="login-card">
            <h1><b>Log-in</b></h1>
            <form method="POST" action="../index.php"> 
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password" required>
                <input type="submit" name="login" value="Login" class="login login-submit">
            </form>
                
            <div class="login-help">
                <a href="#">Register</a> <a href="#" >Forgot Password</a>
            </div>
        </div>

        <?php 
            if(isset($_POST['login']));
        ?>
    </body>
</html>