$(document).ready(function(){
	$(calculate).click(function(){
		event.preventDefault();

		let len = $(lenght).val();
		let wid = $(width).val();

		let type = $(type_carpet).val();
		let hei = $(carp_height).val();

		let multi = len * wid;

		let price = '';
		let total = '';

		switch (type) {
			case '1': price = multi * 300;
				break;
			case '2': price = multi * 300;
				break;
		};
		switch (hei) {
			case '1': total = price * 1;
				break;
			case '2': total = price * 1;
				break;
		};
		let price_round = total.toFixed(2);
		if(len == '' && wid == ''){
			$(cost).html('Нет данных')
		} else {
		$(cost).html(price_round + 'руб.');
		}
	});
});