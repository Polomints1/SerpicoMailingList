<?php
/*
Part of the code for the article "Use Ajax and PHP to Build Your Mailing List"
by Aarron Walter (aarron@aarronwalter.com)
http://www.sitepoint.com/article/use-ajax-php-build-mailing-list
*/
require_once("inc/storeAddress.php");
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Painless AJAX and PHP Mailing List Sign Up</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script type="text/javascript" src="js/prototype.js"></script>
    <script type="text/javascript" src="js/mailingList.js"></script>
  </head>
  <body>
<?php
if((DBHOST == "localhost") && (DBNAME == "yourdb") && (DBUSER == "youruser") && (DBPASS == "yourpass")) {
  echo("<p>Please edit <code>inc/dbConstants.php</code> to match your MySQL configuration.</p>");
}
else {
?>
    <form id="addressForm" action="index.php" method="get">
      <fieldset>
        <legend>Join our mailing list!</legend>
        <p>
          <input type="text" name="address" id="address" />
          <input type="submit" value="Sign Up" />
        </p>
        <p id="response"><?php echo(storeAddress()); ?></p>
      </fieldset>
    </form>
    <p><a href="createTable.php">Need to create a database table?</a></p>
<?php
}
?>
  </body>
</html>