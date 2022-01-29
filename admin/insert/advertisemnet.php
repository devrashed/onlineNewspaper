<?php if ($_GET['catid']=='newadver') { ?>
<div class='title'> <em>Advertisment News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewadver') { ?>
<div class='title'> <em>View All Advertisment News</em> </div>

<?php } if($_GET['catid']=='editadver') {?>

<div class='title'> <em>Edit The Advertisment News</em> </div>
<?php } ?>






<?php 
 
 if(@$_GET['initem']=='nation_in')
  {

if($_POST['newstitle']!='' && $_FILES['up_images']!='' && $_POST['sdate']!='' && $_POST['endate']!='')
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
$query = "INSERT INTO advertise (`atitle`,`titleimages`,`weburl`,`block`,`start_date`,`end_date`) Values 

('".$_POST['newstitle']."','".$filePath."','".$_POST['weburl']."','".$_POST['block']."','".$_POST['sdate']."','".$_POST['endate']."')";

  
$Query2= mysql_query($query) or die(mysql_error());

/*var_dump ($query);
exit("aa");*/

if($Query2)
	
	{
$msg= "Advertisement Insert Successfully";
header("location:admin.php?action=advertisemnet&catid=viewadver&msg=$msg");
	
	}else{ 
	
$errors= "Some Information Was Wrong";
header("location:admin.php?action=advertisemnet&catid=newadver&error=$error"); 
	  }
	  
	}
	else{
$error= "Please fill up all Valied field";	
header("location:admin.php?action=advertisemnet&catid=newadver&error=$error");
	}
   }
?>


<?php if ($_GET['catid']=='newadver') { ?>

<div class="page">



<form action="admin.php?action=advertisemnet&initem=nation_in" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Advertisment Title</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newstitle" placeholder="Advertisment Title"></div>

<div class="textbar"> <label for="Newsheadline">Web-Url</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="weburl" placeholder="Advertisment Title"></div>


<div class="textbar"><label for="Newsheadline">Images Path</label></div>

<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>

<div class="textbar"><label for="Newsheadline">Ad Block </label></div>

<div class="textbar">
<select name="block">

<option selected="selected">--SELECT BLOCK--</option>

<option value="block-1">block-1</option>
<option value="block-2">block-2</option>
<option value="block-3">block-3</option>
<option value="block-4">block-4</option>
<option value="block-5">block-5</option>
<option value="block-6">block-6</option>
<option value="block-7">block-7</option>
<option value="block-8">block-8</option>
<option value="block-9">block-9</option>
<option value="block-10">block-10</option>
<option value="block-11">block-11</option>
<option value="block-12">block-12</option>
<option value="block-13">block-13</option>
<option value="block-14">block-14</option>
<option value="block-15">block-15</option>
<option value="block-16">block-16</option>
<option value="block-18">block-18</option>
<option value="block-19">block-19</option>
<option value="block-20">block-20</option>
<option value="block-21">block-21</option>
<option value="block-22">block-22</option>
<option value="block-23">block-23</option>
<option value="block-24">block-24</option>
<option value="block-25">block-25</option>
<option value="block-26">block-26</option>
<option value="block-27">block-27</option>
<option value="block-28">block-28</option>
</select>
</div>

<div class="textbar"> <label for="Newsheadline">Start Date</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="sdate" placeholder="Start Date"></div>

<div class="textbar"> <label for="Newsheadline">End Date</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="endate" placeholder="End Date"></div>



<div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>

<table width="361">

<tr>
<td width="105" height="31" align="center">Ad Block </td>
<td width="112" align="center">Width</td>
<td width="128" align="center">Height</td>
</tr>
<tr>
  <td height="31" align="center">Block-01</td>
  <td align="center">712px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-02</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-03</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-04</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-05</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-06</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-07</td>
  <td align="center">344px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-08</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-09</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-10</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-11</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-12</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-13</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-14</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-15</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-16</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-17</td>
  <td align="center">344px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-18</td>
  <td align="center">348px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-19</td>
  <td align="center">350px</td>
  <td align="center">88px</td>
</tr>
<tr>
  <td height="31" align="center">Block-20</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-21</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-22</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-23</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-24</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-25</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-26</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-27</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>
<tr>
  <td height="31" align="center">Block-28</td>
  <td align="center">381px</td>
  <td align="center">120px</td>
</tr>

</table>

<div class="clr">  </div>
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
if($_GET['catid']=='viewadver')
 {
?>
 
<div class="page">  

<?php
$id=@$_GET["aid"];
if($id!="")
{
    $query2= "select * FROM advertise WHERE aid='$id' ";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['images']);
	
	$qryDelete="DELETE FROM advertise WHERE aid = '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=advertisemnet&catid=viewadver&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=advertisemnet&catid=viewadver&delerror=$delerror");
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
<td width="120" align="center">Ad Block</td>
<td width="95" align="center">Start Date</td>
<td width="120" align="center">End Date </td>
<td width="56" align="center">Viewers</td>
<td width="56" align="center">Action</td>
</tr>
<?php
 $i=1;
 $perpa=20;
 $re1=mysql_query("select count(aid) row FROM advertise order by aid DESC");
			$rere1=mysql_fetch_array($re1);
			$nrow=$rere1['row'];
				
				if(empty($_GET['page']))
				   $page=1;
				else
				   $page=$_GET['page'];
				
				$start=($page*$perpa)-$perpa;
				$end=$perpa;    
	 
  
  //$i=1;		
	
	$query= "select * FROM advertise order by aid DESC limit ".$start.",".$end;
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
    {
 ?>
<tr> 
<td width="33" height="35" align="center"><?php echo $i++; ?></td>
<td width="409" align="center"><?php echo $vquery['atitle'];?></td>
<td width="120" align="center"><?php echo $vquery['block'];?></td>
<td width="409" align="center"><?php echo $vquery['start_date'];?></td>
<td width="95" align="center"><?php echo $vquery['end_date'];?></td>
<td width="56" align="center"><?php echo $vquery['viwers'];?></td>
<td width="56" align="left">
<a href="admin.php?action=advertisemnet&catid=editadver&aid=<?php echo $vquery['aid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=advertisemnet&catid=viewadver&aid=<?php echo $vquery['aid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>

</td>
</tr>
<?php 
   }
?>
</table>

<div class="paigination"><span class="paiglink"><?php pagination($page,$nrow,"admin.php?action=advertisemnet&catid=viewadver&", $perpa);?></span></div>
</div>  

<?php
  }
  ?> 


<!--======================================= EDIT OPTION ===================================

 ==========================================================================================-->



<?php 
if($_GET['catid']=='editadver')
 {
?>

<div class="page">  

<?php
  $id= $_GET["aid"]; 
  $query= "select * FROM advertise WHERE aid='".$_GET["aid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>

<form action="admin.php?action=editnews&catid=30" method="post" enctype="multipart/form-data">
<div class="textbar"> <label for="Newsheadline">Advertisment Title</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newstitle" placeholder="Advertisment Title" 
value="<?php echo $vquery['atitle'];?>"></div>

<div class="textbar"> <label for="Newsheadline">Web-Url</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="weburl" value="<?php echo $vquery['weburl'];?>" placeholder="Advertisment Title"></div>

<div class="textbar"><label for="Newsheadline">Images Path</label></div>
<img src="<?php echo $vquery['titleimages'];?>" style="width:120px; height:130px;">
<div class="textbar"><input id="upimages"  name="up_images" type="file"></div>

<div class="textbar"><label for="Newsheadline">Ad Block </label></div>

<div class="textbar">
<select name="block">
<option value="<?php echo $vquery ['block'];?>">&nbsp;<?php echo $vquery['block'];?>&nbsp;</option>
<option value="block-1">block-1</option>
<option value="block-2">block-2</option>
<option value="block-3">block-3</option>
<option value="block-4">block-4</option>
<option value="block-5">block-5</option>
<option value="block-6">block-6</option>
<option value="block-7">block-7</option>
<option value="block-8">block-8</option>
<option value="block-9">block-9</option>
<option value="block-10">block-10</option>
<option value="block-11">block-11</option>
<option value="block-12">block-12</option>
<option value="block-13">block-13</option>
<option value="block-14">block-14</option>
<option value="block-15">block-15</option>
<option value="block-16">block-16</option>
<option value="block-18">block-18</option>
<option value="block-19">block-19</option>
<option value="block-20">block-20</option>
<option value="block-21">block-21</option>
<option value="block-22">block-22</option>
<option value="block-23">block-23</option>
</select>
</div>

<div class="textbar"> <label for="Newsheadline">Start Date</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="sdate" placeholder="Start Date" value="<?php echo $vquery['start_date'];?>"></div>

<div class="textbar"> <label for="Newsheadline">End Date</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="endate" placeholder="End Date" 
value="<?php echo $vquery['end_date'];?>"></div>
<div class="textbar"> <input type="hidden" name="Regisid" value="<?php echo $vquery['aid']; ?>" /> <button type="submit" class="btn btn-primary">Submit</button>


 </div>

</form>


<div class="clr">  </div>
</div>
<?php } ?>

