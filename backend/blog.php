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
           // window.location = "index.php";
            </script>
            <?php
    }
?>
    <?php
    include 'config.php';
   
?>
    
</head>
<body>
    <div style="text-align:center;margin-top:20px;"> 
    <h1 style="color:#e00122;font-family: 'Lato', sans-serif;">Blog Page</h1>
    </div>
<br>
   
    <a href="addNewBlog.php"><button class="btn" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;">Add New Blog</button></a>
     <hr/>
<?php
    
    if(isset($_GET['d']))
	{
		mysqli_query($conn,"update blog set showFlag = 'false' where blogId='".$_GET['d']."'") or die(mysqli_error($conn));	
        ?>
		 <script type='text/javascript'>
            window.location = "blog.php";
            </script>
            <?php
	}
	if(isset($_GET['p']))
	{
		mysqli_query($conn,"update blog set showFlag = 'true' where blogId='".$_GET['p']."'") or die(mysqli_error($conn));
        ?>
		 <script type='text/javascript'>
            window.location = "blog.php";
            </script>
            <?php
	}
    
    
    
	$sql = 'select * from blog';

$count = 1;
$result = $conn->query($sql);
if( $result->num_rows > 0 )
{
  ?>
    <table border="1px" style="margin:10px">
    <?php


while($row = $result->fetch_assoc())
{
   
		if($count == 1)
		{
			?>
            <tr>
            <th>Sr. No.</th>
           
            <th>Title</th>
            <th>Description</th>
            <th>Media Link</th>
            <th>Date</th>
            <th>Action</th>
            </tr>
            <?php
		}
		?>
        <tr>
        	<td><?php echo $count; ?></td>
            
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['blogDescription']; ?></td>
            <td><?php echo $row['medeLink']; ?></td>
            <td><?php echo $row['publishedDate']; ?></td>
            <td><?php  
				if($row['showFlag'] == 'true')
				{
					?>
                
                    <a href='blog.php?d=<?php echo $row['blogId']?>'><button class="btn btn-danger" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;background-color:#e00122">Delete</button></a>
                    <?php
				}
				else
				{
					?>
                
                    <a href='blog.php?p=<?php echo $row['blogId']?>'><button class="btn" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;">Put Back</button></a>
                    <?php
				}
			 ?></td>
        </tr>
        
    
    <?php
	$count = $count + 1;
} 
?>
    </table>
    <?php
}

    ?>

    
</body>
</html>