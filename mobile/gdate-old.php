
<?php 

 $CUR_D_Bangladesh  = gmdate("H:i:s",gmmktime(gmdate("H")+6,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
 $GM_D              = gmdate("l, F j, Y",gmmktime(gmdate("H")+6,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
   
// @$currentDate = date("l, F j, Y");
@$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
@$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার');
@$presentDate = str_replace($engDATE, $bangDATE, $GM_D);


@$engtime =array(1,2,3,4,5,6,7,8,9,0,am,pm);
@$bangtime =array('১','২','৩','৪','৫','৬','৭','৮','৯','০',এম,পিএম);
@$presenttime = str_replace($engtime, $bangtime, $CUR_D_Bangladesh);  
?>

<!--========================================================================================================================================================================================================================================================================================================================-->

<?php
 $CUR_D_Bangladesh  = gmdate("H:i:s",gmmktime(gmdate("H")+6,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
//$GM_D    = gmdate("Y-m-d",gmmktime(gmdate("H")+3,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y")));
  $GM_D    = gmdate("l, F j, Y",gmmktime(gmdate("H")+6,gmdate("i"),gmdate("s"),gmdate("m"),gmdate("d"),gmdate("Y"))); 
//@$currentDate = date("F j,Y");
@$engDATE = array(1,2,3,4,5,6,7,8,9,0,January,February,March,April,May,June,July,August,September,October,November,December,Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday);
@$bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
বুধবার','বৃহস্পতিবার','শুক্রবার' 
);
@$convertedDATE = str_replace($engDATE, $bangDATE, $GM_D);


@$engtime =array(1,2,3,4,5,6,7,8,9,0,am,pm);
@$bangtime =array('১','২','৩','৪','৫','৬','৭','৮','৯','০',এম,পিএম);
@$convertedtime = str_replace($engtime, $bangtime, $GM_D );
 


?>