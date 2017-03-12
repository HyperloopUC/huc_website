<html>
<head>
    <link rel="shortcut icon" href="../assets/images/HyperloopIcon.png">
    <link rel="apple-touch-icon" href="../assets/images/HyperloopIcon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <?php
        include "config.php";
    ?>
    
</head>
<body>
    <div style="text-align:center;margin-top:20px;"> 
    <h1 style="color:#e00122;font-family: 'Lato', sans-serif;">Team Page</h1>
    </div>
    <?php
        if(isset($_POST["teamName"])){
             mysqli_query($conn,"INSERT INTO team VALUES (null,'".$_POST['teamName']."','true')") or die(mysqli_error($conn));
        }
        if(isset($_POST["fullName"]) && isset($_POST["teamId"]) && isset($_POST["linkedInLink"]) && isset($_POST["imageLink"])){
             mysqli_query($conn,"INSERT INTO teamMembers VALUES (null,'".$_POST['teamId']."','".$_POST['fullName']."','".$_POST['linkedInLink']."','".$_POST['imageLink']."','true')") or die(mysqli_error($conn));
        }
        if(isset($_GET["dT"])){
            mysqli_query($conn,"update team set showFlag = 'false' where teamId='".$_GET['dT']."'") or die(mysqli_error($conn));	
        }
        if(isset($_GET["pT"])){
            mysqli_query($conn,"update team set showFlag = 'true' where teamId='".$_GET['pT']."'") or die(mysqli_error($conn));	
        }
        if(isset($_GET["d"])){
            mysqli_query($conn,"update teamMembers set showFlag = 'false' where memberId='".$_GET['d']."'") or die(mysqli_error($conn));	
        }
        if(isset($_GET["p"])){
            mysqli_query($conn,"update teamMembers set showFlag = 'true' where memberId='".$_GET['p']."'") or die(mysqli_error($conn));	
        }
    ?>
    <div style="text-align:center;margin:10px 35%;">
    <form action="team.php" method="post" role="form">
        <table>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="fullName" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Team:</td>
                <td>
                    <select name="teamId" style="margin-top:10px" required class="form-control">
                        <option>Select Team</option>
                    <?php
                        $sql = 'select * from team';
                        $result = $conn->query($sql);
                        if( $result->num_rows > 0 )
                        {
                            while($row = $result->fetch_assoc())
                            {
                                ?>
                                    <option value="<?php echo $row['teamId']; ?>"><?php echo $row['teamName']; ?></option>
                                <?php
                            }
                        }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>LinkedIn Link:</td>
                <td><input type="text" name="linkedInLink" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td>Image Link:</td>
                <td><input type="text" name="imageLink" style="margin-top:10px" required class="form-control"/></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;"><input type="submit" value="Add Team Member" style="margin-top:20px;" class="btn btn-danger-o-style2 btn-sm" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;"/></td>
            </tr>
        </table>
    
    </form>
    </div>
    
    <hr>
    <div style="text-align:center;margin:10px 35%;">
    <form action="team.php" method="post" role="form">
        Team Name : <input type="text" name="teamName" style="margin-top:10px" required class="form-control"/>
        <input type="submit" value="Add New Team" style="margin-top:20px;" class="btn btn-danger-o-style2 btn-sm" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;"/>
    </form>
    </div>
    
    <hr>
    <div style="text-align:center;margin-top:20px;"> 
    <h2 style="color:#e00122;font-family: 'Lato', sans-serif;">Team List</h2>
    </div>
    <?php
        $sql = 'select * from team';
        $result = $conn->query($sql);
        if( $result->num_rows > 0 )
        {
            ?>
            <table border="1px" style="margin-left:40%">
                <tr>
                    <th>Team Name</th>
                    <th>Action</th>
                </tr>
            <?php
            while($row = $result->fetch_assoc())
            {
                ?>
                    <tr>
                        <td><?php echo $row['teamName']; ?></td>
                        <td>
                            <?php  
                                if($row['showFlag'] == 'true')
                                {
                                    ?>

                                    <a href='team.php?dT=<?php echo $row['teamId']?>'><button class="btn btn-danger" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;background-color:#e00122">Delete</button></a>
                                    <?php
                                }
                                else
                                {
                                    ?>

                                    <a href='team.php?pT=<?php echo $row['teamId']?>'><button>Put Back</button></a>
                                    <?php
                                }
                             ?>
                        </td>
                    </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }
    ?>
    <hr>
    <div style="text-align:center;margin-top:20px;"> 
    <h2 style="color:#e00122;font-family: 'Lato', sans-serif;">Team Members</h2>
    </div>
    <?php
        $sql = 'select * from teamMembers';
        $counter = 1;
        $result = $conn->query($sql);
        if( $result->num_rows > 0 )
        {
            ?>
            <table border="1px" style="margin:5px">
                <tr>
                    <th>Sr. No.</th>
                    <th>Team Member Name</th>
                    <th>LinkedIn Url</th>
                    <th>Image Url</th>
                    <th>Action</th>
                </tr>
            <?php
            while($row = $result->fetch_assoc())
            {
                
                ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php echo $row['fullName']; ?></td>
                        <td><?php echo $row['linkedInLink']; ?></td>
                        <td><?php echo $row['imageLink']; ?></td>
                        <td>
                            <?php  
                                if($row['showFlag'] == 'true')
                                {
                                    ?>

                                    <a href='team.php?d=<?php echo $row['memberId']?>'><button class="btn btn-danger" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;background-color:#e00122">Delete</button></a>
                                    <?php
                                }
                                else
                                {
                                    ?>

                                    <a href='team.php?p=<?php echo $row['memberId']?>'><button  class="btn" style="padding-top: 5px;padding-bottom: 5px;margin: 10px;">Put Back</button></a>
                                    <?php
                                }
                             ?>
                        </td>
                    </tr>
                <?php
                $counter = $counter + 1;
            }
            ?>
            </table>
            <?php
        }
    ?>
    
</body>
</html>