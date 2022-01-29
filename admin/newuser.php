<?php if ($_GET['catid']=='newuser') { ?>
<div class='title'> <em>Add New User</em> </div>

<?php } if (@$_GET['error']) {?>
<br />
<div class="alert alert-danger" role="alert"><?php if (isset($_GET['error'])) { echo "$_GET[error]"; } ?></div>
<?php } ?>

<?php if ($_GET['catid']=='viewuser') { ?>
<div class='title'> <em>View all user</em> </div>

<?php } if($_GET['catid']=='edituser') {?>

<div class='title'> <em>Edit The all User</em> </div>
<?php } ?>


<?php 
 if($_GET['catid']=='1')
  {

if($_POST['firstname']!='' && $_POST['lastname']!=''&& $_POST['email']!=''&& $_POST['username']!=''&& md5($_POST['password'])!='' && $_POST['phone']!='' 
&& $_POST['address']!='' && $_POST['status']!='' && $_POST['utype']!='')
 {
 
  
$query = "INSERT INTO admin (`first_name`,`last_name`,`email`,`username`,`password`,`phone`,`address`,`status`,`type`) 
Values ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['username']."','".md5($_POST['password'])."','".$_POST['phone']."'
,'".$_POST['address']."','".$_POST['status']."','".$_POST['utype']."')";
  

/*var_dump ($query);  
exit ("aaa");*/
  
$Query2= mysql_query($query) or die(mysql_error());


if($Query2)
	
	{
$msg= "New User Insert Successfully";
header("location:admin.php?action=newuser&catid=viewuser&msg=$msg"); //
	
	}else{ 
	
$error= "Some Information Was Wrong";
header("location:admin.php?action=newuser&catid=newuser&error=$error"); //
	  }
	  
	}
	else{
$error= "Some Information Was Wrong";	
header("location:admin.php?action=newuser&catid=newuser&error=$error"); //
	}
   }
?>




<?php 
 if($_GET['catid']=='newuser')
  {
?>

<div class="page">

<form action="admin.php?action=newuser&catid=1" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">First Name </label> </div>
<div class="textbar"> <input type="text" name="firstname"></div>
<div class="textbar"> <label for="Newsheadline">Last Name </label> </div>
<div class="textbar"> <input type="text" name="lastname"></div>
<div class="textbar"> <label for="Newsheadline">Email </label> </div>
<div class="textbar"> <input type="text" name="email"></div>
<div class="textbar"> <label for="Newsheadline">Username</label> </div>
<div class="textbar"> <input type="text" name="username"></div>
<div class="textbar"> <label for="Newsheadline">Password</label> </div>
<div class="textbar"> <input type="password" name="password"></div>
<div class="textbar"> <label for="Newsheadline">Phone</label> </div>
<div class="textbar"> <input type="text" name="phone"></div>
<div class="textbar"> <label for="Newsheadline">Address</label> </div>
<div class="textbar"> <textarea name="address" cols="30" rows="4"></textarea></div>
<div class="textbar"> <label for="Newsheadline">Status</label> </div>
<div class="textbar"> 
<select name="status">
<option selected="selected">--SELECT STATUS--</option>
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>
<div class="textbar"> <label for="Newsheadline">Type</label> </div>
<div class="textbar">
<select name="utype">
<option selected="selected">--SELECT TYPE--</option>
<option value="admin">Admin</option>
<option value="normalluser">Normall User</option>
</select>
</div>


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
 if($_GET['catid']=='viewuser')
  {
?>

<div class="page">  

  
<?php
$id=@$_GET["id"];
if($id!="")
{
    	
	$qryDelete="DELETE FROM admin WHERE id= '$id'";
	$rsDelete=mysql_query($qryDelete);
	
	if($rsDelete)
	{
		$demsg= "Delete Successfull";
		header("Location:admin.php?action=newuser&catid=viewuser&1&demsg=$demsg");
		die();
	}
	else {
	    $delerror= "Delete Failed";
		header("Location:admin.php?action=newuser&catid=viewuser&delerror=$delerror");
		die();
	}	
}

?>



<script type="text/javascript">

function confirmasubmit()
{
var agree= confirm("Are You Want To Delete This user?");
if (agree)
   
     return true ;
 else 
    return false;
   
}
</script>


    <table class="table table-bordered">
    <tr> 
    <td width="33" height="35" align="center">No</td>
    <td width="95" align="center">Full Name</td>
    <td width="95" align="center">username</td>
    <td width="56" align="center">Action</td>
    </tr>
    <?php
        $query= "SELECT * FROM admin order by id DESC";
        $rsquery= mysql_query($query); 
        while ($vquery=mysql_fetch_array($rsquery))
       {
    ?>
     
    <tr> 
    <td width="33" height="35">&nbsp;</td>
   <td width="95" align="center"><?php echo $vquery['first_name'];?>&nbsp;<?php echo $vquery['last_name'];?></td>
   <td width="95" align="center"><?php echo $vquery['username'];?></td>
   <td width="56" align="left">
   <a href="admin.php?action=newuser&catid=edituser&id=<?php echo $vquery['id'];?>"><i class="fa fa-edit" title="News Edit"></i></a>&nbsp;&nbsp;
<a href="admin.php?action=newuser&catid=viewuser&id=<?php echo $vquery['id'];?>" onclick="return confirmasubmit()"><i class="fa fa-trash-o" title="Delete News"></i></a>
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
 if($_GET['catid']=='edituser')
  {
?>

<div class="page">

<?php
  $id= $_GET["id"]; 
  $query= "SELECT * FROM admin where id='".$_GET["id"]."'";
  $rsquery= mysql_query($query); 
  $vquery= mysql_fetch_array($rsquery);
?>


 <form action="admin.php?action=editnews&catid=34" method="post" enctype="multipart/form-data">

<div class="textbar"> <label for="Newsheadline">First Name </label> </div>
<div class="textbar"> <input type="text" name="firstname" value="<?php echo $vquery['first_name'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Last Name </label> </div>
<div class="textbar"> <input type="text" name="lastname" value="<?php echo $vquery['last_name'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Email </label> </div>
<div class="textbar"> <input type="text" name="email" value="<?php echo $vquery['email'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Username</label> </div>
<div class="textbar"> <input type="text" name="username" value="<?php echo $vquery['username'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Password</label> </div>
<div class="textbar"> <input type="password" name="password" value="<?php echo $vquery['password'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Phone</label> </div>
<div class="textbar"> <input type="text" name="phone" value="<?php echo $vquery['phone'];?>"></div>
<div class="textbar"> <label for="Newsheadline">Address</label> </div>
<div class="textbar"> <textarea name="address" cols="30" rows="4"><?php echo $vquery['address'];?></textarea></div>
<div class="textbar"> <label for="Newsheadline">Status</label> </div>
<div class="textbar"> 
<select name="status">
<option selected="selected" value="<?php echo $vquery['status'];?>"><?php echo $vquery['status'];?></option>
<option value="active">active</option>
<option value="inactive">inactive</option>
</select>
</div>
<div class="textbar"> <label for="Newsheadline">Type</label> </div>
<div class="textbar">
<select name="utype">
<option selected="selected" value="<?php echo $vquery['type'];?>">
<?php echo $vquery['type'];?>

</option>
<option value="admin">admin</option>
<option value="normalluser">normall User</option>
</select>
</div>

<div class="textbar"><input type="hidden" name="Regisid" value="<?php echo $vquery['id']; ?>" /><button type="submit" class="btn btn-primary">Submit</button> </div>
 
</form>




<div class="clr"></div>
</div>

<?php } ?>
