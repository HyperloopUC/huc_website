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
    <link rel="apple-touch-icon" href="assets/images/favicon.png">
    <title>Blog - HyperloopUC</title>
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
    
      <div id="header"></div>
      <?php
        $id = $_GET['id'];
        $sql1 = "select * from foo where id = ('select * from blog where blogId > '.$id.'' and showFlag = 'true')";
        $sql2 = "select * from foo where id = ('select * from blog where blogId > '.$id.'' and showFlag = 'true')";
        $next = "";
        $result1 = $conn->query($sql1);
        if( $result1->num_rows > 0 )
        {
        while($row = $result1->fetch_assoc())
        {
            $next = $row['blogId'];
        }
        }
        $prev = "";
        $result2 = $conn->query($sql1);
        if( $result2->num_rows > 0 )
        {
        while($row = $result2->fetch_assoc())
        {
            $prev = $row['blogId'];
        }
        }    
        $sql = 'select * from blog where blogId = '.$id.'';
        $count = 1;
        $result = $conn->query($sql);
        if( $result->num_rows > 0 )
        {
        while($row = $result->fetch_assoc())
        {
      ?>
      <section class="ct-section ct-blog ct-post whiteGradient">
        <div class="container">
          <div class="row">
            <div class="">
              <div class="ct-article">
                  <h1 style="text-align : center;" class="fontHeadingWOSize"><?php echo $row['title'];?></h1>
                <div class="ct-article-media" style="text-align: center;"><img src="<?php echo $row['mediaLink']?>" alt="">
                  <div class="ct-article-share ct-u-background--gray-lighter whiteGradient">
                    <div class="row">
                      <div class="col-lg-3"><span class="h4 ct-share-title"></span></div>
                      <div class="col-lg-8">
                        <button class="btn-social ct-js-share s_facebook buttonRadius"><i class="fa fa-facebook"></i>
<!--                            <span class="ct-js-share-counter c_facebook"></span>-->
                          </button>
                        <button class="btn-social ct-js-share s_twitter buttonRadius"><i class="fa fa-twitter"></i></button>
                        <button class="btn-social ct-js-share s_plus buttonRadius"><i class="fa fa-google-plus"></i>
<!--                            <span class="ct-js-share-counter c_plus"></span>-->
                          </button>
                        <button class="btn-social ct-js-share s_pinterest buttonRadius"><i class="fa fa-pinterest"></i>
<!--                            <span class="ct-js-share-counter c_pinterest"></span>-->
                          </button>
                        <button class="btn-social ct-js-share s_linkedin buttonRadius"><i class="fa fa-linkedin"></i>
<!--                            <span class="ct-js-share-counter c_linkedin"></span>-->
                          </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ct-article-description fontBody">
                  <p>
                     <?php echo $row['blogDescription'];?>
                   
                  </p>
                </div>
              </div>
              
              <nav>
                <ul class="pager">
                  <li class="hover"><a href="blog-single.php?id=<?php echo $prev;?>" class="fontBody"><i class="fa fa-long-arrow-left"></i>Prev</a></li>
                  <li class="hover"><a href="blog.php"  class="fontBody">back to blog</a></li>
                  <li class="hover"><a href="blog-single.php?id=<?php echo $next;?>"  class="fontBody">Next<i class="fa fa-long-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
            <div class="col-md-3">
              <div id="fb-root"></div>
              <script>
                (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_En/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
                
              </script>
              
            </div>
          </div>
        </div>
      </section>
      <?php
        }
        } else {
            ?>
            <script>
                window.location = "blog.php"
            </script>
            <?php
        }
      ?>
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
