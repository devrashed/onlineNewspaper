<?php
include ("dbconnect.php");
$sql ="update newstype set nstatus=nstatus+1 where title='".$_REQUEST['title']."'";
$q2=mysql_query($sql);
header('location:indetails.php?title='.$_REQUEST['title']); 
?>
