
<?php
$headers = "From:  " .$_POST['email']. "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$to="newsinbangladesh@gmail.com";
$sub=$_POST['email'];
$text="<html><body>

<strong>Name :</strong>".$_POST['name']."<br><strong>E-mail :</strong>".$_POST['email']."<br><strong>Phone Number :</strong>".$_POST['phone']."<br><strong>Comment :</strong>".$_POST['comment']."<br>


</body></html>";

mail ($to, $sub, $text,$headers);
$msg="আপনার অনুরুদটি পাঠানো হয়েছে ";
header ("location: contactus.php?msg=$msg");
?>