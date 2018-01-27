<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html><![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html><![endif]-->
<html class="no-js" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Sella - Creative html Template">
    <meta name="author" content="createIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="assets/images/HyperloopIcon.png">
    <title>Hyperloop UC | Press</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css"><!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="assets/js/es5-shim.min.js"></script><![endif]-->
    <?php
        include 'config.php';  
    ?>
  </head>
  <body class="cssAnimate">
    <div id="ct-js-wrapper" class="ct-pageWrapper">
      
     
        <div id="header"></div>
      
      <section>
        <header data-height="30%"  class="ct-u-display-tablex text-center whiteGradient paddingBottom60">
        <div class="inner text-uppercase" style="color: #000">
			<div class="container ct-u-color--black text-center">
			  <h1 class="h1 text-uppercase pageHeading"  >Blog</h1>
                <br>
                
			</div>
        </div>
      </header>
          
          
          
           <section  class="whiteGradient"  style="margin-top:15px;padding-top:10px;padding-bottom:30PX">
         <div class="container">
<!--
             <div class="ct-section-header ct-section-header-decoration-center ct-u-margin-bottom-30" style="padding-top: 30px">
              <h1 class="h1 about-hyperloop-h1 fontHeading" >Blogs published by us</h1>
            </div>
-->
             
             <?php
	$sql = 'select * from blog order by  publishedDate';
$count = 1;
$result = $conn->query($sql);
if( $result->num_rows > 0 )
{
while($row = $result->fetch_assoc())
{
   
		if($row['showFlag'] == "true")
		{
            $string = mb_strimwidth($row['blogDescription'], 0, 97, '...');
            if($count % 3 == 0){
               ?>
                <div class="row" style="">
                <?php
            } 
            ?>
                    <div class="row">
                <a href="blog-single.php?id=<?php echo $row['blogId']; ?>" >
                <div class="text-center mediaDiv" >
                    <div>
                        <span class="fontBody" style="color: #E00122"><b><?php echo $row['title']  ;  ?></b> </span>
                       
                    </div>
                    <br/>
                    <div class="row" style="padding-right:5px;padding-left:5px">
                        
                        
                            <span  class="fontBody"style="color:#444"><?php echo $string; ?> </span> <br/> 
                    </div>
                </div>
                </a>
               </div>
      
               </div>
            <?php
            if($count % 3 == 0){
                ?>
                </div>
                <?php
            }
			?>
            
            <?php
            
             $count = $count + 1;
		}
		
} 
}

    ?>

             
               
          </section>
        </section>
      </div>
      
      
      <!-- Footer-->
      <footer class="ct-footer" >
        
          <div class="container" id="footerContainer">
            
       
         </div>
      </footer>
        
    <!-- JavaScripts-->
    <script src="assets/js/sella.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/form/js/contact-form.js"></script>
     <script> 
    $(function(){
      $("#footerContainer").load("footer.html"); 
    });
	$(function(){
		$("#header").load("header.html");
	});
    </script> 
  </body>
</html>