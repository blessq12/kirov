$(document).ready(function(){
$(alert_success).hide();
	$(callbackform).submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function(){
			$(call_input).val('Успешно отправлено, спасибо.');
		});
	});
	$(mf).submit(function(e){
		e.preventDefault();
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function(){
			$(modal_name).val('');
			$(modal_phone).val('');
			$(alert_success).slideDown('400');
		});
	});
});