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
<body style="font-family: 'Lato', sans-serif;">
    
    <div style="text-align:center;margin-top:20px;"> 
    <h1 style="color:#e00122;font-family: 'Lato', sans-serif;">Media Page</h1>
    </div>
    <br>
    
    <a href="addNewMedia.php"><button class="btn" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;">Add New Media</button></a>
    <hr/>
    <br/>
<?php
    
    if(isset($_GET['d']))
	{
		mysqli_query($conn,"update media set showFlag = 'false' where mediaId='".$_GET['d']."'") or die(mysqli_error($conn));	
        ?>
		 <script type='text/javascript'>
            window.location = "media.php";
            </script>
            <?php
	}
	if(isset($_GET['p']))
	{
		mysqli_query($conn,"update media set showFlag = 'true' where mediaId='".$_GET['p']."'") or die(mysqli_error($conn));
        ?>
		 <script type='text/javascript'>
            window.location = "media.php";
            </script>
            <?php
	}
    
    
    
	$sql = 'select * from media';

$count = 1;
$result = $conn->query($sql);
if( $result->num_rows > 0 )
{
  ?>
    <table border="1px" style="margin:5px">
    <?php


while($row = $result->fetch_assoc())
{
   
		if($count == 1)
		{
			?>
            <tr>
            <th>Sr. No.</th>
            <th>Publisher Name</th>
            <th>Title</th>
            <th>Publishing Date</th>
            <th>Web Link</th>
            <th>Logo</th>
            <th>Image type</th>
            <th>Action</th>
            </tr>
            <?php
		}
		?>
        <tr>
        	<td><?php echo $count; ?></td>
            <td><?php echo $row['publisherName']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['publishingDate']; ?></td>
            <td><?php echo $row['webLink']; ?></td>
            <td style="width:100px;"><?php echo $row['logoLink']; ?></td>
            <td><?php echo $row['imageType']; ?></td>
            <td><?php  
				if($row['showFlag'] == 'true')
				{
					?>
                
                    <a href='media.php?d=<?php echo $row['mediaId']?>'><button class="btn btn-danger" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;background-color:#e00122">Delete</button></a>
                    <?php
				}
				else
				{
					?>
                
                    <a href='media.php?p=<?php echo $row['mediaId']?>'><button class="btn" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;">Put Back</button></a>
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