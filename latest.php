

    <div id="horizontalTab">
        <ul>
            <li><a href="#tab-1">সর্বশেষ সংবাদ</a></li>
            <li><a href="#tab-2">সর্বাধিক পঠিত সংবাদ</a></li>
        </ul>

        <div id="tab-1">
            <p>
            
            <div class="news-top-headline">
            
                <ul> 
                
                     <?php
	
	$query= "SELECT * FROM newstype WHERE important='yes' AND bracking='yes' order by nid DESC LIMIT 8";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
                  <li>
                  <table width="100%" height="auto">
                  <tr>
                  <td width="102" rowspan="3"><a href="#"> <img src="admin/<?php echo $vquery['images']; ?>" class="lats-img"></a></td>
                  <td width="469" height="36" valign="top" > <div class="latspace"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></div><br />
                  <em><div class="datetime latspace"><?php echo $vquery ['bdate'];?>&nbsp;<?php echo $vquery ['btime'];?></div> </em>
                  </td>
                  </tr>
               </table>
                  </li>
              <?php } ?> 
              
         <?php
	
	$query= "SELECT * FROM newstype WHERE bracking='yes' order by nid DESC LIMIT 15";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
                  <li>
                  <table width="100%" height="auto">
                  <tr>
                  <td width="102" rowspan="3"><a href="#"> <img src="admin/<?php echo $vquery['images']; ?>" class="lats-img"></a></td>
                  <td width="469" height="36" valign="top" > <div class="latspace"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a></div><br />
                  <em><div class="datetime latspace"><?php echo $vquery ['bdate'];?>&nbsp;<?php echo $vquery ['btime'];?></div> </em>
                  </td>
                  </tr>
                  <!--<tr>
                    <td height="23" valign="middle" style=" color:#999999;"></td>
                    </tr>-->
                 </table>
                  </li>
              <?php } ?>      
              
               
                </ul>
            
            
            </div>
            
            </p>
        </div>
        
        
            <!--MOST READ NEWS-->
        
        
        <div id="tab-2">
          
          
                   <p>
            
            <div class="news-top-headline">
            
                <ul> 
                
                     <?php
	
	$query= "SELECT * FROM newstype order by nstatus DESC LIMIT 20";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>  
                  <li>
                  <table width="100%" height="71">
                  <tr>
                  <td width="102" rowspan="3" valign="top" ><a href="#"> <img src="admin/<?php echo $vquery['images']; ?>" class="lats-img"></a></td>
                  <td width="469" height="65" valign="top" class="tabcrome"><a href="indetails.php?title=<?php echo $vquery['title']; ?>"><?php echo $vquery['title']; ?></a>
                  <br />
                  <em><div class="datetime"><?php echo $vquery ['bdate'];?>&nbsp;<?php echo $vquery ['btime'];?></div> </em>
                  </td>
                  </tr>
                  <!--<tr>
                    <td height="23" valign="middle" style=" color:#999999;" class="tabcrome"></td>
                    </tr>-->
                  <!--<tr>
                    <td height="21" valign="middle" class="tabcrome">-->
                    
			        <?php /*if ($vquery['category']=="national"){ ?>
                    
                    <a href="inn.php?catid=na">জাতীয়</a>
                    
					<?php } elseif ($vquery['category']=="saradesh"){  ?>
                    
                    <a href="inn.php?catid=">সারাদেশ</a>
                    
                    <?php } elseif ($vquery['category']=="politics"){  ?>
                    <a href="inn.php?catid=poli">রাজনীতি</a>
                    
                    <?php } elseif ($vquery['category']=="sports"){  ?>
                     
                    <a href="inn.php?catid=sports">খেলা</a>
                    
                    <?php } elseif ($vquery['category']=="international"){  ?>
                    
                    <a href="inn.php?catid=int">আন্তর্জাতিক</a>
                    
                    <?php } elseif ($vquery['category']=="entertainment"){  ?>
                    
                    <a href="inn.php?catid=enter">বিনোদন</a>
                    
                    <?php } elseif ($vquery['category']=="educations"){  ?>
                    
                    <a href="inn.php?catid=edu">শিক্ষাঙ্গন</a>
                    
                    <?php } elseif ($vquery['category']=="lawcourt"){  ?>
                    
                    <a href="inn.php?catid=law">আইন-আদালত</a>
                    
                    <?php } elseif ($vquery['category']=="health"){  ?>
                    
                    <a href="inn.php?catid=hel">স্বাস্থ্য</a>
                    
                    <?php } elseif ($vquery['category']=="informationscience"){  ?>
                    
                    <a href="inn.php?catid=inf">তথ্য-প্রযুক্তি</a>
                    
                    <?php } elseif ($vquery['category']=="editorial"){  ?>
                    
                    <a href="inn.php?catid=ed">সম্পাদকীয়</a>
                    
                    <?php } elseif ($vquery['category']=="specialfeature"){  ?>
                    
                    <a href="inn.php?catid=sf">বিশেষ প্রতিবেদন</a>
                    
                    <?php } elseif ($vquery['category']=="islam"){  ?>
                    
                    <a href="inn.php?catid=isl">ইসলাম</a>
                    
                    <?php } elseif ($vquery['category']=="krishienvironment"){  ?>
                    
                    <a href="inn.php?catid=ag">কৃষি ও পরিবেশ</a>
                    
                    <?php } elseif ($vquery['category']=="media"){  ?>
                    
                    <a href="inn.php?catid=md">গণমাধ্যম</a>
                    
                    <?php } elseif ($vquery['category']=="opentalk"){  ?>
                    
                    <a href="inn.php?catid=pt">মুক্তমত</a>
                    
                    <?php } elseif ($vquery['category']=="interview"){  ?>
                    
                    <a href="inn.php?catid=in">সাক্ষাৎকার</a>
                    
                    <?php } elseif ($vquery['category']=="artculture"){  ?>
                    
                    <a href="inn.php?catid=art">শিল্প- সাহিত্য</a>
                    
                    <?php } elseif ($vquery['category']=="lifestyle"){  ?>
                    
                    <a href="inn.php?catid=lif">লাইফস্টাইল</a>
                    
                    <?php } elseif ($vquery['category']=="rokomary"){  ?>
                    
                    <a href="inn.php?catid=rk">রকমারি</a>
                       
              
                    <?php }*/ ?>
                   <!-- </td>
                  </tr>-->
                  </table>
                  </li>
              <?php } ?>  
                </ul>
            
            
            </div>
            
            </p>
          

        </div>
    </div>

   