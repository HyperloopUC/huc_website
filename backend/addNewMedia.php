<html>
<head>
    <link rel="shortcut icon" href="../assets/images/HyperloopIcon.png">
    <link rel="apple-touch-icon" href="../assets/images/HyperloopIcon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php
    if(!isset($_SESSION['username']))
    {   
       
        ?>
            <script type='text/javascript'>
            //window.location = "index.php";
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
            mysqli_query($conn,"INSERT INTO media VALUES (null,'".$_POST['publisherName']."', '".$_POST['date']."','".$_POST['title']."' ,'".$_POST['logoLink']."' ,'".$_POST['webLink']."' ,'true','".$_POST['imageType']."')") or die(mysqli_error($conn));
            
           ?>
            <script type='text/javascript'>
            window.location = "media.php";
            </script>
            <?php
        }
    ?>
</head>
<body>
    <div style="text-align:center;margin-top:20px;"> 
    <h1 style="color:#e00122;font-family: 'Lato', sans-serif;">Add Details for new media post</h1>
    </div >
    <div style="text-align:center;margin:10px 35%;">
    <form action="addNewMedia.php" method="post" role="form">
        <table>
            <tr>
                <td>Publisher Name</td>
                <td><input type="text" name="publisherName" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"  style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date"  style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Web Link</td>
                <td><input type="text" name="webLink" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>LogoLink</td>
                <td><input type="text" name="logoLink" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Image Type</td>
                <td>
                    <select name="imageType" style="margin-top:10px" required class="form-control">
                        <option>Select Team</option>
                        <option value="rectangle">Rectangle</option>
                        <option  value="square">Square</option>
                    </select> Image size must be in 50X50 ratio for square and 100X50 for rectangle
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" value="Add post" style="margin-top:20px;" class="btn btn-danger-o-style2 btn-sm" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;"/></td>
            </tr>
        </table>  
    </form>
    </div>
</body>
</html>