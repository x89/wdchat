<?php
require_once "jsonrpcphp/includes/jsonRPCClient.php";

$rpc_user = "naypam";
$rpc_pass = "godlike";
$rpc_ip   = "127.0.0.1";
$rpc_port = "11082";

$wdc = new jsonRPCClient("http://$rpc_user:$rpc_pass@$rpc_ip:$rpc_port/");
$ip = $_SERVER['REMOTE_ADDR'];
?>
