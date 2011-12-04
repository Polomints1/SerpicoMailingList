<?
/*
Part of the code for the article "Use Ajax and PHP to Build Your Mailing List"
by Aarron Walter (aarron@aarronwalter.com)
http://www.sitepoint.com/article/use-ajax-php-build-mailing-list
*/
require_once("dbConstants.php");

function storeAddress() {
  $message = "&nbsp;";
  // Check for an email address in the query string
  if( !isset($_GET['address']) ){
    // No email address provided
  }
  else {
    // Get email address from the query string
    $address = $_GET['address'];
    // Validate Address
    if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $address)) {
      $message = "<strong>Error</strong>: An invalid email address was provided.";
    }
    else {
      // Connect to database
      $con = mysql_connect(DBHOST ,DBUSER, DBPASS);
      mysql_select_db(DBNAME, $con);
      // Insert email address into mailinglist table 
      $result = mysql_query("INSERT INTO mailinglist SET email='" . $address . "'");
      if(mysql_error()){
        $message = "<strong>Error</strong>: There was an error storing your email address.";
      }
      else {
        $message = "Thanks for signing up!";
      }
    }
  }
  return $message;
}
?>