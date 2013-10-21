<?php
require_once "jsonrpcphp/includes/jsonRPCClient.php";

$wdc = new jsonRPCClient("http://naypam:godlike@127.0.0.1:11082/");
$ip = $_SERVER['REMOTE_ADDR'];
$deposit_address = $wdc->getaccountaddress($ip);
$balance = $wdc->getbalance($ip, 2);
$transactions = $wdc->listtransactions($ip);
?>
<!doctype html>
<html>
<head>
	<title>Worldcoin Chat</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
	<script src="js/index.js"></script>
</head>

<body>

<div id="chatbox"></div>

<form action="javascript:send_message()">
	<input type="text" name="message" placeholder="Message" autofocus>
	<input type="submit" value="Post">
</form>

<div id="wdc_info">
	Deposit address: <?php print $deposit_address ?>
	<br>
	Balance: <?php printf("%.8f", $balance) ?>
	<br>
	<form id="withdraw_wdc" action="send.php" method="post" autocomplete="off">
		<label for="withdraw_address">Withdraw</label>
		<input id="withdraw_address" type="text" name="address" placeholder="WDC Address" onkeyup="validate_address(this) "onchange="validate_address(this)">
		<label for="withdraw_amount">Amount</label>
		<input id="withdraw_amount" type="text" name="amount" placeholder="Amount">
		<input type="submit" value="Send">
	</form>
</div>

<?php if (is_array($transactions) && sizeof($transactions) > 0) { ?>
<div id="transactions">
	<pre>
		<?php print_r($transactions); ?>
	</pre>
</div>
<?php } ?>

</body>
</html>
