<div class="in-right-title"> সর্বশেষ সংবাদ </div>
   <?php
	$query= "SELECT * FROM newstype order by nid DESC LIMIT 15";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
<table width="100%" height="92">
                  <tr>
                  <td width="83" rowspan="3" valign="top"><a href="#"> <img src="admin/<?php echo $vquery['images']; ?>" class="lats-img"></a></td>
                  <td width="306" height="35" valign="top" > <div class="latspace intitle"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></div></td>
                  </tr>
                 <!-- <tr>
                    <td height="23" valign="middle" style=" color:#999999;"><em><div class="datetime latspace "><?php echo $vquery ['bdate'];?>&nbsp;<?php echo $vquery ['btime'];?></div> </em></td>
                    </tr>
                  <tr>
                    <td height="21" valign="middle">
                    <div class="latspace intitle">
                    <?php if ($vquery['category']=="national"){ ?>
                    
                    <a href="inn.php?catid=national">জাতীয়</a>
                    
					<?php } elseif ($vquery['category']=="saradesh"){  ?>
                    
                    <a href="inn.php?catid=saradesh">সারাদেশ</a>
                    
                    <?php } elseif ($vquery['category']=="politics"){  ?>
                    <a href="inn.php?catid=politics">রাজনীতি</a>
                    
                    <?php } elseif ($vquery['category']=="sports"){  ?>
                     
                    <a href="inn.php?catid=sports">খেলা</a>
                    
                    <?php } elseif ($vquery['category']=="international"){  ?>
                    
                    <a href="inn.php?catid=international">আন্তর্জাতিক</a>
                    
                    <?php } elseif ($vquery['category']=="entertainment"){  ?>
                    
                    <a href="inn.php?catid=entertainment">বিনোদন</a>
                    
                    <?php } elseif ($vquery['category']=="educations"){  ?>
                    
                    <a href="inn.php?catid=educations">শিক্ষাঙ্গন</a>
                    
                    <?php } elseif ($vquery['category']=="lawcourt"){  ?>
                    
                    <a href="inn.php?catid=lawcourt">আইন-আদালত</a>
                    
                    <?php } elseif ($vquery['category']=="health"){  ?>
                    
                    <a href="inn.php?catid=health">স্বাস্থ্য</a>
                    
                    <?php } elseif ($vquery['category']=="informationscience"){  ?>
                    
                    <a href="inn.php?catid=informationscience">তথ্য-প্রযুক্তি</a>
                    
                    <?php } elseif ($vquery['category']=="editorial"){  ?>
                    
                    <a href="inn.php?catid=editorial">সম্পাদকীয়</a>
                    
                    <?php } elseif ($vquery['category']=="specialfeature"){  ?>
                    
                    <a href="inn.php?catid=specialfeature">বিশেষ প্রতিবেদন</a>
                    
                    <?php } elseif ($vquery['category']=="islam"){  ?>
                    
                    <a href="inn.php?catid=islam">ইসলাম</a>
                    
                    <?php } elseif ($vquery['category']=="krishienvironment"){  ?>
                    
                    <a href="inn.php?catid=krishienvironment">কৃষি ও পরিবেশ</a>
                    
                    <?php } elseif ($vquery['category']=="media"){  ?>
                    
                    <a href="inn.php?catid=media">গণমাধ্যম</a>
                    
                    <?php } elseif ($vquery['category']=="opentalk"){  ?>
                    
                    <a href="inn.php?catid=opentalk">মুক্তমত</a>
                    
                    <?php } elseif ($vquery['category']=="interview"){  ?>
                    
                    <a href="inn.php?catid=interview">সাক্ষাৎকার</a>
                    
                    <?php } elseif ($vquery['category']=="artculture"){  ?>
                    
                    <a href="inn.php?catid=artculture">শিল্প- সাহিত্য</a>
                    
                    <?php } elseif ($vquery['category']=="lifestyle"){  ?>
                    
                    <a href="inn.php?catid=lifestyle">লাইফস্টাইল</a>
                    
                    <?php } elseif ($vquery['category']=="rokomary"){  ?>
                    
                    <a href="inn.php?catid=rokomary">রকমারি</a>
                       
              
                    <?php } ?>
                   </div> 
                    </td>
                  </tr>-->
                  </table>
   <?php } ?>