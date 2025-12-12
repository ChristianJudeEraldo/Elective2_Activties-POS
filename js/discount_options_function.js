$(document).ready(function() {
    // 1. Initial State: Uncheck all radio buttons on load
    $("#senior").prop("checked", false);
    $("#employee").prop("checked", false);
    $("#disc_card").prop("checked", false);
    $("#none").prop("checked", false);

    // 2. Variable Declaration
    var price, quantity, discount_amount, discounted_amount;
    var discount_option;

    // 3. Function to update the HTML input boxes with calculated values
    function get_data(){
        // Note: 'price' is a number here, we might want to format it back if needed,
        // but for raw value assignment this works.
        // Ideally we keep the 'P' prefix logic separate or handle it in PHP,
        // but following the manual's direct assignment style:
        
        // Convert numbers back to fixed decimals for display
        $("#discount_amount").val(discount_amount.toFixed(2));
        $("#discounted_amount").val(discounted_amount.toFixed(2));
        
        // Note: Your HTML doesn't have a hidden input for 'discount_option' in the screenshots provided,
        // but the manual requires it for the Save function later. 
        // If it exists (hidden), this will update it.
        if(document.getElementById("discount_option")) {
             document.getElementById("discount_option").value = discount_option;
        }
    }

    // 4. Function to get Price and Quantity from inputs
    function get_data_price_quantity(){
        // Remove 'P' and commas to get a clean number
        var priceStr = $("#price").val().replace(/[P,]/g, ''); 
        price = parseFloat(priceStr) || 0; 
        
        // Your HTML id is 'quantity', not 'quantity1'
        quantity = parseFloat($("#quantity").val()) || 0; 
    }

    // --- EVENT LISTENERS FOR RADIO BUTTONS ---

    // 5. Senior Citizen (30% Discount)
    $("#senior").click(function(e) {
        if ($(this).prop("checked") == true) {
            get_data_price_quantity();
            
            discount_option = 'Senior Citizen';
            discount_amount = (price * quantity) * 0.30;
            discounted_amount = (price * quantity) - discount_amount;
            
            get_data();
            
            // Uncheck others
            $("#employee").prop("checked", false);
            $("#disc_card").prop("checked", false);
            $("#none").prop("checked", false);
        }
    });

    // 6. With Discount Card (20% Discount)
    $("#disc_card").click(function(e) {
        if ($(this).prop("checked") == true) {
            get_data_price_quantity();
            
            discount_option = 'With Disc. Card';
            discount_amount = (price * quantity) * 0.20;
            discounted_amount = (price * quantity) - discount_amount;
            
            get_data();
            
            // Uncheck others
            $("#employee").prop("checked", false);
            $("#senior").prop("checked", false);
            $("#none").prop("checked", false);
        }
    });

    // 7. Employee Discount (15% Discount)
    $("#employee").click(function(e) {
        if ($(this).prop("checked") == true) {
            get_data_price_quantity();
            
            discount_option = 'Employee Disc.';
            discount_amount = (price * quantity) * 0.15;
            discounted_amount = (price * quantity) - discount_amount;
            
            get_data();
            
            // Uncheck others
            $("#disc_card").prop("checked", false);
            $("#senior").prop("checked", false);
            $("#none").prop("checked", false);
        }
    });

    // 8. No Discount (0% Discount)
    $("#none").click(function(e) {
        if ($(this).prop("checked") == true) {
            get_data_price_quantity();
            
            discount_option = 'No Discount';
            discount_amount = 0.00;
            discounted_amount = (price * quantity);
            
            get_data();
            
            // Uncheck others
            $("#disc_card").prop("checked", false);
            $("#senior").prop("checked", false);
            $("#employee").prop("checked", false);
        }
    });
});