$('document').ready(function() {

	$('select[name="brandname"]').on('change', function() {

		var stateID = $(this).val();
		console.log(stateID);

		if (stateID) {

			$.ajax({

				url : '/api/' + stateID,

				headers : {
					'X-CSRF-Token' : $('input[name="_token"]').val()
				},

				type : "GET",

				dataType : "json",

				success : function(data) {

					$('#list_model').empty();

					console.log(data);
					if (!$.isEmptyObject(data)) {
						$.each(data, function(i, value) {

							console.log(value.model_no);
							$('#list_model').append('<li value="' + value.model_no + '">' + value.model_no + '</li>');

						});
					}else{
						$('#list_model').append('Item is not Available');
					}

				}
			});

		} else {

			$('#list_model').empty();
		}

	});
});