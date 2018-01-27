<html>
<head>
    <?php
        if( $_POST['username'] == "admin" &&  $_POST['password'] == "admin" )
        {
            $_SESSION['username'] = 'anuj';
            ?>
            <script type='text/javascript'>
            window.location = "dashboard.php";
            </script>
            <?php
        }
    ?>
    <link rel="shortcut icon" href="../assets/images/HyperloopIcon.png">
    <link rel="apple-touch-icon" href="../assets/images/HyperloopIcon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="col-lg-4 col-lg-offset-4" style="margin-top:100px;">
    <form action="index.php" method="post" role="form">
        Username : <input type="text" name="username"  class="form-control"/>
        <br>
        Password : <input type="password" name="password"  class="form-control"/>
        <br>
        <input type="submit" value="Login"  class="btn btn-danger-o-style2 btn-sm" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;"/>
    </form>
    </div>
</body>
</html>