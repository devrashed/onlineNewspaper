<?php if ($_GET['catid']=='newvideo') { ?>
<div class='title'> <em>Add New Video Gallary</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewvideo') { ?>
<div class='title'> <em>View All Video Gallary</em> </div>

<?php } if($_GET['catid']=='editvideo') {?>

<div class='title'> <em>Edit The Video Gallary</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['vtitle']!='' && $_POST['vurl']!='')
 {
 
  
$query = "INSERT INTO videogallery (`vtitle`,`urllink`,`cdate`) Values ('".$_POST['vtitle']."','".$_POST['vurl']."','".$cdate."')";
  
/*var_dump ($query);  
exit ("aaa");*/
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "Video gallery Insert Successfully";
header("location:admin.php?action=videogallery&catid=viewvideo&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=videogallery&catid=newvideo&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=videogallery&catid=newvideo&error=$error"); //
	}
   }
?>

<?php 
 if($_GET['catid']=='newvideo')
  {
?>

<div class="page">

<form action="admin.php?action=videogallery&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Video Title </label> </div>
<div class="textbar"> <input type="text" class="form-control" name="vtitle"></div>
<div class="textbar"> <label for="Newsheadline">Video URL </label> </div>
<div class="textbar"> <input type="text" class="form-control" name="vurl"></div>
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
 if($_GET['catid']=='viewvideo')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["vid"];
if($id!="")
{
	$qryDelete="DELETE FROM videogallery WHERE vid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=videogallery&catid=viewvideo&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=videogallery&catid=viewvideo&delerror=$delerror");
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
    <td width="95" align="center">Video Title</td>
    <td width="95" align="center">Date</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
        $query= "SELECT * FROM videogallery order by vid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35" align="center"><?php $i=1; echo $i++; ?></td>
    <td width="33" height="35"><?php echo $vquery['vtitle'];?></td>
   <td width="95" align="center"><?php echo $vquery['cdate'];?></td>
   <td width="56" align="left">
	<a href="admin.php?action=videogallery&catid=editvideo&vid=<?php echo $vquery['vid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=videogallery&catid=viewvideo&vid=<?php echo $vquery['vid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
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
 if($_GET['catid']=='editvideo')
  {
?>

<div class="page">

<?php
  $id= $_GET["vid"]; 
  $query= "SELECT * FROM videogallery where vid='".$_GET["vid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


 <form action="admin.php?action=editnews&catid=24" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Video Title </label> </div>
<div class="textbar"> <input type="text" class="form-control" name="vtitle" value="<?php echo $vquery['vtitle'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Video URL </label> </div>
<div class="textbar"> <input type="text" class="form-control" name="vurl" value="<?php echo $vquery['urllink'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Youtube Embaded </label> </div>
<div class="textbar"> <input type="text" class="form-control"  name="videogallery" placeholder="YouTube Video URL" value="<?php echo $vquery['videogallery'];?>"></div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['vid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>




<div class="clr"></div>
</div>

<?php } ?>
