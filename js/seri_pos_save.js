$(document).ready(function() {
    
    $('#btn_save').click(function(e) {
        e.preventDefault();

        // 1. Get Values AND Clean them (Remove 'P' and ',')
        var item_name = $('#item_name').val();
        var quantity = $('#quantity').val();
        
        // FIX: Replace 'P' and ',' with empty string to get just the number
        var price = $('#price').val().replace(/[P,]/g, '');
        var discount_amount = $('#discount_amount').val().replace(/[P,]/g, '');
        var discounted_amount = $('#discounted_amount').val().replace(/[P,]/g, '');
        
        var total_quantity = $('#total_quantity').val();
        
        // FIX: Clean these totals too
        var total_discount_given = $('#total_disc_given').val().replace(/[P,]/g, '');
        var total_discounted_given = $('#total_disc_amount').val().replace(/[P,]/g, '');
        
        var cash_given = $('#cash_given').val().replace(/[P,]/g, '');
        var change = $('#change').val().replace(/[P,]/g, '');

        // 2. Determine Discount Option from Radio Buttons
        var discount_option = "No Discount"; 
        if ($('#senior').is(':checked')) {
            discount_option = "Senior Citizen";
        } else if ($('#disc_card').is(':checked')) {
            discount_option = "With Disc. Card";
        } else if ($('#employee').is(':checked')) {
            discount_option = "Employee Disc.";
        }

        // 3. Prepare Data String
        var data_string = 'item_name=' + item_name;
        data_string += '&quantity1=' + quantity;
        data_string += '&price=' + price;
        data_string += '&discount_amount=' + discount_amount;
        data_string += '&discounted_amount=' + discounted_amount;
        data_string += '&total_quantity=' + total_quantity;
        data_string += '&total_discount_given=' + total_discount_given;
        data_string += '&total_discounted_given=' + total_discounted_given;
        data_string += '&cash_given=' + cash_given;
        data_string += '&change=' + change;
        data_string += '&discount_option=' + discount_option;

        // 4. Send to PHP via AJAX
        $.ajax({
            type: 'POST',
            url: 'process/seri_pos_save.php',
            data: data_string,
            dataType: 'json',
            success: function(result) {
                if (result.ok) {
                    alert('Data successfully added!');
                    window.location.href = "http://localhost/lpu_web_development/pos1_page.php";
                }
            }
        });
    });
}); 