<?php if ($_GET['catid']=='newweather') { ?>
<div class='title'> <em>Weather News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewweather') { ?>
<div class='title'> <em>View All Weather News</em> </div>

<?php } if($_GET['catid']=='editweather') {?>

<div class='title'> <em>Edit The Weather News</em> </div>

<?php } ?>


<?php 
 
 if(@$_GET['initem']=='nation_in')
  {

if($_POST['newdhaka']!='' && $_POST['newchittagong']!='' && $_POST['newskhulna']!='')
 {

$query = "INSERT INTO weather (`dhaka`,`chittagong`,`khulna`,`sylhet`,`barishal`,`jessor`,`bogora`,`cdate`,`ctime`,`bdate`,`btime`) Values ('".$_POST['newdhaka']."','".$_POST['newchittagong']."','".$_POST['newskhulna']."','".$_POST['newssylhet']."','".$_POST['newsbarisal']."','".$_POST['newsjessor']."','".$_POST['newsbogora']."','".$timestamp."','".$cdate."','".$presenttime."','".$presentDate."')";
  
$Query2= mysql_query($query) or die(mysql_error());

//var_dump ("aaa");

if($Query2)
	
	{
$msg= "Weather already update Insert Successfully";
header("location:admin.php?action=weather&catid=viewweather&msg=$msg");
	
	}else{ 
	
$errors= "Some Information Was Wrong";
header("location:admin.php?action=weather&catid=newweather&error=$error"); 
	  }
	  
	}
	else{
$error= "Please fill up all Valied field";	
header("location:admin.php?action=weather&catid=newweather&error=$error");
	}
   }
?>


<?php if ($_GET['catid']=='newweather') { ?>

<div class="page">



<form action="admin.php?action=weather&initem=nation_in" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Dhaka</label></div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newdhaka" placeholder="Dhaka"></div>


<div class="textbar"> <label for="Newsheadline">Chittagong</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newchittagong" placeholder="Chittagong"></div>


<div class="textbar"> <label for="Newsheadline">Khulna</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newskhulna" placeholder="Khulna"></div>

<div class="textbar"> <label for="Newsheadline">Sylhet</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newssylhet" placeholder="Sylhet"></div>


<div class="textbar"> <label for="Newsheadline">Barisal</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsbarisal" placeholder="Barisal"></div>


<div class="textbar"> <label for="Newsheadline">Jessor</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsjessor" placeholder="Jessor"></div>


<div class="textbar"> <label for="Newsheadline">Bogora</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsbogora" placeholder="Bogora"></div>


 <div class="textbar"> <button type="submit" class="btn btn-primary">Submit</button> </div>

</form>



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
if($_GET['catid']=='viewweather')
 {
?>
 
<div class="page">  



<?php
$id=@$_GET["wid"];
if($id!="")
{
    /*$query2= "select * FROM newstype WHERE category='national' AND nid='$id' ";
    $rsquery2 =mysql_query($query2);
    $vquery2 = mysql_fetch_assoc($rsquery2);
    unlink($vquery2['images']);*/
	
	$qryDelete="DELETE FROM weather wid = '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=weather&catid=viewweather&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=weather&catid=viewweather&delerror=$delerror");
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
<td width="120" align="center">Time</td>
<td width="56" align="center">Action</td>
</tr>
<?php
	
	$query= "SELECT * FROM weather order by wid DESC";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
   {
 ?>
<tr> 
<td width="33" height="35" align="center"><?php $i=1; echo $i++; ?></td>
<td width="95" align="center"><?php echo $vquery['cdate'];?></td>
<td width="120" align="center"><?php echo $vquery['ctime'];?></td>
<td width="56" align="left">
<a href="admin.php?action=weather&catid=editnationa&wid=<?php echo $vquery['wid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=weather&catid=viewweather&wid=<?php echo $vquery['wid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>

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


<!--======================================= EDIT OPTION ===================================

 ==========================================================================================-->



<?php 
if($_GET['catid']=='editweather')
 {
?>

<div class="page">  

<?php
  $id= $_GET["wid"]; 
  $query= "SELECT * FROM weather WHERE wid='".$_GET["wid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>



<form action="admin.php?action=editnews&catid=26" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Dhaka</label></div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newdhaka" placeholder="Dhaka" 
value="<?php echo $vquery['dhaka']; ?>"/></div>


<div class="textbar"> <label for="Newsheadline">Chittagong</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newchittagong" placeholder="Chittagong" 
value="<?php echo $vquery['chittagong']; ?>"></div>


<div class="textbar"> <label for="Newsheadline">Khulna</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newskhulna" placeholder="Khulna" 
value="<?php echo $vquery['khulna'];?>"/></div>

<div class="textbar"> <label for="Newsheadline">Sylhet</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newssylhet" placeholder="Sylhet" 
value="<?php echo $vquery['sylhet'];?>"/><></div>


<div class="textbar"> <label for="Newsheadline">Barisal</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsbarisal" placeholder="Barisal" 
value="<?php echo $vquery['barishal'];?>"/></div>


<div class="textbar"> <label for="Newsheadline">Jessor</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsjessor" placeholder="Jessor" 
value="<?php echo $vquery['jessor'];?>" /> </div>


<div class="textbar"> <label for="Newsheadline">Bogora</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="newsbogora" placeholder="Bogora" 
value="<?php echo $vquery['bogora'];?>"/></div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['wid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>

</form>




<div class="clr">  </div>
</div>
<?php } ?>