 <br>
 <?php
    $query= "SELECT * FROM newstype where title='".$_REQUEST['title']."'";
	$rsquery= mysql_query($query); 
	$vquery=mysql_fetch_array($rsquery);
  ?>
<?php if ($vquery['category']=='national') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=national">জাতীয়</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='politics') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=politics">রাজনীতি</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='sports') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=sports">খেলা</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='international') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=international">আন্তর্জাতিক</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='finance') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=finance">অর্থ-বাণিজ্য</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='entertainment') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=entertainment">বিনোদন</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='educations') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=educations">শিক্ষার আলো</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='lawcourt') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=lawcourt">আইন-আদালত</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='informationscience') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=informationscience">তথ্য-প্রযুক্তি</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='health') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=health">স্বাস্থ্যকথা</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='editorial') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=editorial">সম্পাদকীয়</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='specialfeature') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=specialfeature">বিশেষ প্রতিবেদন</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='islam') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=islam">ইসলাম</a></li>
  <li class="active">বিস্তারিত</li>
</ol>


<?php } if ($vquery['category']=='krishienvironment') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=krishienvironment">কৃষি ও পরিবেশ</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='opentalk') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=opentalk">খোলা কলম</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='interview') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=interview">সাক্ষাৎকার</a></li>
  <li class="active">বিস্তারিত</li>
</ol>


<?php } if ($vquery['category']=='artculture') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=artculture">শিল্প- সাহিত্য</a></li>
  <li class="active">বিস্তারিত</li>
</ol>


<?php } if ($vquery['category']=='lifestyle') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=lifestyle">লাইফস্টাইল</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='rokomary') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=rokomary">রকমারি</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='saradesh') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=saradesh">সারাদেশ</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='khatme') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=saradesh">খাতমে নবুয়াত</a></li>
  <li class="active">বিস্তারিত</li>
</ol>

<?php } if ($vquery['category']=='dorbarsharif') {?>
<ol class="breadcrumb">
  <li><a href="index.php">মূলপাতা</a></li>
  <li><a href="inn.php?catid=saradesh">দরবার শারিফ</a></li>
  <li class="active">বিস্তারিত</li>
</ol>
<?php } ?>

