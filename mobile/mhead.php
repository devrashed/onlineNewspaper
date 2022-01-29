<!doctype html>
<html>
<head>
<meta charset="utf-8">
<?php include "../dbconnect.php";?>
<?php include "function.php";?>

     <link href='../images/favicon.ico' rel='icon' type='image/x-icon'/>  
     <link rel="stylesheet" href="responsive.css" type="text/css" media="all" />
     <link rel="stylesheet" href="media_query.css" type="text/css" media="all" />
     <link rel="stylesheet" href="mstyle.css" type="text/css" media="all" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
<meta property="og:street-address" content="Shopno nir(3rd Floor)Pollbi Dhaka"/>
<meta property="og:region" content="BD"/>
<meta property="og:postal-code" content="1216"/>
<meta property="og:country-name" content="BAN"/>


<meta name="twitter:site" content="Bangladeshi Online News ">
<meta name="twitter:creator" content="@Steps2BuildSite">
<meta name="twitter:url" content=""> <!--https://twitter.com/NewsinBD2014-->
<meta name="twitter:title" content="<?php echo $vquery2['title']; ?>">
<meta name="twitter:description" content="<?php echo strip_tags(substr($vquery2['description'], 0, 100));?>">

<?php } ?>
<?php include("title.php");?>        
     
<script type="application/javascript">
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{390442137798998}',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
 </script>
    
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId  : '390442137798998',
		  status : true, 
		  cookie : true, 
		  xfbml  : true  
		});
	  };
	
	  (function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
<script type="text/javascript">// <![CDATA[
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
if(!d.getElementById(id)){js=d.createElement(s);js.id=id;
js.async=true;
js.src="//platform.twitter.com/widgets.js?3b68a3";
fjs.parentNode.insertBefore(js,fjs);
}}(document,"script","twitter-wjs");
// ]]></script>

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'bn'}
</script>
<!--Share this -->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9d2cdc9b-e72c-42ae-b766-fd411f8b21b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<body>
