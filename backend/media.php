<html>
<head>
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
    <h1>Media Page</h1>

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
    <table border="1px">
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
            <td><?php echo $row['logoLink']; ?></td>
            <td><?php  
				if($row['showFlag'] == 'true')
				{
					?>
                
                    <a href='media.php?d=<?php echo $row['mediaId']?>'><button>Delete</button></a>
                    <?php
				}
				else
				{
					?>
                
                    <a href='media.php?p=<?php echo $row['mediaId']?>'><button>Put Back</button></a>
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

    <br>
    <hr/>
    <a href="addNewMedia.php"><button>Add New Media</button></a>
</body>
</html>