                       
                     <!--======================================= National News  ===================================

                        ==========================================================================================-->
                       
<?php
  if($_GET['catid']=='1')
  {

   $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

$Vquery= "UPDATE newstype SET title='".$_POST['natitle']."',category='national',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."', ";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=nationalnews&catid=viewnationa&msg=$msg"); //
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=nationalnews&catid=editnationa&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
	
?>


               <!--======================================= Saradesh News ===================================

                   ==========================================================================================-->
             


 <?php
  if($_GET['catid']=='2')
  {
	  
   $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	  

if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['saratitle']."',category='saradesh',sardes_category='".$_POST['division']."',
description='".$content."',";


if(!empty($fName)){
	$Vquery .= "images='".$filePath."', ";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=saradesh&catid=viewsaradesh&msg=$msg"); //
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=saradesh&catid=editsaradesh&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                         <!--======================================= Politics News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='21')
  {

    $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}






$Vquery= "UPDATE newstype SET title='".$_POST['ptitle']."',category='politics',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');
*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=politics&catid=viewpolitics&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=politics&catid=editpolitics&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  


                         <!--======================================= Sports News ======================================

                            ==========================================================================================-->




 <?php
 if($_GET['catid']=='3')
  {

    $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['sportstitle']."',category='sports',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',
topnews ='".$_POST['topnews']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=sports&catid=viewsports&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=sports&catid=editports&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                           <!--======================================= International News ======================================

                            ==========================================================================================-->




 <?php
 if($_GET['catid']=='4')
  {

    $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}





$Vquery= "UPDATE newstype SET title='".$_POST['intertitle']."',category='international',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=international&catid=viewinternational&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=international&catid=editinternationl&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  

  


                          <!--======================================= Finance News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='5')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	

if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['financtitle']."',category='finance',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a')*/;

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=finance&catid=viewfinance&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=finance&catid=editfinance&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
                             <!--======================================= Entertainment News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='6')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);	

if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['entertitle']."',category='entertainment',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',
topnews='".$_POST['topnews']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=entertainment&catid=viewentertainment&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=entertainment&catid=editentertainment&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
                                <!--======================================= Education News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='7')
  {


  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

$Vquery= "UPDATE newstype SET title='".$_POST['edtitle']."',category='educations',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');
*/
$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=education&catid=vieweducation&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=education&catid=editeducation&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
   
      
   
                                <!--======================================= Law News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='8')
  {


  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}





$Vquery= "UPDATE newstype SET title='".$_POST['lawtitle']."',category='lawcourt',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=law&catid=viewlaw&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=law&catid=editlaw&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
                                   <!--======================================= Health News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='9')
  {


  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE newstype SET title='".$_POST['healtitle']."',category='health',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=law&catid=viewlaw&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=law&catid=editlaw&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
                          <!--======================================= Technology  News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='10')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);



if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['techtitle']."',category='informationscience',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=technology&catid=viewtechnology&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=technology&catid=edittechnology&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   
   
   
                             <!--======================================= Editorial  News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='11')
  {


$editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE newstype SET title='".$_POST['eidtitle']."',category='editorial',description='".$content."',";


if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=editorial&catid=vieweditorial&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=editorial&catid=editeditorial&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   

   
                                           
                             <!--======================================= Special Feature News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='12')
  {


 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

$Vquery= "UPDATE newstype SET title='".$_POST['sptitle']."',category='specialfeature',description='".$content."',";



if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}



$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');
*/
$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=special&catid=viewspecial&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=special&catid=editspecial&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  
   
   

   
   
                            
                             <!--======================================= Islam News ======================================

                            ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='13')
  {


 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}





$Vquery= "UPDATE newstype SET title='".$_POST['Istitle']."',category='islam',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regnid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=islam&catid=viewislam&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=islam&catid=editnislam&errors=$errors&nid=".$_POST['Regnid']."");
   die ();
      }	
    }
?>  




                             <!--======================================= Agreculture News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='14')
  {


$editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);



if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}




$Vquery= "UPDATE newstype SET title='".$_POST['agtitle']."',category='krishienvironment',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=agenvirinment&catid=viewag&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=agenvirinment&catid=editag&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                             <!--======================================= Media News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='15')
  {


  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

$Vquery= "UPDATE newstype SET title='".$_POST['metitle']."',category='media',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=medialist&catid=viewmedialist&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=medialist&catid=editmedia&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                             <!--======================================= Open Talk News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='16')
  {


$editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE newstype SET title='".$_POST['optitle']."',category='opentalk',description='".$content."',";


if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "images='".$filePath."',author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=opentalk&catid=viewopentalk&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=opentalk&catid=editopentalk&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                           <!--======================================= Interview News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='17')
  {

$editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}

$Vquery= "UPDATE newstype SET title='".$_POST['Intitle']."',category='interview',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit ('a');*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=interview&catid=viewinterview&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=interview&catid=editinterview&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  





                           <!--======================================= Art - Literature News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='18')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);



if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE newstype SET title='".$_POST['Intitle']."',category='artculture',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');
*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=industry&catid=viewindustry&msg=$msg"); //&msg=$msg
	 die ();
	}
	else
	{  
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=industry&catid=editindustry&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                           <!--======================================= Life Style News ======================================

                              ==========================================================================================-->
                            
    
    
    
  <?php
 if($_GET['catid']=='19')
  {
	  
	  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE newstype SET title='".$_POST['Intitle']."',category='lifestyle',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}

$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime= '".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');
*/

$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=lifestyle&catid=viewlifestyle&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=lifestyle&catid=editlifestyle&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                        <!--======================================= Rokomay News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='20')
  {


$editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);

if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}



$Vquery= "UPDATE newstype SET title='".$_POST['rokotitle']."',category='rokomary',description='".$content."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "author='".$_POST['reporter']."',slideshow='".$_POST['slide']."',bracking='".$_POST['bknews']."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=rokomari&catid=viewrokomari&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=rokomari&catid=editrokomari&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                        <!--======================================= Aj ki kothay News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='27')
  {


 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);

$Vquery= "UPDATE newstype SET title='".$_POST['sptitle']."',category='kothay',description='".$content."',youtube='".$_POST['youtube']."',ctime='".$CUR_D_Bangladesh."',cdate='".$GM_D ."',btime='".$presenttime."', bdate='".$presentDate."' WHERE nid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=ajkekothay&catid=viewaj&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=ajkekothay&catid=editaj&errors=$errors&nid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  








                        <!--======================================= Prayer Time News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='22')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


$Vquery= "UPDATE prayertime SET fozor='".$_POST['fozor']."',zuhor='".$_POST['zuhor']."',ashor='".$_POST['asor']."',magrib='".$_POST['magrib']."',esha='".$_POST['esha']."' WHERE pid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=payrertime&catid=viewpayer&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=payrertime&catid=editpayer&errors=$errors&pid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                        <!--======================================= photogallery News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='23')
  {




if (($_FILES["upimages"]["type"]=="image/gif") || ($_FILES["upimages"]["type"] == "image/jpg") || ($_FILES["upimages"]["type"] == "image/jpeg")|| ($_FILES["upimages"]["type"] == "image/png") )
		
 {
		if ($_FILES["upimages"]["error"] > 0 || $_FILES["upimages"]["error"] > 0)
		{
		
		echo "Return Code: " . $_FILES["upimages"]["error"] . "<br/>";
		}
		else
		{
		$tmp_name=$_FILES['upimages']['tmp_name'];
		$fName=$_FILES['upimages']['name'];
		// $n = rand(1,100000);
		$ImgName=$fName;
        $filePath="upload/$ImgName";
		move_uploaded_file($tmp_name,$filePath);
		}

}


$Vquery= "UPDATE photogallery SET ptitle='".$_POST['ptitle']."',";

if(!empty($fName)){
	$Vquery .= "images='".$filePath."',";
}


$Vquery .= "cdate='".$GM_D ."' WHERE gid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=photogallery&catid=viewphoto&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=photogallery&catid=editphoto&errors=$errors&gid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                             <!--======================================= Video Gallery News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='24')
  {


$Vquery= "UPDATE videogallery SET vtitle='".$_POST['vtitle']."',videogallery='".$_POST['videogallery']."',cdate='".$GM_D ."' WHERE vid='".$_POST['Regisid']."'";


/*var_dump($Vquery);
exit ('a');*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=videogallery&catid=viewvideo&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=videogallery&catid=editvideo&errors=$errors&vid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  





                             <!--======================================= Onlone survay  ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='25')
  {




$Vquery= "UPDATE poll SET name='".$_POST['qtitle']."',cdate='".$GM_D ."' WHERE id='".$_POST['Regisid']."'";


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=onlinesurvay&catid=viewservay&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=onlinesurvay&catid=editservay&errors=$errors&id=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  



                             <!--======================================= Weather survay  ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='26')
  {

   


$Vquery= "UPDATE weather SET dhaka='".$_POST['newdhaka']."',chittagong='".$_POST['newdhaka']."',khulna='".$_POST['newdhaka']."',sylhet='".$_POST['newdhaka']."',barishal='".$_POST['newdhaka']."',jessor='".$_POST['newdhaka']."',bogora='".$_POST['newdhaka']."',cdate='".$GM_D ."',ctime='".$CUR_D_Bangladesh."',
bdate='".$presentDate."',btime='".$presenttime."' WHERE wid='".$_POST['Regisid']."'";


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=weather&catid=viewweather&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=weather&catid=editweather&errors=$errors&wid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                             <!--======================================= About us ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='28')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


$Vquery= "UPDATE self SET stitle='".$_POST['abouttitle']."',category='".aboutus."',details='".$content."',cdate='".$GM_D ."',bdate='".$presentDate."'  WHERE sfid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit(aaa);*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=aboutus&catid=viewabout&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=aboutus&catid=editabout&errors=$errors&sfid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                             <!--======================================= Consultant ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='29')
  {

 $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);

$Vquery= "UPDATE self SET stitle='".$_POST['abouttitle']."',category='".consultant."',details='".$content."',cdate='".$GM_D ."',bdate='".$presentDate."' 
WHERE sfid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit(aaa);*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=consultant&catid=viewconsult&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=consultant&catid=editconsult&errors=$errors&sfid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  


                             <!--======================================= Consultant ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='31')
  {

  $editor=$_POST['editor1'];  
$content=preg_replace("/<\/?div[^>]*\>/i", "", $editor);


$Vquery= "UPDATE self SET stitle='".$_POST['abouttitle']."',category='".adrules."',details='".$content."',cdate='".$GM_D ."',bdate='".$presentDate."'  WHERE sfid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit(aaa);*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=consultant&catid=viewconsult&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=consultant&catid=editconsult&errors=$errors&sfid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  




                             <!--======================================= Braking News ======================================

                             ==========================================================================================-->
                         
    
    
    
  <?php
 if($_GET['catid']=='33')
  {


$Vquery= "UPDATE brakingtab SET bupdate='".$_POST['bknews']."' WHERE bid='".$_POST['Regisid']."'";

/*var_dump($Vquery);
exit(aaa);*/


$Query=mysql_query($Vquery); 

	if($Query)
	{
	 $msg="Update succesfully" ;
	 header("location:admin.php?action=brakingtab&catid=newbraking&msg=$msg"); //&msg=$msg
	 die ();
	 
	} else {  
	
   $errors="Update unsuccessfull" ; 
   header("location:admin.php?action=brakingtab&catid=newbraking&errors=$errors&bid=".$_POST['Regisid']."");
   die ();
      }	
    }
?>  