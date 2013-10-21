<?php
/* This simply returns true/false based of if an address is valid or not. 
 * It's for use with jQuery's AJAX. 
 */

require "config.php";

$validation_data = $wdc->validateaddress($_GET["address"]);

if (is_array($validation_data)) {
	print $validation_data["isvalid"];
}
?>
