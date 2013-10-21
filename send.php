<?php
require_once "jsonrpcphp/includes/jsonRPCClient.php";

$wdc = new jsonRPCClient("http://naypam:godlike@127.0.0.1:11082/");
$ip = $_SERVER['REMOTE_ADDR'];
$address = $_POST["address"];
$amount = (int) $_POST["amount"];

$validation_data = $wdc->validateaddress($address);

if (!is_int($amount)) {
	die("Amount entered wasn't an integer.");
} elseif ($amount < 0) {
	die("You can't withdraw an negative amount.");
}

if ($wdc->getbalance($ip, 2) < $amount) {
	die("You do not have sufficient funds.");
}

if (is_array($validation_data)) {
	$wdc->sendfrom($ip, $address, $amount);
} else {
	die("The address you entered was not valid.");
}
?>
