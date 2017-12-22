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
    <link rel="shortcut icon" href="assets/images/HyperloopIcon.png">
    <link rel="apple-touch-icon" href="assets/images/HyperloopIcon.png" sizes="16x16">
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
			  <h1 class="h1 text-uppercase pageHeading" style="padding-top: 12%; ">Media</h1>
                <br>
                <span class="fontBody" style="color: #333">Download the complete press-kit <a href="https://drive.google.com/drive/folders/0ByLCBeMONAv7d3JUT3puMGRBVDA" target="__blank"><i style="color: #e00122"><u>here</u></i></a></span>
			</div>
        </div>
      </header>
          
          
          
           <section data-background="#eee" class="whiteGradient" style="margin-top:15px;padding-top:10px;padding-bottom:30PX">
         <div class="container">
             <div class="ct-section-header ct-section-header-decoration-center ct-u-margin-bottom-30" style="padding-top: 30px">
              <h1 class="h1 about-hyperloop-h1 fontHeading" >Us in Media</h1>
            </div>
             
             <?php
	$sql = 'select * from media order by  publishingDate';
$count = 1;
$result = $conn->query($sql);
if( $result->num_rows > 0 )
{
while($row = $result->fetch_assoc())
{
   
          if($row['showFlag'] == "true")
          {
            if($count % 3 == 0){
              ?>
              <div class="row" style="">
              <?php
            } 
            ?>
                  <div class="col-md-4">
              <a href="https://www.wcpo.com/news/insider/uc-is-going-all-in-on-hyperloop-transportation-and-is-looking-to-aid-its-effort-through-research-funding-and-facilities" target="_blank">
              <div class="text-center mediaDiv fontBody" >
                  <div>
                    
                    <?php echo $row['title']; ?>
                  </div>
                  <br/>
                  <br/>
                  <div class="row">
                      <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:10px">
                          <?php
                              if($row['imageType'] == "square") {
                          ?>
                          <img src="<?php echo $row['logoLink']; ?>" height="50px" width="50px"/>
                          <?php
                              } else {
                                  ?>
                                  <img src="<?php echo $row['logoLink']; ?>" height="50px" width="100px"/>
                                  <?php
                              }
                          ?>
                      </div>
                      <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                          <span class="mediaPublisherName fontBody"><b><?php echo $row['publisherName']; ?></b> </span> <br/>  
                          <span class="mediaPublisherDate fontBody"><?php echo $row['publishingDate']; ?></span>
                      </div>
                  </div>
              </div>
              </a>
              </div>
              <?php
              if($count % 3 == 0){
               ?>
                <div class="row" style="">
                <?php
            } 
            ?>
                    <div class="col-md-4">
                <a href="https://techcrunch.com/2017/09/05/spacex-opens-applications-for-its-2018-hyperloop-pod-competition/" target="_blank">
                <div class="text-center mediaDiv fontBody" >
                    <div>
                      
                       <?php echo $row['title']; ?>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:10px">
                            <?php
                                if($row['imageType'] == "square") {
                            ?>
                            <img src="<?php echo $row['logoLink']; ?>" height="50px" width="50px"/>
                            <?php
                                } else {
                                     ?>
                                    <img src="<?php echo $row['logoLink']; ?>" height="50px" width="100px"/>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span class="mediaPublisherName fontBody"><b><?php echo $row['publisherName']; ?></b> </span> <br/>  
                            <span class="mediaPublisherDate fontBody"><?php echo $row['publishingDate']; ?></span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
            <?php
            if($count % 3 == 0){
                ?>
                <div class="row" style="">
                <?php
            } 
            ?>
                    <div class="col-md-4">
                <a href="http://magazine.uc.edu/news/hyperloop.html" target="_blank">
                <div class="text-center mediaDiv fontBody" >
                    <div>
                      
                       <?php echo $row['title']; ?>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:10px">
                            <?php
                                if($row['imageType'] == "square") {
                            ?>
                            <img src="<?php echo $row['logoLink']; ?>" height="50px" width="50px"/>
                            <?php
                                } else {
                                     ?>
                                    <img src="<?php echo $row['logoLink']; ?>" height="50px" width="100px"/>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span class="mediaPublisherName fontBody"><b><?php echo $row['publisherName']; ?></b> </span> <br/>  
                            <span class="mediaPublisherDate fontBody"><?php echo $row['publishingDate']; ?></span>
                        </div>
                    </div>
                </div>
                </a>
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

               </div>
     </section>      
          
          <div class="ct-section-header ct-section-header-decoration-center ct-u-margin-bottom-30 paddingTop60 paddingBottom60">
              <h1 class="h1 about-hyperloop-h1 fontHeading" >Image Gallery</h1>
            </div>
          
        <div id="ct-gallery" class="ct-gallery ct-js-gallery ct-gallery--col5 lightGallery paddingTop60 "><a href="assets/images/Press_page/Hyperloop%20UC%20-%20Image%20background.png">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20UC%20-%20Image%20background.png" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20UC%20-%20Gray%20background.png">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20UC%20-%20Gray%20background.png" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/pod_lake.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/pod_lake.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20Interior%20Business%20Top.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20Interior%20Business%20Top.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20Interior%20Business.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20Interior%20Business.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hallbach%20mfg.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hallbach%20mfg.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Pipe%20Bending.JPG">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Pipe%20Bending.JPG" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Plasma%20cutting.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Plasma%20cutting.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Space%20Frame%201.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Space%20Frame%201.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hallbach%20assembled.jpg">
            <article class="ct-gallery-item marketing ">
              <figure><img src="assets/images/Press_page/Hallbach%20assembled.jpg" width="256px" height="175px" alt=""/>
                
              </figure>
            </article></a>
        </div>
      </section>
      
      
      
      
      <!-- Footer-->
      <footer class="ct-footer" >
        
          <div class="container" id="footerContainer">
            
       
         </div>
      </footer>
        <style>
            
        </style>
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