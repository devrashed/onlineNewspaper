
<?php if ($_GET['catid']=='newsports') { ?>
<div class='title'> <em>Add New About Us News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewabout') { ?>
<div class='title'> <em>View All About Us News</em> </div>

<?php } if($_GET['catid']=='editabout') {?>

<div class='title'> <em>Edit The About Us News</em> </div>

<?php } ?>






<?php 
/* if($_GET['catid']=='1')
  {

if($_POST['sportstitle']!='' && $_FILES['up_images']!='' && $_POST['reporter']!='' && $_POST['editor1']!='')
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
		$ImgName=$fName;
		$filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}
$query = "INSERT INTO newstype (`title`,`category`,`description`,`images`,`slideshow`,`author`,`nstatus`,`ctime`,`cdate`,`btime`,`bdate`) Values ('".$_POST['sportstitle']."','".sports."','".$_POST['editor1']."','".$filePath."','".$_POST['slide']."','".$_POST['reporter']."','". 1 ."','".$timestamp."','".$cdate."','".$presenttime."','".$presentDate."')";
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "Sports News News Insert Successfully";
header("location:admin.php?action=sports&catid=viewsports&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=sports&catid=newsports&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=sports&catid=newsports&error=$error"); //
	}
   }*/
?>






<?php 
 if($_GET['catid']=='newsports')
  {
?>

<div class="page">


<form action="admin.php?action=sports&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Sport News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="sportstitle" placeholder="News Head Line"></div>

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

<div class="clr">  </div>
</div>

<?php
  }
  ?>
  
 
 
 <!--======================================= View ALL Data ===================================

 ==========================================================================================-->

  
 
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
  
  
 <?php 
 if($_GET['catid']=='viewabout')
  {
?>



<div class="page">  

  
<?php
/*$id=@$_GET["nid"];
if($id!="")
{
    $query2= "select * FROM newstype WHERE category='sports' AND nid='$id'";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['images']);
	
	$qryDelete="DELETE FROM newstype WHERE category='sports' AND nid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=sports&catid=viewsports&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=sports&catid=viewsports&delerror=$delerror");
		die();
	}	
}
*/
?>



<script type="text/javascript">

/*function confirmasubmit()
{
var agree= confirm("Are You Want To Delete This News?");
if (agree)
   
     return true ;
 else 
    return false;
   
}*/
</script>


    <table class="table table-bordered">
    <tr> 
    <td width="56" align="center">Title</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
        $query= "SELECT * FROM self WHERE category='aboutus' order by sfid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
     ?>
    <tr> 
    <td width="409" align="center" style="font-family:SolaimanLipi">About us</td>
    </td>
    <td width="56" align="left">
	<a href="admin.php?action=aboutus&catid=editabout&sfid=<?php echo $vquery['sfid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
    </td>
    </tr>
    <?php 
       }
    ?>
    </table>

</div>


<?php
  }
  ?> 
  
  
  
  
          <!--======================================= Edit The Sports News ===================================
        
              =============================================================================================-->
  
  

<?php 
 if($_GET['catid']=='editabout')
  {
?>

<div class="page"> 

 <?php
  $id= $_GET["sfid"]; 
  $query= "SELECT * FROM self WHERE category='aboutus' AND sfid='".$_GET["sfid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


<form action="admin.php?action=editnews&catid=28" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">About Title</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="abouttitle" placeholder="News Head Line" 
value="<?php echo $vquery['stitle']?>"></div>

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control"> <?php echo $vquery['details'];?> 
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>
<input type="hidden" name="Regisid" value="<?php echo $vquery['sfid']; ?>" />
 <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>

<div class="clr"></div>
 </div>

<?php
  }
  ?> 