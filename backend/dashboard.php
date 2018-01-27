<?php
    if(!isset($_SESSION['username']))
    {
	   header("index.php");
    }
?>
<link rel="shortcut icon" href="../assets/images/HyperloopIcon.png">
    <link rel="apple-touch-icon" href="../assets/images/HyperloopIcon.png">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
<div class="row" style="opacity: 1; width: auto; font-size: 15px; font-family: 'Lato', sans-serif;">
<div class="row" style="text-align:center;">
<h1 style="color:#e00122">Welcome to Backend of HyperloopUC</h1>
</div>
<div style="margin-left:100px">
<a href="media.php"><li>Media</li></a>
<a href="blog.php"><li>Blog</li></a>
<a href="team.php"><li>Team</li></a>
</div>
</div>