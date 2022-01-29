<?php if ($_GET['catid']=='newaj') { ?>
<div class='title'> <em>Aj ki kothay News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewaj') { ?>
<div class='title'> <em>View All Aj ki kothay News</em> </div>

<?php } if($_GET['catid']=='editaj') {?>

<div class='title'> <em>Edit The Aj ki kothay News</em> </div>
<?php } ?>




                          <!--======================================= Insert all Data ===================================
            
                           ==========================================================================================-->




<?php 
 if($_GET['catid']=='1')
  {

if($_POST['sptitle']!='' && $_POST['editor1']!='')
 {

$query = "INSERT INTO newstype (`title`,`category`,`description`,`ctime`,`cdate`,`btime`,`bdate`) Values ('".$_POST['sptitle']."','".kothay."',
'".$_POST['editor1']."','".$timestamp."','".$cdate."','".$presenttime."','".$presentDate."')";
  
/*var_dump ($query);
exit ("aaa");*/
  
  
  
$Query2= mysql_query($query) or die(mysql_error());

//var_dump ("aaa");

if($Query2)
	
	{
$msg= "Aj ki kothay News Insert Successfully";
header("location:admin.php?action=ajkekothay&catid=viewaj&msg=$msg"); //&msg=$msg
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=ajkekothay&catid=newaj&error=$error"); //&error=$error
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=ajkekothay&catid=newaj&error=$error"); //&error=$error
	}
   }
?>




<?php 
 if($_GET['catid']=='newaj')
  {
?>

<div class="page">


<form action="admin.php?action=ajkekothay&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Aj ki kothay News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="sptitle" placeholder="Editorial News Head line"></div>

<!--<div class="textbar"> <label for="Newsheadline">Name of Reporter</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="reporter" placeholder="Report Name"></div>-->

<!--<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>-->

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control">
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>
<!-- <div class="textbar">Slideshow : &nbsp;&nbsp;<input name="slide" type="checkbox" value="yes" /></div> -->
 <div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>

<div class="clr">  </div>
</div>


<?php
  }
  ?>
  
  
  
  
  
   
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
 if($_GET['catid']=='viewaj')
  {
?>

<div class="page">

<?php
$id=@$_GET["nid"];
if($id!="")
{
   	
	$qryDelete="DELETE FROM newstype WHERE category='kothay' AND nid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=ajkekothay&catid=viewaj&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=ajkekothay&catid=viewaj&delerror=$delerror");
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
<td width="409" align="center">Aj ki kothay News Title</td>
<td width="95" align="center">Date</td>
<td width="120" align="center">Time</td>

<td width="56" align="center">Action</td>
</tr>
<?php
	
	$query= "SELECT * FROM newstype WHERE category='kothay' order by nid DESC";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
   {
 ?>
<tr> 
<td width="33" height="35">&nbsp;</td>
<td width="409" align="center" style="font-family:SolaimanLipi"><?php echo $vquery['title'];?></td>
<td width="95" align="center"><?php echo $vquery['cdate'];?></td>
<td width="120" align="center"><?php echo $vquery['ctime'];?></td>


<td width="56" align="left">

<a href="admin.php?action=ajkekothay&catid=editaj&nid=<?php echo $vquery['nid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=ajkekothay&catid=viewaj&nid=<?php echo $vquery['nid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>

</td>
</tr>
<?php 
   }
?>
</table>


<div class="clr">  </div>
</div>
<?php
  }
  ?> 
  
   
                                                 
                   <!-- ======================================= EDIT OPTION ===================================
                    
                     ==========================================================================================-->
                     
                     

<?php if($_GET['catid']=='editaj') {?>
  
 <div class="page">
 
 <?php
  $id= $_GET["nid"]; 
  $query= "SELECT * FROM newstype WHERE category='kothay' AND nid='".$_GET["nid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>

<form action="admin.php?action=editnews&catid=27" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Special Feature News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="sptitle" placeholder="Editorial News Head line" 
value="<?php echo $vquery['title'];?>"></div>
<!--<div class="textbar"> <label for="Newsheadline">Name of Reporter</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="reporter" placeholder="Report Name" value="<?php echo $vquery['author'];?>"></div>

<div class="textbar"><input id="upimages"  name="upimages" type="file"></div>-->

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control"><?php echo $vquery['description'];?>
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>

 <div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['nid']; ?>"/> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>

 
 
 <div class="clr">  </div>
 </div>
 
 <?php } ?>