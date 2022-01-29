<?php 
date_default_timezone_set("Asia/Dhaka");
$timestamp = date("h:i:s a", time()); 
//$cdate=date("Y-m-d");

@$currentDate = date("l, F j, Y");
@$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
@$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
@$presentDate = str_replace($engDATE, $bangDATE, $currentDate);


@$engtime =array(1,2,3,4,5,6,7,8,9,0,am,pm);
@$bangtime =array('১','২','৩','৪','৫','৬','৭','৮','৯','০',এম,পিএম);
@$presenttime = str_replace($engtime, $bangtime, $timestamp);
?>




<!--========================================================================================================================================================================================================================================================================================================================-->


<?php
date_default_timezone_set("Asia/Dhaka");
$bantimestamp = date("h:i a", time()); 
?>

<?php

@$currentDate = date("F j,Y");
@$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
@$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
@$convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);


@$engtime =array(1,2,3,4,5,6,7,8,9,0,am,pm);
@$bangtime =array('১','২','৩','৪','৫','৬','৭','৮','৯','০',এম,পিএম);
@$convertedtime = str_replace($engtime, $bangtime, $bantimestamp);
 


?>
