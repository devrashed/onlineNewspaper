<?php
ob_start();
?>
<!doctype html>
<html><head>
<meta charset="utf-8">
<?php
include "dbconnect.php";
include "function.php";
?>
<?php
$query= "SELECT * FROM newstype where title='".@$_REQUEST['title']."'";
$rsquery= mysql_query($query); 
while ($vquery2=mysql_fetch_array($rsquery))
{
?> 
<title><?php echo $vquery2['title']; ?></title>
<meta property="og:title" content="<?php echo $vquery2['title']; ?>"/>
<meta property="og:url" content="http://currentnewsbd24.com/indetails.php?title=<?php echo $vquery2['title']; ?>"/>
<meta property="og:image" content="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>">
<meta property="og:site_name" content="http://currentnewsbd24.com">
<meta property="og:description" content="<?php echo strip_tags(substr($vquery2['description'], 0, 500));?>"/>
<meta property="og:type" content="article" />
<meta property="fb:app_id" content="390442137798998" /> 
<meta property="fb:admins" content="100001149045992"/>
<meta property="og:street-address" content="Shopno nir(3rd Floor)Pollbi Dhaka"/>
<meta property="og:region" content="BD"/>
<meta property="og:postal-code" content="1216"/>
<meta property="og:country-name" content="BAN"/>

<meta name="og:title" content="<?php echo $vquery2['title']; ?>"/>
<meta name="og:url" content="http://currentnewsbd24.com/indetails.php?title=<?php echo $vquery2['title']; ?>"/>
<meta name="og:image" content="http://currentnewsbd24.com/admin/<?php echo $vquery2['images'];?>">
<meta name="og:site_name" content="http://currentnewsbd24.com">
<meta name="og:description" content="<?php echo strip_tags(substr($vquery2['description'], 0, 500));?>"/>
<meta name="og:type" content="article" />
<meta name="fb:app_id" content="390442137798998" /> 
<meta name="fb:admins" content="100001149045992"/>
<meta name="og:street-address" content="Shopno nir(3rd Floor)Pollbi Dhaka"/>
<meta name="og:region" content="BD"/>
<meta name="og:postal-code" content="1216"/>
<meta name="og:country-name" content="BAN"/>


<meta name="twitter:site" content="Bangladeshi Online News">
<meta name="twitter:creator" content="@Steps2BuildSite">
<meta name="twitter:url" content="#">
<meta name="twitter:title" content="<?php echo $vquery2['title']; ?>">
<meta name="twitter:description" content="<?php echo strip_tags(substr($vquery2['description'], 0, 100));?>">

<?php } ?>
<?php include("title.php");?>    
     <meta name="alexaVerifyID" content="T-q3RU131Z1esMXfCNYpRLZza0s"/>  
     <link href='images/favicon.ico' rel='icon' type='image/x-icon'/> 
     <link rel="stylesheet" href="style/style.css" type="text/css" media="all" />
     <link rel="stylesheet" href="slideshow/gumby7ef2.css" type="text/css" media="all" />
     <link rel="stylesheet" href="slideshow/owl.carousel7ef2.css" type="text/css" media="all" />
     <link rel="stylesheet" href="slideshow/style7ef2.css" type="text/css" media="all" />
  
    <!--TAB-->
    <link type="text/css" rel="stylesheet" href="style/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="style/tab.css" />

    <!--Deshbangla TAB-->
    <link rel="stylesheet" type="text/css" href="style/saradeshtab.css"/> 
    
    
     <!--Light box--> 
     
     <link rel="stylesheet" type="text/css" href="lightbox/lightbox.css"/> 
     <link rel="stylesheet" type="text/css" href="lightbox/screen.css"/> 
    
     <!--national-->
    <link rel="stylesheet" type="text/css" href="national/national.css"/> 
     
   <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
   <!--  <script type="text/javascript" src="js/bootstrap.js"></script>-->
   
   <script type="text/javascript" src="js/custome.js"></script>
     
     <!--Light box-->   
   <script type="text/javascript" src="lightbox/lightbox.js"></script>
     
    <!--Awesomefont--> 
     
   <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">-->
    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    
   <script type="text/javascript" src="js/coin-slider.js"></script>
     
   <!--TAB-->
   <script src="js/jquery.responsiveTabs.js" type="text/javascript"></script> 
  
   <!--===SEARCH===-->
    
    <link href='fonetic/Nova+Slim.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/master.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-424397-3']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
   
 <script type="text/javascript" src="fonetic/widgets.js"></script>
	<script src="fonetic/avro-v1.1.4.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
		$(function(){
			$('input').avro({'bn':true}, function(isBangla) {
				if(isBangla) {
					$('.mode').text('English');
				} else {
					$('.mode').text('Bangla');
				}
			});
		});
	</script>
	<script type="text/javascript" charset="utf-8">
		$(function(){
			$('a.download').hover(function(){$(this).html("Only <strong>3.37KB</strong> gzipped");}, function(){$(this).html("<br /><strong>Download</strong>v1.1.4");});
		});
	</script>
    
   <!--slideshow-->
   <script type="text/javascript" src="slideshow/custom7ef2.js"></script>
   <script type="text/javascript" src="slideshow/custom7ef2.js"></script>


   <!--font Size-->

<script type="text/javascript">
	 $(document).ready(function() { 
		$('#incfont').click(function(){	   
        curSize= parseInt($('#content').css('font-size')) + 2;
		if(curSize<=30)
        $('#content').css('font-size', curSize);
        }); 
		 
		$('#decfont').click(function(){	   
        curSize= parseInt($('#content').css('font-size')) - 2;
		if(curSize>=12)
        $('#content').css('font-size', curSize);
        });
		
		$('#orsize').click(function(){	   
        curSize= parseInt($('#content').css('font-size'));
		if(curSize=16)
        $('#content').css('font-size', curSize);
        });
		
		 
	});
</script>

 <!-- Scrool--> 
 <script type="text/javascript" src="scrool/jquery.cssAnimate.mini.js"></script>
 <script type="text/javascript" src="scrool/jquery.themepunch.services.min.js"></script>
 <script type="text/javascript" src="scrool/jquery.touchwipe.min.js"></script> 
  
 <script type="text/javascript">

				$(document).ready(function() {
				  // $.noConflict();

					jQuery('#services-example-9').services(
						{
							width:1112,
							height:240,
                            slideAmount:5,
							slideSpacing:30,
							touchenabled:"on",
							mouseWheel:"on",
							hoverAlpha:"off",
							slideshow:2000,
							hovereffect:"on",
						  callBack:function() { }

						});

				});
			</script>
            
   
   
    
    <script type="text/javascript">
	$(document).ready(function(){
			// hide #back-top first
			$("#back-top").hide();
			
			// fade in #back-top
			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 100) {
						$('#back-top').fadeIn();
					} else {
						$('#back-top').fadeOut();
					}
				});
						   $('#back-top a').bind("mouseover", function(){
					var color  = $('#back-top').css("background-color");
		
					$('#back-top').css("background", "none");
		
					$(this).bind("mouseout", function(){
						$('#back-top').css("background", color);
					})    
				})   
				// scroll body to 0px on click
				$('#back-top a').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 800);
					return false;
				});
			});
		});
	</script>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9d2cdc9b-e72c-42ae-b766-fd411f8b21b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>  
             
</head>
<body>
<!--Share -Send- comment-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=310456059125240&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  

<!--Like Button-->

<!--<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=310456059125240&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    
<script type="text/javascript">// <![CDATA[
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.async=true;
js.src="//platform.twitter.com/widgets.js?3b68a3";
fjs.parentNode.insertBefore(js,fjs);
}}(document,"script","twitter-wjs");
// ]]></script>

<script src="js/platform.js" async defer>
  {lang: 'bn'}
</script>

<script type="text/javascript">

  if (screen.width <= 800) {
    window.location = "http://mobile.currentnewsbd24.com";
  }	
</script>  

<script type='text/javascript' src='newtop/lib/jquery-migrate.min1576.js?ver=1.2.1'></script>
<script type='text/javascript' src='newtop/lib/fluidvids7ef2.js?ver=1.5'></script>
<script type='text/javascript' src='newtop/lib/owl.carousel7ef2.js?ver=1.5'></script>


<header>

<?php //include_once("gdate.php");?>
     <div class="headertop_wrapper"> 
       <div class="header_top_wrapper_inner"> 
         <div class="header_left_top_inner"> 
         <?php include_once("gdate.php");?>
         ঢাকা <?php echo $presenttime.",&nbsp;".$presentDate;?>,  
         <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
         </div>       
       
      <div class="header_right_top_inner"> 
             <!--class="mobileicon"-->
            <div class="mobilversion"> <a href="mobile/index.php">
            <i class="fa fa-mobile-phone" style="font-size:30px;color:#FFF;float:left; margin-top:6px;"></i>
            &nbsp; <span class="mobiletext">মোবাইল ভার্সন</span></a> </div>     
            
       <div class="wrap">
		 <div class="wrapper">
      <form action="search.php" method="post" enctype="application/x-www-form-urlencoded">
		<span class="searchname">ইউনিবিজয়</span><input type="text" name="headline" class="bangla search">
        <button type="submit" class="btn-info seachbtn">সার্চ</button>        
     </form>							
		 </div>
	</div>     
              
      </div>   
      
       </div>
    <div class="clr">  </div>  
     </div>
     <div class="clr"></div>
     
    <div class="logo_bar"> 
        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="currentnewsbd24.com"></a></div>
        
    <div class="topadd"> 
       <?php
	// echo $CGM_D;
		$query="SELECT * FROM advertise where block='block-1' order by aid DESC LIMIT 1";
		$rsquery= mysql_query($query); 
		while ($vquery=mysql_fetch_array($rsquery))
		{
		?>  
		<?php if ($CGM_D>=$vquery['end_date']) { ?>
		<!--strtotime($today) >= strtotime($dbEndDate)-->
       <?php echo "Here is your Advertisment"; ?> 
		<?php 
		} else {
		?>
        <a href="<?php echo $vquery['weburl'];?>" target="_blank"><img src="admin/<?php echo $vquery['titleimages'];?>"></a>
         <?php 
		}
	}
	   //echo $CGM_D; "2014-12-18"<="2014-12-19"
	//echo $CGM_D==$vquery['end_date'];
     ?><!--1-->
      </div>    
     </div>
    <div class="navigation"><?php include_once("topmenu.php");?></div>

</header>