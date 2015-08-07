<?php 

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

//echo $_SERVER["REQUEST_URI"] 


//functions

//truncate string
function truncate($string,$length=160,$append=".") {
  $string = trim($string);

  if(strlen($string) > $length) {
    $string = wordwrap($string, $length);
    $string = explode("\n",$string);
    $string = array_shift($string) . $append;
  }

  return $string;
}


//format date
function dateForm($date) {
  $postDate = date('Y-m-d', strtotime($date));
  return $postDate;

}

//site variables
$baseTitle = "Atlanta Metro Sod";
//$baseurl = "http://bobbypark.com";
$phone ='(470) 899-8125';
$phoneURL ='tel:14708998125';
$email = 'atlantametrosod@yahoo.com';
?>

