$('document').ready(function () {
    $('#from_date,#to_date').on('change', function () {

        var fromdate = $('#from_date').val();
        var todate = $('#to_date').val();
        console.log(fromdate);
        if (fromdate != '' && todate != '') {

            $.ajax({
                url: '/reportmonthly2',
                type: "POST",
                data: {
                    fromdate: fromdate,
                    todate: todate
                },
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                },
                dataType: "json",
                success: function (data) {
 $('#tbody').empty();
  $('#t1body').empty();
                    console.log("returned data" + data);

                    if (!$.isEmptyObject(data)) {
                       
                       $k=1;$j=1;
                        $.each(data, function (i, value) {
                            if(value.transaction=='buy')
                            {
                            var sl = $j;
                            var str = ' <tr> ' +
                                    '<td class="text-center"> ' + sl + '</td>' +
                                    '<td class="text-center">'+ value.date+'</td>' +
                                    '<td class="text-center">' + value.amount + '</td>' +
                                    '<td class="text-center">' + value.price + '</td>' +
                                    ' </tr> ';
                            $('#tbody').append(str);
                         $j=$j+1;
                            }
                        
                                if(value.transaction=='sell')
                            {
                            var sl = $k;
                            var str = ' <tr> ' +
                                    '<td class="text-center"> ' + sl + '</td>' +
                                    '<td class="text-center">'+ value.date+'</td>' +
                                    '<td class="text-center">' + value.amount + '</td>' +
                                    '<td class="text-center">' + value.price + '</td>' +
                                    ' </tr> ';
                            $('#t1body').append(str);
                            $k=$k+1;
                        }
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
