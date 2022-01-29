<?php if ($_GET['catid']=='newphoto') { ?>
<div class='title'> <em>Add New Photo News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewphoto') { ?>
<div class='title'> <em>View All Photo News</em> </div>

<?php } if($_GET['catid']=='editphoto') {?>

<div class='title'> <em>Edit The Photo News</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['ptitle']!='')
 {

if (($_FILES["up_images"]["type"]=="image/gif") || ($_FILES["up_images"]["type"] == "image/jpg") || ($_FILES["up_images"]["type"] == "image/jpeg")|| 
($_FILES["up_images"]["type"] == "image/png") )
		
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
$query = "INSERT INTO photogallery (`ptitle`,`photogallyer`,`cdate`) Values ('".$_POST['ptitle']."','".$filePath."','".$cdate."')";

/*  var_dump ($query);  
exit ("aaa");*/

$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "Photo Gallery News Insert Successfully";
header("location:admin.php?action=photogallery&catid=viewphoto&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=photogallery&catid=newphoto&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=photogallery&catid=newphoto&error=$error"); //
	}
   }
?>




<?php 
 if($_GET['catid']=='newphoto')
  {
?>

<div class="page">

<form action="admin.php?action=photogallery&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="ptitle" placeholder="News Head Line"></div>

<div class="textbar"><label for="Newsheadline">Images Path</label></div>

<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>

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
 if($_GET['catid']=='viewphoto')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["gid"];
if($id!="")
{
    $query2= "select * FROM photogallery WHERE gid='$id'";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['photogallyer']);
	
	$qryDelete="DELETE FROM photogallery WHERE gid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=photogallery&catid=viewphoto&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=photogallery&catid=viewphoto&delerror=$delerror");
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
    <td width="95" align="center">Photo Title</td>
    <td width="95" align="center">Date</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
 $i=1; 	
 $perpa=20;
 $re1=mysql_query("select count(gid) row FROM photogallery ORDER BY gid DESC");
			$rere1=mysql_fetch_array($re1);
			$nrow=$rere1['row'];
				
				if(empty($_GET['page']))
				   $page=1;
				else
				   $page=$_GET['page'];
				
				$start=($page*$perpa)-$perpa;
				$end=$perpa;    
	 
  
  $i=1; 
	
        $query= "SELECT * FROM photogallery order by gid DESC limit ".$start.",".$end;
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35" align="center"><?php echo $i++; ?></td>
    <td width="95" align="center"><?php echo $vquery['ptitle'];?></td>
   <td width="95" align="center"><?php echo $vquery['cdate'];?></td>
   <td width="56" align="left">
	<a href="admin.php?action=photogallery&catid=editphoto&gid=<?php echo $vquery['gid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=photogallery&catid=viewphoto&gid=<?php echo $vquery['gid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
    </td>
    </tr>
    <?php 
       }
    ?>
    </table>
    
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"admin.php?action=photogallery&catid=viewphoto&", $perpa);?></span></div>
<div class="clr"></div>
</div>


<?php } ?>










<?php 
 if($_GET['catid']=='editphoto')
  {
?>

<div class="page">

<?php
  $id= $_GET["gid"]; 
  $query= "SELECT * FROM photogallery where gid='".$_GET["gid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


 <form action="admin.php?action=editnews&catid=23" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Photo Title</label> </div>

<div class="textbar"> <input type="ptitle" class="form-control" id="ptitle" name="ptitle" placeholder="Photo Title" value="<?php echo $vquery['ptitle'];?>"></div>

<img src="<?php echo $vquery['photogallyer'];?>"class="imagessize">
<div class="textbar"><label for="Newsheadline">Images Path</label></div>

<div class="textbar"><input id="upimages"  name="upimages" type="file"></div>



<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['gid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>




<div class="clr"></div>
</div>

<?php } ?>
