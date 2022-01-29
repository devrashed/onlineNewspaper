
	<link href='fonetic/Nova+Slim.css' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/master.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAcindetails', 'UA-424397-3']);
	  _gaq.push(['_trackPageview']);
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	
	<div class="wrap">
		<div class="wrapper">
      <form action="#" method="post" enctype="application/x-www-form-urlencoded">
		<span class="searchname">উনিজয়</span><input type="text" class="bangla search">
        <input name="" type="submit" name="search" value="সার্চ" style="height:29px;"/>
     </form>							
		</div>
	</div>
	
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) {return;}
	  js = d.createElement(s); js.id = id;
	 // js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1&appId=142556639174692";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
       
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
