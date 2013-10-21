function validate_address(dom) {
	$.ajax({
		url: 'validate.php',
		data: {
			'address': dom.value
		},
		success: function(result) {
			if (result == 1) {
				$(dom).removeClass('invalid_wdc');
				$(dom).addClass('valid_wdc');
			} else {
				$(dom).removeClass('valid_wdc');
				$(dom).addClass('invalid_wdc');
			}
		}
	});
}
