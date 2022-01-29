<?php if ($_GET['catid']=='newsaradesh') { ?>
<div class='title'> <em>New Sara Desh News</em> </div>

<?php } if ($_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewsaradesh') { ?>
<div class='title'> <em>View All Sara Desh News</em> </div>


<?php } if($_GET['catid']=='editsaradesh') {?>

<div class='title'> <em>Edit The Sara Desh News</em> </div>

<?php } ?>




<div class="page">  

<?php 
 if($_GET['catid']=='1')
  {

  
if($_POST['saratitle']!='' && $_POST['editor1']!='')
 {

if (($_FILES["up_images"]["type"]=="image/gif") || ($_FILES["up_images"]["type"] == "image/jpg") || ($_FILES["up_images"]["type"] == "image/jpeg")|| ($_FILES["up_images"]["type"] == "image/png") )
		
 {
		if ($_FILES["up_images"]["error"] > 0 || $_FILES["up_images"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["up_images"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['up_images']['tmp_name'];
		$fName=$_FILES['up_images']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
		$filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}
$query = "INSERT INTO saradesh (`sdtitle`,`sdimages`,`sddetails`,`sdstatus`,`sctime`,`scdate`) Values ('".$_POST['saratitle']."','".$filePath."','".$_POST['editor1']."','". 1 ."','".$timestamp."','".$cdate."')";
  
$Query2= mysql_query($query) or die(mysql_error());

//var_dump ("aaa");

if($Query2)
	
	{
$msg= "National News Insert Successfully";
header("location:admin.php?action=saradesh&catid=viewsaradesh"); //&msg=$msg
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=saradesh&catid=newsaradesh"); //&error=$error
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=saradesh&catid=newsaradesh"); //&error=$error
	}
   }
?>




<?php 
 if($_GET['catid']=='newsaradesh')
  {
?>



<form action="admin.php?action=saradesh&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="saratitle" placeholder="News Head Line"></div>

<div class="textbar"><label for="Newsheadline">Images Path</label></div>


<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control">
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>

 <div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>


<?php
  }
  ?>
 <div class="clr">  </div> 
</div> 


 
 <!--======================================= View ALL Data ===================================

 ==========================================================================================-->

 
  

<?php 
 if($_GET['catid']=='viewsaradesh')
  {
?>

<div class="page">  

 
 

<?php
$id=$_GET["sdid"];
if($id!="")
{
    $query2= "select * FROM saradesh WHERE sdid='$id'";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['sdimages']);
	
	$qryDelete="DELETE FROM saradesh WHERE sdid='$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=saradesh&catid=viewsaradesh&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=saradesh&catid=viewsaradesh&delerror=$delerror");
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
<td width="409" align="center">News Title</td>
<td width="95" align="center">Date</td>
<td width="120" align="center">Time</td>
<td width="56" align="center">Viewers</td>
<td width="56" align="center">Action</td>
</tr>
<?php
	
	$query= "SELECT * FROM saradesh order by sdid DESC";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
   {
 ?>
<tr> 
<td width="33" height="35">&nbsp;</td>
<td width="409" align="center" style="font-family:SolaimanLipi"><?php echo $vquery['sdtitle'];?></td>
<td width="95" align="center"><?php echo $vquery['scdate'];?></td>
<td width="120" align="center"><?php echo $vquery['sctime'];?></td>
<td width="56" align="center"><?php echo $vquery['sdstatus'];?></td>
<td width="56" align="left"><a href="admin.php?action=saradesh&catid=editsaradesh&sdid=<?php echo $vquery['sdid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;<a href="admin.php?action=saradesh&catid=viewsaradesh&sdid=<?php echo $vquery['sdid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a></td>
</tr>
<?php 
   }
?>
</table>

  
  
 
  
</div>

<?php } ?>


  
<!--======================================= EDIT OPTION ===================================

 ==========================================================================================-->

 
 



<?php
  if($_GET['catid']=='1')
  {

if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

//

$Vquery= "UPDATE saradesh SET  sdtitle='".$_POST['saratitle']."', sdimages ='".$filePath."',sddetails='".$_POST['editor1']."',sctime= '".$timestamp."',
scdate='".$cdate."' WHERE sdid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=saradesh&catid=viewsaradesh"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=saradesh&catid=editsaradesh&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
  

<div class="page">  
<?php
  $id= $_GET["sdid"]; 
  $query= "SELECT * FROM saradesh WHERE sdid='".$_GET["sdid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>
  
  
  
<?php
 if($_GET['catid']=='editsaradesh')
  {
?>  


<form action="admin.php?action=saradesh&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">News Head line</label> </div>

<div class="textbar"> <input type="saratitle" class="form-control" id="saratitle" name="saratitle" placeholder="Sara Desh News Head Line" value="<?php echo $vquery['sdtitle'];?>"></div>
<img src="<?php echo $vquery['sdimages'];?>" class="imagessize">
<div class="textbar"><label for="Newsheadline">Images Path</label></div>


<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control">
                                                <?php echo $vquery['editor1'];?>
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>

 <div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['sdid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>

</form>
<?php }?>


<div class="clr"> </div>
</div>