<?php
require_once "jsonrpcphp/includes/jsonRPCClient.php";

$rpc_user = "naypam";
$rpc_pass = "godlike";
$rpc_ip   = "127.0.0.1";
$rpc_port = "11082";

$sql_host = "127.0.0.1";
$sql_db   = "wdchat";
$sql_user = "wdchat";
$sql_pass = "wdchat";

$wdc = new jsonRPCClient("http://$rpc_user:$rpc_pass@$rpc_ip:$rpc_port/");
$mysqli = new mysqli($sql_host, $sql_user, $sql_pass, $sql_db);
$ip = $_SERVER['REMOTE_ADDR'];
?>
