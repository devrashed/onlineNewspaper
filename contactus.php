<?php 
include_once("header.php");
?>

<div id="wrapper">
    
    <div class="innnerleft">

  <h3 class="in-title">আমাদের সাথে যোগাযোগের  ঠিকানা</h3> 
 
  <div class="in-details"> বাসা নং-১৬৭ (৪র্থ তলা), রোড নং- ০৩, নিউ ডিওএইচএস, মহাখালী, ঢাকা-১২০৬।<br>
  ফোনঃ ০২ ৯৮৯৪৯৭১,ফ্যাক্স : ০২ ৯৮৯৪৯৭১<br>
 বার্তা বিভাগ : ০১৭২১ ১০৩৫৭১, ০১৯৭১ ১০৩৫৭১, ০১১৯৫ ০৮৭১৪২, ০১৬১৫ ০৮৭১৪২, ০১৬৭৬ ০৬২১৫৭<br>
ই-মেইল : newsinbangladesh@gmail.com  </div>
    
  
 <div class="contctus"> আপনার জিজ্ঞাসা</div>
  <br>
  <br>
<br>


 <form action="member.php"  name="contact" method="post">

 	<table width="100%" border="0" align="center" class="contactname">
   <tr>
    <td width="170" height="44" valign="top"><strong>* <span class="style2">গুরুত্বপূর্ণ</span></strong></td>
    <td width="420" style="color:#FF0000; font-size:14px;"> <?php if (isset($_GET['msg'])) {
          echo "<div class=\"message\"><div>$_GET[msg]</div></div>";
          }
		  ?></td>
  </tr>
  <tr>
    <td height="29" valign="top" style="">আপনার নাম  : *</td>
    <td valign="top"><label>
      <input type="text" name="name" size="40" class="searh_box"/>
    </label></td>
  </tr>
  <tr>
    <td height="36">ইমেইল :</td>
    <td><label>
      <input type="text" name="email" size="40" class="searh_box"/>
    </label></td>
  </tr>
  <tr>
    <td height="33">ফোন নাম্বার : <strong>*</strong></td>
    <td><input type="text" name="phone" size="40" class="searh_box"/></td>
  </tr>
  <tr>
    <td height="44" valign="top" >মন্তব্য  : * </td>
    <td valign="top"><label>
      <textarea name="comment" cols="32" rows="7" class="textareabox"></textarea>
    </label></td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td><input type="submit" name="Submit" value="Submit" onclick="return contalt_valid()" class="btn"/></td>
  </tr>
  <tr>
    <td>&nbsp;	</td>
    <td><label></label></td>
  </tr>
</table>
</form>
    
    
  </div>
    
    
 
    


<div class="innerright"><?php include_once("innrlatest.php");?></div>






</div><!--END THE Wrapper-->
<br>
<div class="clr"></div>
<?php include_once ("footer.php");?>