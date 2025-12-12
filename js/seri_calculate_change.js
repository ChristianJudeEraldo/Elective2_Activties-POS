$(document).ready(function() {
    
    // Event listener for CALCULATE CHANGE button
    $('#btn_calculate_change').click(function(e) {
        e.preventDefault();
        
        // Get values from input boxes using YOUR IDs
        var quantity = $('#quantity').val();
        var price = $('#price').val();
        var discount_amount = $('#discount_amount').val();
        var discounted_amount = $('#discounted_amount').val();
        var cash_given = $('#cash_given').val();
        
        // Running totals (convert to number with - 0)
        var total_quantity = $('#total_quantity').val() - 0;
        var total_discount_given = $('#total_disc_given').val() - 0;
        var total_discounted_given = $('#total_disc_amount').val() - 0;

        // Prepare data string (Keys match what PHP expects)
        var data_string = 'quantity1=' + quantity;
        data_string += '&price=' + price;
        data_string += '&discount_amount=' + discount_amount;
        data_string += '&discounted_amount=' + discounted_amount;
        data_string += '&total_quantity=' + total_quantity;
        data_string += '&total_discount_given=' + total_discount_given;
        data_string += '&total_discounted_given=' + total_discounted_given;
        data_string += '&cash_given=' + cash_given;

        $.ajax({
            type: 'POST',
            url: 'process/seri_pos_calculate_change.php',
            data: data_string,
            dataType: 'json',
            success: function(result) {
                // Update the input boxes with results from PHP
                var total_quantity = result.total_quantity;
                var total_discount_given = result.total_discount_given;
                var total_discounted_given = result.total_discounted_given;
                var change = result.change;

                $('#total_quantity').val(total_quantity);
                $('#total_disc_given').val(total_discount_given);
                $('#total_disc_amount').val(total_discounted_given);
                $('#change').val(change);
            }
        });
    });

    // Event listener for NEW button
    $('#btn_new').click(function(e) {
        e.preventDefault();
        
        // Clear all fields using YOUR IDs
        $('#item_name').val('');
        $('#quantity').val('');
        $('#price').val('');
        $('#discount_amount').val('');
        $('#discounted_amount').val('');
        $('#cash_given').val('');
        $('#change').val('');
        
        // Uncheck radio buttons using YOUR IDs
        $('#senior').prop('checked', false);
        $('#disc_card').prop('checked', false);
        $('#employee').prop('checked', false);
        $('#none').prop('checked', false);
        
        // If you have a hidden discount_option field
        if($('#discount_option').length > 0){
            $('#discount_option').val('');
        }
    });
});