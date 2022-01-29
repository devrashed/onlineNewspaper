
<?php if ($_GET['catid']=='newpayer') { ?>
<div class='title'> <em>Add New Prayer News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewpayer') { ?>
<div class='title'> <em>View All Prayer News</em> </div>

<?php } if($_GET['catid']=='editpayer') {?>

<div class='title'> <em>Edit The Prayer News</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['fozor']!='' && $_POST['zuhor']!=''&& $_POST['asor']!=''&& $_POST['magrib']!=''&& $_POST['esha']!='')
 {
 
  
$query = "INSERT INTO prayertime (`fozor`,`zuhor`,`ashor`,`magrib`,`esha`,`cdate`) Values ('".$_POST['fozor']."','".$_POST['zuhor']."','".$_POST['asor']."','".$_POST['magrib']."','".$_POST['esha']."','".$cdate."')";
  

/*var_dump ($query);  
exit ("aaa");*/
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "prayer Time News Insert Successfully";
header("location:admin.php?action=payrertime&catid=viewpayer&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=payrertime&catid=newpayer&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=payrertime&catid=newpayer&error=$error"); //
	}
   }
?>




<?php 
 if($_GET['catid']=='newpayer')
  {
?>

<div class="page">

<form action="admin.php?action=payrertime&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Fozor </label> </div>
<div class="textbar"> <input type="text" name="fozor"></div>
<div class="textbar"> <label for="Newsheadline">Zuhor </label> </div>
<div class="textbar"> <input type="text" name="zuhor"></div>
<div class="textbar"> <label for="Newsheadline">Asor </label> </div>
<div class="textbar"> <input type="text" name="asor"></div>
<div class="textbar"> <label for="Newsheadline">Magrib</label> </div>
<div class="textbar"> <input type="text" name="magrib"></div>
<div class="textbar"> <label for="Newsheadline">Esha</label> </div>
<div class="textbar"> <input type="text" name="esha"></div>

<div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>

<div class="clr"></div>
</div>

<?php } ?>



 
<?php if (@$_GET['demsg']) {?>
<br />
<div class="alert alert-success" role="alert"><?php if (isset($_GET['demsg'])) { echo "$_GET[demsg]"; } ?></div>

<?php } if (@$_GET['delerror']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['delerror'])) { echo "$_GET[delerror]"; } ?></div>

<?php } if (@$_GET['msg']) {?>
<br />
<div class="alert alert-success" role="alert"><?php if (isset($_GET['msg'])) { echo "$_GET[msg]"; } ?></div>
<?php } ?>



            
            <!--======================================= View ALL Data ===================================
            
             ==========================================================================================-->


<?php 
 if($_GET['catid']=='viewpayer')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["pid"];
if($id!="")
{
    /*$query2= "select * FROM newstype WHERE nid='$id'";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['images']);*/
	
	$qryDelete="DELETE FROM prayertime WHERE pid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=payrertime&catid=viewpayer&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=payrertime&catid=viewpayer&delerror=$delerror");
		die();
	}	
}

?>



<script type="text/javascript">

function confirmasubmit()
{
var agree= confirm("Are You Want To Delete This News?");
if (agree)
   
     return true ;
 else 
    return false;
   
}
</script>


    <table class="table table-bordered">
    <tr> 
    <td width="33" height="35" align="center">No</td>
    <td width="95" align="center">Date</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
        $query= "SELECT * FROM prayertime order by pid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35">&nbsp;</td>
   <td width="95" align="center"><?php echo $vquery['cdate'];?></td>
   <td width="56" align="left">
	<a href="admin.php?action=payrertime&catid=editpayer&pid=<?php echo $vquery['pid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=payrertime&catid=viewpayer&pid=<?php echo $vquery['pid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
    </td>
    </tr>
    <?php 
       }
    ?>
    </table>
<div class="clr"></div>
</div>


<?php } ?>










<?php 
 if($_GET['catid']=='editpayer')
  {
?>

<div class="page">

<?php
  $id= $_GET["pid"]; 
  $query= "SELECT * FROM prayertime where pid='".$_GET["pid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


 <form action="admin.php?action=editnews&catid=22" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Fozor </label> </div>
<div class="textbar"> <input type="text" name="fozor" value="<?php echo $vquery['fozor'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Zuhor </label> </div>
<div class="textbar"> <input type="text" name="zuhor" value="<?php echo $vquery['zuhor'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Asor </label> </div>
<div class="textbar"> <input type="text" name="asor" value="<?php echo $vquery['ashor'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Magrib</label> </div>
<div class="textbar"> <input type="text" name="magrib" value="<?php echo $vquery['magrib'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Esha</label> </div>
<div class="textbar"> <input type="text" name="esha" value="<?php echo $vquery['esha'];?>"></div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['pid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>




<div class="clr"></div>
</div>

<?php } ?>
