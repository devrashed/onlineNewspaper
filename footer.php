<footer>


<div class="footer-col"> 
 <br>
 <div class="foot-col"> 

 <ul>
 <li><a href="index.php">মূলপাতা</a></li>
 <li><a href="inn.php?catid=national">জাতীয়</a></li>
 <li><a href="inn.php?catid=politics">রাজনীতি</a></li>
 <li><a href="inn.php?catid=international">আন্তর্জাতিক</a></li>
 <li><a href="inn.php?catid=sports">খেলাধুলা</a></li>
 <li><a href="inn.php?catid=finance">অর্থ-বাণিজ্য</a></li>
 <li><a href="inn.php?catid=informationscience">তথ্য-প্রযুক্তি</a></li>
 <li><a href="inn.php?catid=entertainment">বিনোদন</a></li>
 <li><a href="inn.php?catid=health">স্বাস্থ্যকথা</a></li>
 </ul>

 </div>



 <div class="foot-col"> 

 <ul>
 <li><a href="inn.php?catid=islam">ইসলাম</a></li>
 <li><a href="inn.php?catid=khatme">খাতমে নাবুয়্যাত</a></li>
 <li><a href="inn.php?catid=khatme">দরবার শারিফ</a></li>
 <li><a href="inn.php?catid=saradesh">দেশবাংলার খবর</a></li>
 <li><a href="inn.php?catid=educations">শিক্ষার আলো</a></li>
 <li><a href="inn.php?catid=lawcourt">আইন-আদালত</a></li>
 <li><a href="inn.php?catid=editorial">সম্পাদকীয়</a></li>
 <li><a href="inn.php?catid=specialfeature">বিশেষ কলাম</a></li>
 <li><a href="inn.php?catid=krishienvironment">কৃষি ও পরিবেশ</a></li>
 </ul>

 </div>
 
 
 
 <div class="foot-col"> 

 <ul>
 <li><a href="inn.php?catid=opentalk">খোলা কলম</a></li>
 <li><a href="inn.php?catid=interview">সাক্ষাৎকার</a></li>
 <li><a href="inn.php?catid=artculture">শিল্প- সাহিত্য</a></li>
 <li><a href="inn.php?catid=lifestyle">লাইফস্টাইল</a></li>
 <li><a href="inn.php?catid=rokomary">রকমারি</a></li>
 </ul>

 </div>


  <div class="foot-col" style="border-left:4px solid #2f88d6; padding-left:10px;"> 

 <ul>

 <li><a href="aboutus.php">আমাদের কথা</a></li>
 <li><a href="ourfamily.php">আমাদের পরিবার</a></li>
 <li><a href="adrules.php">বিজ্ঞাপন মূল্য তালিকা</a></li>
 <li><a href="contactus.php">যোগাযোগ</a></li>
</ul>

 </div>

<div class="clr"></div>
</div>



<?php

  $query= "SELECT * FROM brakingtab where bid='". 1 ."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
  
?>

 <?php if ($vquery['bupdate']=='yes') { ?>          
<div class="uppbraking"> 
 <div class="braking">ব্রেকিং নিউজ :</div> 

<div class="topbraking">
<div class="topnews"><?php include("brakingnews.php");?></div>
</div>

 </div>
<?php } ?>


</footer>
<div class="footer-bottom">

<div class="autor">সম্পাদক মণ্ডলীর সভাপতি : ব্যারিস্টার ডঃ এম হায়দার আলী</div>
<div class="autor">সম্পাদক ও প্রকাশক : মাওলানা মাসউদুর রহমান</div>

<div class="foot-contact">
বাসা নং- ১/৮ স্বপ্ননীড় (৩য় তলা),পল্লবি মিরপুর,ঢাকা-১২১৬। <br />
ফোনঃ ০১৯১-৪২৫৯০৪৫<br />
বার্তা বিভাগ : ০১৭১-৩৫৮৭০৩৭, ০১৭৮-২৬৭৮২০৮,০১৭৮-১৪৫২৪৪৮,<br />
<small>বিক্রমপুরী মিডিয়া হতে প্রকাশিত </small>
</div>


<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54155619-1', 'auto');
  ga('send', 'pageview');

</script>-->

</div>