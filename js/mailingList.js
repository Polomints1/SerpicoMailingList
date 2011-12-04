/*
Part of the code for the article "Use Ajax and PHP to Build Your Mailing List"
by Aarron Walter (aarron@aarronwalter.com)
http://www.sitepoint.com/article/use-ajax-php-build-mailing-list
*/

// Attach handler to window load event
Event.observe(window, 'load', init, false);

function init() {
  // Attach handler to form's submit event
  Event.observe('addressForm', 'submit', storeAddress);
}

function storeAddress(e) {
  // Update user interface
  $('response').innerHTML = 'Adding email address...';
  // Prepare query string and send AJAX request
  var pars = 'address=' + escape($F('address'));
  var myAjax = new Ajax.Updater('response', 'ajaxServer.php', {method: 'get', parameters: pars});
  // Stop form from submitting when JavaScript is enabled
  Event.stop(e);
}