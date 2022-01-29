<?php if ($_GET['catid']=='newservay') { ?>
<div class='title'> <em>New Questions Insert</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewservay') { ?>
<div class='title'> <em>View Questions News</em> </div>


<?php } if($_GET['catid']=='editservay') {?>

<div class='title'><em>Edit The Questions News</em> </div>
<?php } if($_GET['catid']=='ans') {?>

<div class='title'><em>Ans Selected</em> </div>

<?php } ?>


<?php 
 if(@$_GET['initem']=='nation_in')
  {

if($_POST['qtitle']!='')
 {


$query = "INSERT INTO surve (`questions`,`cdate`,`ctime`,`bdate`,`btime`) Values ('".$_POST['qtitle']."','".$GM_D."','".$CUR_D_Bangladesh."','".$presentDate."','".$presenttime."')";
  
$Query2= mysql_query($query) or die(mysql_error());

if($Query2)
	
	{
$msg= "survay Questions Insert Successfully";
header("location:admin.php?action=onlinesurvay&catid=viewservay&msg=$msg");
	
	}else{ 
	
$errors= "Some Information Was Wrong";
header("location:admin.php?action=onlinesurvay&catid=newservay&error=$error"); 
	  }
	}
	else{
$error= "Please fill up all Valied field";	
header("location:admin.php?action=onlinesurvay&catid=newservay&error=$error");
	}
   }
?>


<?php if ($_GET['catid']=='newservay') { ?>


<div class="page">


 
 <form action="admin.php?action=onlinesurvay&initem=nation_in" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Online survay Questions</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="qtitle" placeholder="Online survay News Head Line"></div>

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


<?php if ($_GET['catid']=='viewservay') { ?>


<div class="page">

<?php
$id=@$_GET["id"];
if($id!="")
{
	
	$qryDelete="DELETE FROM surve where id='$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=onlinesurvay&catid=viewservay&demsg=$demsg");
		die();
	} else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=onlinesurvay&catid=viewservay&delerror=$delerror");
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
<td width="33" height="35" align="center">Questions </td>
<td width="56" align="center">Action</td>
</tr>
<?php
	
	$query= "SELECT * FROM surve order by id DESC";
	$rsquery= mysql_query($query); 
	while ($vquery=mysql_fetch_array($rsquery))
   {
 ?>
<tr> 
<td width="33" height="35">&nbsp;</td>
<td width="409" align="center" style="font-family:SolaimanLipi"><?php echo $vquery['questions'];?></td>
<td width="56" align="left">

<a href="admin.php?action=onlinesurvay&catid=editservay&id=<?php echo $vquery['id'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=onlinesurvay&catid=viewservay&id=<?php echo $vquery['id'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>

</td>
</tr>
<?php 
   }
?>
</table>



</div>


<?php } ?>





<?php if ($_GET['catid']=='editservay') { ?>


<div class="page">


<?php
  $id= $_GET["id"]; 
  $query= "SELECT * FROM surve where id='".$_GET["id"]."'";
  $rsquery= mysql_query($query); 
  while ($vquery= mysql_fetch_array($rsquery)) {
?>


  

<form action="admin.php?action=editnews&catid=25" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Online survay Questions</label> </div>

<div class="textbar"> <input type="newstitle" class="form-control" id="newstitle" name="qtitle" placeholder="Online survay News Head Line" 
value="<?php echo $vquery['questions'];?>"></div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['id']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>

</form>
  
<div class="clr"></div>
</div>


<?php 
   }
 } 
?>







<?php 
 if(@$_GET['catid']=='2')
  {


if($_POST['question']!='')
 {


$query = "INSERT INTO questions (`pid`,`question`) Values ('".$_POST['qid']."','".$_POST['question']."')";
  
$Query2= mysql_query($query) or die(mysql_error());

if($Query2)
	
	{
$msg= "survay Questions Insert Successfully";
header("location:admin.php?action=onlinesurvay&catid=ans&msg=$msg");
	
	}else{ 
	
$errors= "Some Information Was Wrong";
header("location:admin.php?action=onlinesurvay&catid=ans&error=$error"); 
	  }
	}
	/*else{
$error= "Please fill up all Valied field";	
header("location:admin.php?action=onlinesurvay&catid=newservay&error=$error");
	}*/
   }
?>




<?php if ($_GET['catid']=='ans') { ?>

<div class="page">

<form action="admin.php?action=onlinesurvay&catid=2" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Questions Select</label> </div>
<?php
  //$id= $_GET["id"]; 
  $query= "SELECT * FROM poll order by id DESC";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>

<div class="textbar">
<input type="hidden" name="qid" value="<?php echo $vquery['id'];?>"/> <?php echo $vquery['name'];?>
</div>
<div class="textbar">
<select name="question">
<option selected>--SELECTED--</option>
<option value="yes">হ্যাঁ</option>
<option value="no">না</option>
<option value="commentno">মন্তব্য নেই</option>

</select>
</div>

<div class="textbar"><button type="submit" class="btn btn-primary">Submit</button> </div>

</form>


<div class="clr"></div>
</div>

<?php } ?>