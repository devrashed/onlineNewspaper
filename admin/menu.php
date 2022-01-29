<?php if ($_GET['catid']=='newmenu') { ?>
<div class='title'> <em>Add New Menu Item</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewmenu') { ?>
<div class='title'> <em>View All Menu Item</em> </div>

<?php } if($_GET['catid']=='editmenu') {?>

<div class='title'> <em>Edit The Menu Item</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['menu']!='')
 {
 
  
$query = "INSERT INTO menu (`menuname`) Values ('".$_POST['menu']."')";
  
/*var_dump ($query);  
exit ("aaa");*/
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "New Menu Insert Successfully";
header("location:admin.php?action=menu&catid=viewmenu&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=menu&catid=newmenu&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=menu&catid=newmenu&error=$error"); //
	}
   }
?>




<?php 
 if($_GET['catid']=='newmenu')
  {
?>

<div class="page">

<form action="admin.php?action=menu&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Menu Name </label> </div>
<div class="textbar"> <input type="text" name="menu" required="required"></div>

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
 if($_GET['catid']=='viewmenu')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["mid"];
if($id!="")
{
	
	$qryDelete="DELETE FROM menu WHERE mid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=menu&catid=viewmenu&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=menu&catid=viewmenu&delerror=$delerror");
		die();
	}	
}

?>



<script type="text/javascript">

function confirmasubmit()
{
var agree= confirm("Are You Want To Delete This Menu?");
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
	 $i=1; 
        $query= "SELECT * FROM menu order by mid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35"><?php echo $i++; ?></td>
   <td width="95" align="center"><?php echo $vquery['menuname'];?></td>
   <td width="56" align="left">
	<a href="admin.php?action=menu&catid=editmenu&mid=<?php echo $vquery['mid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
    <a href="admin.php?action=menu&catid=viewmenu&mid=<?php echo $vquery['mid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
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
 if($_GET['catid']=='editmenu')
  {
?>

<div class="page">

<?php
  $id= $_GET["mid"]; 
  $query= "SELECT * FROM menu where mid='".$_GET["mid"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


 <form action="admin.php?action=editnews&catid=35" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">Menu Name </label> </div>
<div class="textbar"> <input type="text" name="menu" value="<?php echo $vquery['menuname'];?>"></div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['mid']; ?>" />
<button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>




<div class="clr"></div>
</div>

<?php } ?>
