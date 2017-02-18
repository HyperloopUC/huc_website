<html>
<head>
    <?php
    if(!isset($_SESSION['username']))
    {   
       
        ?>
            <script type='text/javascript'>
            window.location = "index.php";
            </script>
            <?php
    } 
    ?>
    <?php
        include 'config.php';
    ?>
    <?php
        if(isset($_POST['publisherName']) && isset($_POST['title']) && isset($_POST['date'])
          && isset($_POST['webLink']) && isset($_POST['logoLink']) ) {
            mysqli_query($conn,"INSERT INTO media VALUES (null,'".$_POST['publisherName']."', '".$_POST['date']."','".$_POST['title']."' ,'".$_POST['logoLink']."' ,'".$_POST['webLink']."' ,'true')") or die(mysqli_error($conn));
            
           ?>
            <script type='text/javascript'>
            window.location = "media.php";
            </script>
            <?php
        }
    ?>
</head>
<body>
    <h1>Add Details for new media post</h1>
    <form action="addNewMedia.php" method="post">
        <table>
            <tr>
                <td>Publisher Name</td>
                <td><input type="text" name="publisherName" required/></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title" required/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date" required/></td>
            </tr>
            <tr>
                <td>Web Link</td>
                <td><input type="text" name="webLink" required/></td>
            </tr>
            <tr>
                <td>LogoLink</td>
                <td><input type="text" name="logoLink" required/></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Add post"/></td>
            </tr>
        </table>  
    </form>
</body>
</html>