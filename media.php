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
      
      <!--<header data-background="assets/images/content/slider-bg.jpg" data-height="34%" data-parallax="50" class="ct-u-display-tablex text-uppercase text-center">
        <div class="inner">
          <h1 class="h1 ct-u-color- -white ct-u-margin-top-20">OUR POD</h1>
        </div>
      </header>-->
      <!--<header>
        <div>
          <div data-background="assets/images/Renders.jpg" class="ct-header tablex item">
            <div data-height="100%" class="ct-u-display-tablex">
              <div class="inner text-uppercase">
                <div class="container ct-u-color--white text-center">
                  <h2 class="h2">Media</h2>
                </div>
              </div>
            </div>
          </div>
        </header>-->
        <div id="header"></div>
      
      <section>
        <header data-height="30%" data-parallax="50" class="ct-u-display-tablex text-center">
        <div class="inner text-uppercase" style="color: #000">
			<div class="container ct-u-color--black text-center">
			  <h1 class="h1 text-uppercase" style="font-family: 'Lato', sans-serif; font-weight: 700; font-size: 400%; padding-top: 12%; color: #E00122">Media</h1>
                <br>
                <span style="font-family: 'Lato', sans-serif; font-weight: 300; font-size: 18px; color: #000">Download the complete press-kit <a href="https://drive.google.com/drive/folders/0ByLCBeMONAv7d3JUT3puMGRBVDA" target="__blank"><i style="color: #e00122"><u>here</u></i></a></span>
			</div>
        </div>
      </header>
          
          
          
           <section data-background="#eee" data-parallax="50"  style="margin-top:15px;padding-top:10px;padding-bottom:30PX">
         <div class="container">
             <div class="ct-section-header ct-section-header-decoration-center ct-u-margin-bottom-30" style="padding-top: 30px">
              <h1 class="h1 about-hyperloop-h1" style="font-family: 'Lato', sans-serif; font-weight: 500">Us in Media</h1>
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
                <a href="http://time.com/4207248/hyperloop-pod-design-competition/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                       <?php echo $row['title']; ?>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/time.png" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b><?php echo $row['publisherName']; ?></b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"><?php echo $row['publishingDate']; ?></span>
                        </div>
                    </div>
                </div>
                </a>
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

             <div class="row" style="">
                <div class="col-md-4">
                <a href="http://time.com/4207248/hyperloop-pod-design-competition/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                       See the Futuristic Pods That Could Change How We Travel
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/time.png" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>TIME</b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Feb 4, 2016</span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.newsrecord.org/news/hyperloop-uc-advances-to-final-round-of-spacex-competition/article_a28805b6-ca0d-11e5-8017-6be4fd4f7c93.html" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                       Hyperloop UC Advances to Final Round of SpaceX Competition
                    </div>
                    <br/>
                    <br/>
                   <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/tnr.jpeg" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>THE NEWS RECORD</b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Feb 2, 2016</span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="https://article.wn.com/view/2016/03/07/Hyperloop_UC_Hinges_on_Revolutionizing_HighSpeed_Transportat/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                      Hyperloop pods which can travel at 760mph could cut journey time from New York to LA...
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/mirror.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>MIRROR</b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 25, 2016</span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
             <div class="row" style="margin-top:3%">
                <div class="col-md-4">
                <a href="http://www.theverge.com/2016/6/18/11965354/hyperloop-pod-competition-elon-musk-spacex-team-design" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        Here are the Hyperloop pods competing in Elon Musk's big race later this year 
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/theverge.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>THE VERGE</b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 21, 2016</span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.businessinsider.com/heres-what-hyperloop-pods-could-one-day-look-like-2016-6" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        THE HYPERLOOP COMPETITION: Here are the transportation pods of the future being built...
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/businessinsider.jpeg" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>BUSINESS INSIDER </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Jun 14, 2016</span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.wcpo.com/news/insider/uc-team-in-the-finals-of-world-contest-that-could-revolutionize-high-speed-travel" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        UC team in the finals of world contest that could revolutionize high-speed travel 
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/wcpo.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>WCPO </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Mar 26, 2016 </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
            <div class="row" style="margin-top:3%">
                <div class="col-md-4">
                <a href="http://www.gereports.com/5-coolest-things-earth-week-29-4/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        5 Coolest Things On Earth This Week
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/geLogo.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>GE REPORTS </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 21, 2016 </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.space.com/34513-hyperloop-pod-hovers-for-the-first-time.html" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        Hyperloop Pod Hovers for the First Time
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/spaceLogo.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b> SPACE.COM </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 26, 2016 </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="https://issuu.com/ucgraduateschool/docs/annual_report_2016_interactive-web/8" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        2016 Annual Report  
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/issuu.jpeg" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>ISSUU </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Nov 15, 2016   </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
             <div class="row" style="margin-top:3%;">
                <div class="col-md-4">
                <a href="http://scienceovereverything.com/2016/11/10/university-of-cincinnati-team-building-a-new-way-to-move-about-the-country//" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        University of Cincinnati team building a new way to move about the country
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/scienceovereverything.jpeg" height="50px" width="65px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>SCIENCE OVER EVERYTHING </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Nov 10, 2016   </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.dailymail.co.uk/sciencetech/article-3866342/The-future-travel-Watch-Hyperloop-pod-designed-students-LEVITATE-time.html" target="_blank">
                <div class="text-center mediaDiv">
                    <div>
                        The future of travel is here: Watch a Hyperloop pod designed by students LEVITATE for the... 
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/dailymail.jpeg" height="50px" width="60px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>DAILY MAIL </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 25, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://businessinsider.com.pl/technologie/nauka/hyperloop-lewitujacy-prototyp/38m4hy7?utm_source=fb&utm_medium=social&utm_campaign=fb_bi" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        Levitating prototype Hyperloop - 0.63 centimeters above the ground
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/businessInsider.jpeg" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>BUSINESS INSIDER POLSKA  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 23, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
              <div class="row" style="margin-top:3%;">
                <div class="col-md-4">
                <a href="http://www.cincinnati.com/story/money/2016/10/17/uc-students-travel-speed-sound/92056970/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        UC students travel at the speed of sound
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/cincinnaticom.png" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>CINCINNATI.COM  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"> Oct 17, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="https://live24news.xyz/2016/10/the-way-forward-for-journey-is-right-here-watch-a-hyperloop-pod-designed-by-college-students-levitate-for-the-primary-time/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        The way forward for journey is right here: Watch a Hyperloop pod designed by college students...
                    </div>
                    <br/>
                    <br/>
                   <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/live24news.png" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>LIVE 24 NEWS  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"> Oct 25, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="https://article.wn.com/view/2016/03/07/Hyperloop_UC_Hinges_on_Revolutionizing_HighSpeed_Transportat/" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                       Hyperloop UC Hinges on Revolutionizing High-Speed Transportation
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/wn.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>WN.COM  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"> Oct 21, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
              <div class="row" style="margin-top:3%;">
                <div class="col-md-4">
                <a href="http://www.itechpost.com/articles/45269/20161024/hyperloop-university-cincinnati-achieves-magnetic-levitaton.htm" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        Hyperloop UC Prototype Achieves Magnetic Levitation
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/itechpost.png" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>ITECH POST  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"> Oct 24, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.soapboxmedia.com/innovationnews/031516-university-cincinnati-team-prepares-finals-space-x-hyperloop-competition.aspx" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                        UC team prepares for finals of Space X Hyperloop Pod competition
                    </div>
                    <br/>
                    <br/>
                   <div class="row">
                        <div class="col-md-4 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/soapboxMedia.jpeg" height="50px" width="100px"/>
                        </div>
                        <div class="col-md-8" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>SOAPBOX  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122"> Mar 14, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                <div class="col-md-4">
                <a href="http://www.livescience.com/56635-hyperloop-pod-hovers-for-first-time.html" target="_blank">
                <div class="text-center mediaDiv" >
                    <div>
                       Hyperloop Pod Hovers for the First Time
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                        <div class="col-md-3 img-responsive" style="padding-right:5px;padding-left:5px">
                            <img src="assets/images/Press_page/liveScience.png" height="50px" width="50px"/>
                        </div>
                        <div class="col-md-9" style="padding-right:5px;padding-left:5px">
                            <span style="font-family: 'Lato', sans-serif; font-weight: 400;font-size:120%; color: #E00122"><b>LIVE SCIENCE  </b> </span> <br/>  <span style="font-family: 'Lato', sans-serif; font-weight: 400; color: #E00122">Oct 25, 2016  </span>
                        </div>
                    </div>
                </div>
                </a>
               </div>
                
            </div>
             
         </div>
     </section>      
          
          <div class="ct-section-header ct-section-header-decoration-center ct-u-margin-bottom-30" style="padding-top: 30px">
              <h1 class="h1 about-hyperloop-h1" style="font-family: 'Lato', sans-serif; font-weight: 500">Image Galary</h1>
            </div>
          
        <div id="ct-gallery" class="ct-gallery ct-js-gallery ct-gallery--col5 lightGallery"><a href="assets/images/Press_page/Hyperloop%20UC%20-%20Image%20background.png">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20UC%20-%20Image%20background.png" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20UC%20-%20Gray%20background.png">
            <article class="ct-gallery-item training">
              <figure><img src="assets/images/Press_page/Hyperloop%20UC%20-%20Gray%20background.png" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/pod_lake.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/pod_lake.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20Interior%20Business%20Top.jpg">
            <article class="ct-gallery-item training">
              <figure><img src="assets/images/Press_page/Hyperloop%20Interior%20Business%20Top.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hyperloop%20Interior%20Business.jpg">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Hyperloop%20Interior%20Business.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hallbach%20mfg.jpg">
            <article class="ct-gallery-item other">
              <figure><img src="assets/images/Press_page/Hallbach%20mfg.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Pipe%20Bending.JPG">
            <article class="ct-gallery-item marketing">
              <figure><img src="assets/images/Press_page/Pipe%20Bending.JPG" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Plasma%20cutting.jpg">
            <article class="ct-gallery-item other">
              <figure><img src="assets/images/Press_page/Plasma%20cutting.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Space%20Frame%201.jpg">
            <article class="ct-gallery-item other">
              <figure><img src="assets/images/Press_page/Space%20Frame%201.jpg" alt=""/>
                
              </figure>
            </article></a><a href="assets/images/Press_page/Hallbach%20assembled.jpg">
            <article class="ct-gallery-item training">
              <figure><img src="assets/images/Press_page/Hallbach%20assembled.jpg" alt=""/>
                
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
            .mediaDiv {
                background-color:#fff;text-size:250%;padding-top:3%;padding-bottom:3%;box-shadow: 10px 10px 5px #888888;
                margin-top:10px;
            }
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