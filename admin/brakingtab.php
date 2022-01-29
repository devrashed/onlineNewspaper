<?php if ($_GET['catid']=='newbraking') { ?>
<div class='title'> <em>Braking news</em> </div>

<?php } ?>



   <?php 
 if($_GET['catid']=='1')
  {


  
  }

?>

   

<?php if ($_GET['catid']=='newbraking') { ?>

<div class="page">


<?php if (@$_GET['msg']) {?>
<br />
<div class="alert alert-success" role="alert"><?php if (isset($_GET['msg'])) { echo "$_GET[msg]"; } ?></div>
<?php } ?>


<form action="admin.php?action=editnews&catid=33" method="post" enctype="multipart/form-data">
<table width="366" border="0">

<tr>
<td width="107" height="35">Braking News </td>
<td width="220">



<?php
  ///$id= @$_GET["1"]; 
  $query= "SELECT * FROM brakingtab where bid='". 1 ."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>

  <?php if ($vquery['bupdate']=='yes') { ?>          
 <input name="bknews" type="checkbox" checked="checked" value="" />
 <?php } elseif($vquery['bupdate']!='yes') { ?>
 <input name="bknews" type="checkbox"  value="yes" />
 <?php } ?>

</td>
</tr>
<tr>
  <td height="28">&nbsp;</td>
  <td><input type="hidden" name="Regisid" value="<?php echo $vquery['bid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button></td>
</tr>
</table>

</form>



<div class="clr">  </div>
</div>  
 
<?php } ?>