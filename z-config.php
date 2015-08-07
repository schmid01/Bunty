<?
if($_SERVER['REMOTE_ADDR'] == "::1" || $_SERVER['REMOTE_ADDR'] == "localhost" || $_SERVER['REMOTE_ADDR'] == "127.0.0.1" || strpos($_SERVER['SERVER_NAME'], 'local.') !== false)
{
	// $dbhost = "127.0.0.1";
	// $dbuser = "root";
	// $dbpasswd = "date44";
	// $dbname = "helping";
	// $baseurl="http://local.helping.4ed.us";
	// $baseurl_images = "http://local.helping.4ed.us/images";
}
else
{
	// $dbhost="localhost";
	// $dbname="releash4_bark";
	// $dbuser="releash4_bark";
	// $dbpasswd="Ph$#auliJa3";
	// $baseurl="http://helping.4ed.us";
	// $baseurl_images = "http://helping.4ed.us/images";
}

// connect to the db
//$link = mysql_connect($dbhost, $dbuser, $dbpasswd);
//if (!$link) {
  //  die('Could not connect: ' . mysql_error());
//}
//$db_selected = mysql_select_db($dbname, $link);
//if (!$db_selected) {
   // die ('Can\'t use dbreviews : ' . mysql_error());
//}