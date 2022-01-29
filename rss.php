<?php 

header('Content-Type: text/xml');
?>
<?php echo '<?xml version="1.0" encoding="ISO-8859-1"?>';?>
<rss version="2.0">
<channel>
   <title>Website Title / Feed Title</title>
   <description>Website Description / Feed Description</description>
   <link>http:// [ link to your website ]</link>
    <!-- <lastBuilddate>Date last Built ex. Fri, 08 Mar 12 10:44:37</lastBuildDate>
 <item>
      <title>Post Title / Content Title</title>
      <description>Part of the content or description for the content.</description>
      <link>[link to the content]</link>
      <guid>[link to the content or unique identifier URL]</guid>
      <pubDate> Date published ex. Fri, 08 Mar 12 10:44:37</pubDate>
   </item>-->
   
   
   <?php

	include "dbconnect.php";
	$query= "SELECT * FROM newstype order by nid DESC LIMIT 10";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {


?>

<item>
   <title><?php echo $vquery2['title']; ?></title>
   <description><?php echo $vquery2['description']; ?></description>
   <link>https://rashed.com</link>
</item>

<?php } ?>

</channel>
</rss>