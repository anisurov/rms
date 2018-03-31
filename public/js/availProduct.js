$('document').ready(function() {

	$('select[name="brandname"]').on('change', function() {

		var brandname = $(this).val();
		//console.log(stateID);

		if (brandname != '') {

			$.ajax({

				url : '/checkproduct',
				type : "POST",
				data : {
					brandname : brandname
				},
				headers : {
					'X-CSRF-Token' : $('input[name="_token"]').val()
				},

				dataType : "json",

				success : function(data) {

					if (!$.isEmptyObject(data)) {
						$('select[name="modelno"]').empty();
						$('select[name="modelno"]').append('<option value="">---Select Model---</option>');
						$.each(data, function(i, value) {
							console.log(value.model_no);
							$('select[name="modelno"]').append('<option value="' + value.model_no + '">' + value.model_no + '</option>');

						});
					} else {

						$('select[name="modelno"]').empty();
						$('select[name="modelno"]').append('<option value="">---Select Model---</option>');
					}
				}
			});

		} else {

			$('select[name="modelno"]').empty();
			$('select[name="modelno"]').append('<option value="">---Select Model---</option>');
		}

	});
	$('select[name="modelno"]').on('change', function() {

		var modelno = $(this).val();
		var brandname = $('select[name="brandname"]').val();
		console.log(modelno);
		if (modelno != '') {

			$.ajax({

				url : '/checkproduct',
				type : "POST",
				data : {
					modelno : modelno,
					brandname : brandname
				},

				headers : {
					'X-CSRF-Token' : $('input[name="_token"]').val()
				},

				dataType : "json",

				success : function(data) {

					console.log("returned data" + data);

					if (!$.isEmptyObject(data)) {
						$('#tbody').empty();

						$.each(data, function(i, value) {
							var sl = i + 1;
							var str = ' <tr> ' + '<td> ' + sl + '</td>' + '<td>' + brandname + '</td>' + '<td class="text-right">' + modelno + '</td>' + '<td class="text-right">' + value.amount + '</td>' + '<td class="text-right">' + value.buyprice + '</td>' + ' </tr> ';
							$('#tbody').append(str);
						});
					} else {
						$('#tbody').empty();
						$('#tbody').append('        This model is not available');
					}

				}
			});

		}

	});
});
