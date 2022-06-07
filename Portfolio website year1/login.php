<html>
    <head>
    <form action="log.php" method="POST">
    <form action="welcome.php" method="POST">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css" type="text/css"/>
    <link rel="stylesheet" href="change.css" type="text/css"/>
    <title>Login</title>
</head>
<body>
    <form action="log.php" method="post">
        <div class="login-box">
            <h1>Login</h1>
 
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Adminname"
                         name="adminname" value="">
            </div>
 
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
 
            <input class="button" type="submit"
                     name="login" value="Log In">
        </div>
    

</aside>
    <?php if(isset($_GET['error']))
     {
     echo $_GET['error'];
   

    }
    ?>

    </body>
</form>
</html>