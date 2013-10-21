<?php
/* This simply returns true/false based of if an address is valid or not. 
 * It's for use with jQuery's AJAX. 
 */

require_once "jsonrpcphp/includes/jsonRPCClient.php";

$wdc = new jsonRPCClient("http://naypam:godlike@127.0.0.1:11082/");
$validation_data = $wdc->validateaddress($_GET["address"]);

if (is_array($validation_data)) {
	print $validation_data["isvalid"];
}
?>
