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
</head>
<body>
    <form action="index.php" method="post">
        Username : <input type="text" name="username"/>
        <br>
        Password : <input type="password" name="password"/>
        <br>
        <input type="submit" value="Login"/>
    </form>
</body>
</html>