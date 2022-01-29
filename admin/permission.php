<?php if ($_GET['catid']=='newpermission') { ?>
<div class='title'> <em>Add New Prayer News</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewpermission') { ?>
<div class='title'> <em>View All Prayer News</em> </div>

<?php } if($_GET['catid']=='editpermission') {?>

<div class='title'> <em>Edit The Prayer News</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['uname']!='' && $_POST['menuname']!=''&& $_POST['permit']!='')
 {
 
  
$query = "INSERT INTO permission (`uid`,`menuid`,`permite`) Values ('".$_POST['uname']."','".$_POST['menuname']."','".$_POST['permit']."')";
  

/*var_dump ($query);  
exit ("aaa");*/
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "Permission Insert Successfully";
header("location:admin.php?action=permission&catid=viewpermission&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=permission&catid=newpermission&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=permission&catid=newpermission&error=$error"); //
	}
   }
?>




<?php 
 if($_GET['catid']=='newpermission')
  {
?>

<div class="page">

<form action="admin.php?action=permission&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">User Name </label> </div>
<div class="textbar"> <select name="uname">
                <option selected="selected">--Select Username</option>
                <?php
				$query= "SELECT * FROM admin order by id DESC";
				$rsquery= mysql_query($query); 
				while ($vquery=mysql_fetch_array($rsquery))
				{
                ?>
                <option value="<?php echo $vquery['id'];?>"><?php echo $vquery['username'];?></option>
                <?php } ?>
</select></div>

<div class="textbar"> <label for="Newsheadline">Menu Name</label> </div>
<div class="textbar"> <select name="menuname">
                <option selected="selected">--Select Menu Name--</option>
                <?php
				$query= "SELECT * FROM menu order by mid DESC";
				$rsquery= mysql_query($query); 
				while ($vquery=mysql_fetch_array($rsquery))
				{
                ?>
                <option value="<?php echo $vquery['mid'];?>"><?php echo $vquery['menuname'];?></option>
                <?php } ?>
</select></div>

<div class="textbar"> <label for="Newsheadline">Permite</label> </div>
<div class="textbar"> <label for="Newsheadline"> <input name="permit" type="checkbox" value="yes" /></label> </div>

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
 if($_GET['catid']=='viewpermission')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["prid"];
if($id!="")
{
    $qryDelete="DELETE FROM permission WHERE prid= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=permission&catid=viewpermission&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=permission&catid=viewpermission&delerror=$delerror");
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
    <td width="33" height="35" align="center">Username</td>
    <td width="95" align="center">Menu</td>
    <td width="95" align="center">Permite</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
        $query= "SELECT * FROM permission LEFT JOIN admin ON permission.uid=admin.id LEFT JOIN menu ON permission.menuid=menu.mid order by prid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35" align="center">&nbsp;</td>
    <td width="33" height="35"><?php echo $vquery['username'];?></td>
   <td width="95" align="center"><?php echo $vquery['menuname'];?></td>
   <td width="95" align="center">
   <?php if ($vquery['permite']=='yes') {?>
   Yes
   <?php } elseif ($vquery['permite']=='no') { ?>
   NO
   <?php }?>
   </td>
   <td width="56" align="left">
	<a href="admin.php?action=permission&catid=editpermission&prid=<?php echo $vquery['prid'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
    <a href="admin.php?action=permission&catid=viewpermission&prid=<?php echo $vquery['prid'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
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
 if($_GET['catid']=='editpermission')
  {
?>

<div class="page">

<?php
  //$id= $_GET["prid"]; 
  $query= "SELECT * FROM permission LEFT JOIN admin ON permission.uid=admin.id LEFT JOIN menu ON permission.menuid=menu.mid where prid='".$_GET["prid"]."'";
  $rsquery= mysql_query($query); 
  while ($vquery2= mysql_fetch_array($rsquery))
  {
?>


 <form action="admin.php?action=editnews&catid=36" method="post" enctype="multipart/form-data">

   
<div class="textbar"> <label for="Newsheadline">User Name </label> </div>
<div class="textbar"> <select name="uname">
        <?php
        $query= "SELECT * FROM permission LEFT JOIN admin ON permission.uid=admin.id order by prid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?> 
    <option value="<?php echo $vquery['uid'];?>"><?php echo $vquery['username'];?></option>
    
      <?php } ?>          
                <?php
				$query= "SELECT * FROM admin order by id DESC";
				$rsquery= mysql_query($query); 
				while ($vquery3=mysql_fetch_array($rsquery))
				{
                ?>
                <option value="<?php echo $vquery3['id'];?>"><?php echo $vquery3['username'];?></option>
                <?php } ?>
</select></div>

<div class="textbar"> <label for="Newsheadline">Menu Name</label> </div>
<div class="textbar"> <select name="menuname">
                <?php
        $query= "SELECT * FROM permission LEFT JOIN menu ON permission.menuid=menu.mid order by prid DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
        <option value="<?php echo $vquery['mid'];?>"><?php echo $vquery['menuname'];?></option>
     
     <?php } ?>
                <?php
				$query= "SELECT * FROM menu order by mid DESC";
				$rsquery= mysql_query($query); 
				while ($vquery=mysql_fetch_array($rsquery))
				{
                ?>
                <option value="<?php echo $vquery['mid'];?>"><?php echo $vquery['menuname'];?></option>
                <?php } ?>
</select></div>

<div class="textbar"> <label for="Newsheadline">Permite</label> </div>

 <?php if ($vquery2['permite']=='yes') { ?>          
 <div class="textbar"><input name="permite" type="checkbox" checked="checked" value="yes" /></div> 
 <?php } elseif($vquery2['permite']!='yes') { ?>
 <div class="textbar"><input name="permite" type="checkbox"  value="yes" /></div> 
 <?php } ?>

<!--<div class="textbar"> <label for="Newsheadline"> <input name="permit" type="checkbox" value="yes" /></label> </div>-->
<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery2['prid']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>


<?php } } ?>

<div class="clr"></div>
</div>


