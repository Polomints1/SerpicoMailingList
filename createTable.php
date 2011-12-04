<?php
/*
Part of the code for the article "Use Ajax and PHP to Build Your Mailing List"
by Aarron Walter (aarron@aarronwalter.com)
http://www.sitepoint.com/article/use-ajax-php-build-mailing-list
*/
require_once("inc/dbConstants.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Creating Table</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  </head>
  <body>
    <p>Creating database tables&hellip;</p>
<?php
// Connect to database
$con = mysql_connect(DBHOST ,DBUSER, DBPASS);
mysql_select_db(DBNAME, $con);
// Create mailinglist table 
$result = mysql_query("CREATE TABLE `mailinglist` ( `id` INT NOT NULL AUTO_INCREMENT , `email` TEXT NOT NULL ,  PRIMARY KEY ( `id` ) );");
if(mysql_error()){
  echo("<p>There was an error creating the database table.</p>");
}
else {
  echo("<p>Database table created.</p>");
}
?>
  </body>
</html>