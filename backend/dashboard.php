<?php
    if(!isset($_SESSION['username']))
    {
	   header("index.php");
    }
?>

<h1>Welcome to Backend of HyperloopUC</h1>

<a href="media.php"><li>Media</li></a>
