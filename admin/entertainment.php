<?php if ($_GET['catid']=='newentertainment') { ?>
<div class='title'> <em>Entertainment News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewentertainment') { ?>
<div class='title'> <em>View All Entertainment News</em> </div>


<?php } if($_GET['catid']=='editentertainment') {?>

<div class='title'> <em>Edit The Entertainment News</em> </div>
<?php } ?>




      <!--======================================= ADD Finacse News ===================================
 
    ==========================================================================================-->



<?php 
 if($_GET['catid']=='1')
  {

    $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);
  

if($_POST['entertitle']!='' && $_FILES['up_images']!='' && $_POST['reporter']!='' )
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
$query = "INSERT INTO newstype (`title`,`category`,`description`,`images`,`slideshow`,`author`,`nstatus`,`bracking`,`youtube`,`topnews`,`ctime`,`cdate`,`btime`,`bdate`)
 Values ('".$_POST['entertitle']."','".entertainment."','".$content."','".$filePath."','". $_POST['slide']."','".$_POST['reporter']."','". 1 ."',
 '".$_POST['bknews'] ."','".$_POST['youtube']."','".$_POST['topnews']."','".$CUR_D_Bangladesh."','".$GM_D."','".$presenttime."','".$presentDate."')";
  
$Query2= mysql_query($query) or die(mysql_error());

/*var_dump ($query);
exit(aaaa);*/

if($Query2)
	
	{
$msg= "Entertainment News Insert Successfully";
header("location:admin.php?action=entertainment&catid=viewentertainment&msg=$msg"); //&msg=$msg
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=entertainment&catid=newentertainment&error=$error"); //&error=$error
	  }
    }else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=entertainment&catid=newentertainment&error=$error"); //&error=$error
	}
   }
?>



<?php 
 if($_GET['catid']=='newentertainment')
  {
?>

<div class="page">

<form action="admin.php?action=entertainment&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Entertainment News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="entertitle" placeholder="Entertainment News Head line"></div>

<div class="textbar"> <label for="Newsheadline">Name of Reporter</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="reporter" placeholder="Report Name"></div>

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
   <div class="textbar">Slideshow : &nbsp;&nbsp;<input name="slide" type="checkbox" value="yes" /></div>
   <div class="textbar">Braking News : &nbsp;&nbsp;<input name="bknews" type="checkbox" value="yes" /></div> 
   <div class="textbar">Top News : &nbsp;&nbsp;<input name="topnews" type="checkbox" value="yes" /></div> 
    
    <div class="textbar"> <label for="Newsheadline">Youtube Video</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="youtube" placeholder="Youtube"></div>
    
 <div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>


<div class="clr"></div>
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
 
  
  
       <!--======================================= View Finacse News ===================================
 
    ==========================================================================================-->
  
  
  
 <?php 
 if($_GET['catid']=='viewentertainment')
  {
?>
<div class="page">



<?php
$id=@$_GET["nid"];
if($id!="")
{
    $query2= "select * FROM newstype WHERE category='entertainment' AND nid='$id'";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['images']);
	
	$qryDelete="DELETE FROM newstype WHERE category='entertainment' AND nid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=entertainment&catid=viewentertainment&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=entertainment&catid=viewentertainment&delerror=$delerror");
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
<td width="409" align="center">Entertainment Newe Title</td>
<td width="95" align="center">Date</td>
<td width="120" align="center">Time</td>
<td width="56" align="center">Viewers</td>
<td width="56" align="center">Slideshow</td>
<td width="56" align="center">Action</td>
</tr>
<?php
   $i=1;	
 $perpa=20;
 $re1=mysql_query("select count(nid) row FROM newstype WHERE category='entertainment' ORDER BY nid DESC");
			$rere1=mysql_fetch_array($re1);
			$nrow=$rere1['row'];
				
				if(empty($_GET['page']))
				   $page=1;
				else
				   $page=$_GET['page'];
				
				$start=($page*$perpa)-$perpa;
				$end=$perpa;    
	 
  

	
	$query= "SELECT * FROM newstype WHERE category='entertainment' order by nid DESC LIMIT ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
   {
 ?>
<tr> 
<td width="33" height="35"><?php echo $i++;?></td>
<td width="409" align="center" style="font-family:SolaimanLipi"><?php echo $vquery['title'];?></td>
<td width="95" align="center"><?php echo $vquery['cdate'];?></td>
<td width="120" align="center"><?php echo $vquery['ctime'];?></td>
<td width="56" align="center"><?php echo $vquery['nstatus'];?></td>
<td width="56" align="center">
	<?php if ($vquery['slideshow']=='yes'); {
	
	 echo $vquery['slideshow'];
}
	?>
</td>
<td width="56" align="left"> 
<a href="admin.php?action=entertainment&catid=editentertainment&nid=<?php echo $vquery['nid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=entertainment&catid=viewentertainment&nid=<?php echo $vquery['nid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
</td>
</tr>
<?php 
   }
?>
</table>
<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"admin.php?action=entertainment&catid=viewentertainment&", $perpa);?></span></div>
<div class="clr"></div>
</div>
<?php
  }
  ?> 
  
  
  
  
  <!--======================================= Edit Finacse News ===================================
 
    ==========================================================================================-->
  

 <?php 
 if($_GET['catid']=='editentertainment')
  {
?>


<div class="page">


 <?php
  $id=@$_GET["nid"]; 
  $query= "SELECT * FROM newstype WHERE category='entertainment' AND nid='".$_GET["nid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>

<form action="admin.php?action=editnews&catid=6" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Entertainment News Head line</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="entertitle" placeholder="Entertainment News Head line" 
value="<?php echo $vquery['title']; ?>"></div>

<div class="textbar"> <label for="Newsheadline">Name of Reporter</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="reporter" placeholder="Report Name" value="<?php echo $vquery['author'];?>"></div>

<img src="<?php echo $vquery['images'];?>"class="imagessize">
<div class="textbar"><label for="Newsheadline">Images Path</label></div>

<div class="textbar"><input id="upimages"  name="upimages" type="file"></div>

<div class="textbar"> <label for="Newsheadline">News Details</label> </div>

<div class="textbar"><textarea id="editor1" name="editor1" class="form-control"><?php echo $vquery['description'];?>
               
            </textarea>
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
            </div>
  <?php if ($vquery['slideshow']=='yes') { ?>          
 <div class="textbar">Slideshow : &nbsp;&nbsp;<input name="slide" type="checkbox" checked="checked" value="yes" /></div> 
 <?php } elseif($vquery['slideshow']!='yes') { ?>
 <div class="textbar">Slideshow : &nbsp;&nbsp;<input name="slide" type="checkbox"  value="yes" /></div> 
 <?php } ?>
 
   <?php if ($vquery['bracking']=='yes') { ?>          
 <div class="textbar">Bracking News: &nbsp;&nbsp;<input name="bknews" type="checkbox" checked="checked" value="yes" /></div> 
 <?php } elseif($vquery['bracking']!='yes') { ?>
 <div class="textbar">Bracking News: &nbsp;&nbsp;<input name="bknews" type="checkbox"  value="yes" /></div> 
 <?php } ?>
 
 <?php if ($vquery['topnews']=='yes') { ?>          
 <div class="textbar">top News: &nbsp;&nbsp;<input name="topnews" type="checkbox" checked="checked" value="yes" /> <?php //echo $vquery['topnews']?></div> 
 <?php } elseif($vquery['topnews']!='yes') { ?>
 <div class="textbar">top News: &nbsp;&nbsp;<input name="topnews" type="checkbox"  value="yes" /> <?php //echo $vquery['topnews']?></div> 
 <?php } ?>
 
 <div class="textbar"> <label for="Newsheadline">Youtube Video</label> </div>

 <div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="youtube" value="<?php echo $vquery['youtube'];?>" placeholder="Youtube"></div>
 
 <div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['nid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>

</form>


<div class="clr"></div>
</div>

<?php } ?>