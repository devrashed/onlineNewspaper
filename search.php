<?php 
include_once("header.php");
?>

<div id="wrapper">
    
    <div class="innnerleft">
    <?php 
    
    @$search=$_POST['headline'];
    
    $query = "SELECT * FROM newstype WHERE title LIKE '%$search%'";
    
    $results = mysql_query($query);
    
   /* if(mysql_num_rows($results) == 1)
    {*/
        while($row = mysql_fetch_array($results))
        {
			
	?> 
    
    <div class="searchbox">
    
    <div class="searchdate"> <?php echo $row['bdate'] ; ?> </div>
    
    <div style="width:100%; float:left; height:auto;">
       <div class="searchtitle"> <a href="indetails.php?title=<?php echo $row['title']; ?>"> <i class="fa fa-angle-double-right arrowicon"></i>&nbsp;<?php echo $row['title'];?> </a></div> 
        
       <div style="float:right;margin-top: -21px;"><?php //include_once ("category.php");?>
       
       
                         <?php if ($row['category']=="national"){ ?>
                    
                    <a href="#">জাতীয়</a>
                    
					<?php } elseif ($row['category']=="saradesh"){  ?>
                    
                    <a href="#">সারাদেশ</a>
                    
                    <?php } elseif ($row['category']=="politics"){  ?>
                    <a href="#">রাজনীতি</a>
                    
                    <?php } elseif ($row['category']=="sports"){  ?>
                     
                    <a href="#">খেলা</a>
                    
                    <?php } elseif ($row['category']=="international"){  ?>
                    
                    <a href="#">আন্তর্জাতিক</a>
                    
                    <?php } elseif ($row['category']=="entertainment"){  ?>
                    
                    <a href="#">বিনোদন</a>
                    
                    <?php } elseif ($row['category']=="educations"){  ?>
                    
                    <a href="#">শিক্ষাঙ্গন</a>
                    
                    <?php } elseif ($row['category']=="lawcourt"){  ?>
                    
                    <a href="#">আইন-আদালত</a>
                    
                    <?php } elseif ($row['category']=="health"){  ?>
                    
                    <a href="#">স্বাস্থ্য</a>
                    
                    <?php } elseif ($row['category']=="informationscience"){  ?>
                    
                    <a href="#">তথ্য-প্রযুক্তি</a>
                    
                    <?php } elseif ($row['category']=="editorial"){  ?>
                    
                    <a href="#">সম্পাদকীয়</a>
                    
                    <?php } elseif ($row['category']=="specialfeature"){  ?>
                    
                    <a href="#">বিশেষ প্রতিবেদন</a>
                    
                    <?php } elseif ($row['category']=="islam"){  ?>
                    
                    <a href="#">ইসলাম</a>
                    
                    <?php } elseif ($row['category']=="krishienvironment"){  ?>
                    
                    <a href="#">কৃষি ও পরিবেশ</a>
                    
                    <?php } elseif ($row['category']=="media"){  ?>
                    
                    <a href="#">গণমাধ্যম</a>
                    
                    <?php } elseif ($row['category']=="opentalk"){  ?>
                    
                    <a href="#">মুক্তমত</a>
                    
                    <?php } elseif ($row['category']=="interview"){  ?>
                    
                    <a href="#">সাক্ষাৎকার</a>
                    
                    <?php } elseif ($row['category']=="artculture"){  ?>
                    
                    <a href="#">শিল্প- সাহিত্য</a>
                    
                    <?php } elseif ($row['category']=="lifestyle"){  ?>
                    
                    <a href="#">লাইফস্টাইল</a>
                    
                    <?php } elseif ($row['category']=="rokomary"){  ?>
                    
                    <a href="#">রকমারি</a>
                    
                    <?php } ?>
       
       </div>
    </div>
    
    
 <div class="clr"></div>
 </div>        
      <?php 
	    }
      //}
  
    // else
   ?>
   
   <div style="width:100%; color:#F00; font-size:23px; min-height:500px; text-align:center;">
   <?php $val=mysql_num_rows($results);if($val == 0){ echo "দুঃখিত, আপনার অনুরোধ সংক্রান্ত কোন তথ্য খুঁজে পাওয়া যায়নি";}?>
   <?php 
        ///echo "আপনার অনুরুদকৃত তথ্য খুঁজে পাওয়া গেল না" ."</br>"."দু:খিত";
    
    ?>
  </div>
    
    </div>

<div class="innerright"><?php include_once("in_last.php");?></div>


</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>