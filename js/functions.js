$(document).ready(function() {
	var url = 'json/vtex-json-orders.json';

	var handlebarsContent = function (data) {
		$("#address-template").html($('#emailHtml').val());

		var templateHandlebars = $("#address-template").html();
		var templateCompile = Handlebars.compile(templateHandlebars);

		$('#emailHtml').val(templateCompile(data));

		$.ajax({
			url: 'send_mail.php',
			type: 'POST',
			data: $('.form-horizontal').serialize()
		})
		.done(function(data) {
			$('.result').html(data);
		})
		.fail(function() {
			console.log("error");
		})
	};

	$('.form-horizontal').submit(function(evt) {
		evt.preventDefault();

		var selectJson = $('#selectJson').val();

		if (selectJson == 1)
			url = 'json/vtex-json-orders.json';
		else if (selectJson == 2)
			url = 'json/vtex-json.json';
		else if (selectJson == 3)
			url = 'json/vtex-json-orders-giftlist.json';
		else if (selectJson == 4)
			url = 'json/vtex-json-order.json';

		if (selectJson == "customized")
			return handlebarsContent($.parseJSON($('#jsonCustomized').val()));

		$.ajax({
			url: url,
			method: 'GET',
			dataType: 'json'
		}).done(function(data) {
			handlebarsContent(data);
		}).fail(function() {
			console.log("error");
		});
	});

	$('#selectJson').on('change', function() {
		if ($(this).val() == "customized") {
			$('.json-customized').removeClass('hide');
		} else {
			$('.json-customized').addClass('hide');
		}
	});
});