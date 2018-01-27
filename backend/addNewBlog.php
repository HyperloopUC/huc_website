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
        if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['date'])
          && isset($_POST['mediaLink']) ) {
            mysqli_query($conn,"INSERT INTO blog VALUES (null,'".$_POST['title']."', '".$_POST['description']."','".$_POST['mediaLink']."' ,'".$_POST['date']."' ,'true')") or die(mysqli_error($conn));
            
           ?>
            <script type='text/javascript'>
            window.location = "blog.php";
            </script>
            <?php
        }
    ?>
</head>
<body>
    <div style="text-align:center;margin-top:20px;"> 
    <h1 style="color:#e00122;font-family: 'Lato', sans-serif;">Add Details for new Blog post</h1>
    </div>
    <div style="text-align:center;margin:10px 35%;">
    <form action="addNewBlog.php" method="post" role="form">
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"  style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><textarea type="text" name="description"  style="margin-top:10px" required class="form-control"></textarea></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="date" name="date"  style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Media Link</td>
                <td><input type="text" name="mediaLink"  style="margin-top:10px" class="form-control"/></td>
            </tr>
            <tr>
                 <td colspan="2" style="text-align:center;"><input type="submit" value="Add post" style="margin-top:20px;" class="btn btn-danger-o-style2 btn-sm" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;"/></td>
            </tr>
        </table>  
    </form>
    </div>
</body>
</html>