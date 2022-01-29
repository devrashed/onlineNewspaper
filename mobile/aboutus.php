<?php 
include_once("mhead.php");
?>

<div class="mwrapper">
   
      <header>

        <div class="mdate">
     <?php include_once("gdate.php");?>
       ঢাকা&nbsp;<?php echo "$presentDate"; ?>,  
    <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script>
         
    </div>

    <div id="mlogo"><a href="index.php"><img src="plogo.png"></a></div>
    <div class="mmenu"> 
    
    <div id="navmenu"> <a href="#mfooter"><i class="fa fa-reorder"></i> </a></div>
    
    <div class="desktop"> <a href="http://currentnewsbd24.com"> <i class="fa fa-desktop awefont"></i></a></div>
     
    </div> 
   
</header>
    
    <div class="innnerleft">

    
<?php
	
	$query= "SELECT * FROM self WHERE category='aboutus' order by sfid DESC LIMIT 1";
	$rsquery= mysql_query($query); 
	while ($vquery2=mysql_fetch_array($rsquery))
    {
 ?>
    
     <h3 class="in-title"><?php echo $vquery2['stitle'];?></h3>

   <div class="in-details"> <?php echo $vquery2['details'];?>  </div>
    
    
    
 
   <?php } ?> 
    
    
    
  </div>
    
    
 



</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("mfooter.php");?>