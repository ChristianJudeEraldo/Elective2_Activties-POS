<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale A</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="js/script.js"></script> -->
    <script>
        $(document).ready(function() {
            // Function to reset all relevant fields
            function resetForm() {
                // Clear inputs
                $('#price').val('');
                $('#quantity').val('');
                $('#amount_to_pay').val('');
                $('#amount_from_customer').val('');
                $('#change').val('');

                // Uncheck all radio buttons and image checkboxes
                $('input[type="radio"]').prop('checked', false);
                $('.pic_option input[type="checkbox"]').prop('checked', false);

                // Re-check the placeholder bundle checkboxes for display
                $('#deli_chicken').prop('checked', true);
                $('#halo_halo').prop('checked', true);
            }
            //event listener for CHANGE button
            $('#btn_calculate_bills').click(function(e) {
                e.preventDefault();
                var price = $('#price').val();
                var quantity = $('#quantity').val();

                var data_string = 'price=' + price;
                data_string += '&quantity=' + quantity;

                $.ajax({
                    type: 'POST',
                    url: 'process/pos1_calculate_pay.php',
                    data: data_string,
                    dataType: 'json',
                    success: function(result) {
                        var amount_to_pay = result.amount_to_pay;
                        $('#amount_to_pay').val(amount_to_pay);
                    }
                })
            });
            $('#btn_change').click(function(e) {
                e.preventDefault();
                var price = $('#price').val();
                var quantity = $('#quantity').val();
                var amount_to_pay = $('#amount_to_pay').val();
                var amount_from_customer = $('#amount_from_customer').val();

                var data_string = 'price=' + price;
                data_string += '&quantity=' + quantity;
                data_string += '&amount_to_pay=' + amount_to_pay;
                data_string += '&amount_from_customer=' + amount_from_customer;

                $.ajax({
                    type: 'POST',
                    url: 'process/pos1_change.php',
                    data: data_string,
                    dataType: 'json',
                    success: function(result) {
                        var amount_to_pay = result.amount_to_pay;
                        var change = result.change;

                        $('#amount_to_pay').val(amount_to_pay);
                        $('#change').val(change);
                    }
                })
            });

            // Auto-fill price when selecting a bundle radio button
            $('#optradio_A').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#price').val($(this).val());
                    $('#optradio_B').prop('checked', false);
                }
            });
            $('#optradio_B').on('change', function() {
                if ($(this).is(':checked')) {
                    $('#price').val($(this).val());
                    $('#optradio_A').prop('checked', false);
                }
            });
        });
    </script>

    <link rel="stylesheet" href="css/pos1_styles.css">

</head>

<body>
    <div class="container">
        <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold;">Sample Food Ordering Application</h1>
        <!-- Food Images Row -->
        <div class="row mb-4">
            <div class="col text-center">
                <img src="pizza_images/d1.jfif" alt="Barkada Meal 1" class="img-thumbnail" style="width:150px; height:150px;">
                <div>
                    <input type="checkbox" id="checkbox1" name="checkbox1">
                    <label for="checkbox1">Barkada Meal 1</label>
                </div>
            </div>
            <div class="col text-center">
                <img src="pizza_images/d2.jfif" alt="Family Meal A" class="img-thumbnail" style="width:150px; height:150px;">
                <div>
                    <input type="checkbox" id="checkbox2" name="checkbox2">
                    <label for="checkbox2">Family Meal A</label>
                </div>
            </div>
            <div class="col text-center">
                <img src="pizza_images/d3.jfif" alt="Chicken Value Meal 1" class="img-thumbnail" style="width:150px; height:150px;">
                <div>
                    <input type="checkbox" id="checkbox3" name="checkbox3">
                    <label for="checkbox3">Chicken Value Meal 1</label>
                </div>
            </div>
            <div class="col text-center">
                <img src="pizza_images/d4.jfif" alt="Family Drink Pack B" class="img-thumbnail" style="width:150px; height:150px;">
                <div>
                    <input type="checkbox" id="checkbox4" name="checkbox4">
                    <label for="checkbox4">Family Drink Pack B</label>
                </div>
            </div>
            <div class="col text-center">
                <img src="pizza_images/d5.jfif" alt="Barkada Meal 2" class="img-thumbnail" style="width:150px; height:150px;">
                <div>
                    <input type="checkbox" id="checkbox5" name="checkbox5">
                    <label for="checkbox5">Barkada Meal 2</label>
                </div>
            </div>
        </div>
        <!-- Main Content Row: Food Choices & Order Details -->
        <div class="row">
            <!-- Left: Food Order Choices -->
            <div class="col-md-5">
                <h5 style="font-weight:bold;">Food Order Choices:</h5>
                <div class="mb-2">
                    <input type="radio" name="bundle" id="optradio_A" value="500">
                    <label for="optradio_A">Food Bundle A</label>
                </div>
                <div class="mb-2">
                    <input type="radio" name="bundle" id="optradio_B" value="600">
                    <label for="optradio_B">Food Bundle B</label>
                </div>
                <div class="ml-4 mb-2">
                    <h6 style="font-weight:bold;">Food Bundles A:</h6>
                    <input type="checkbox" name="deli_chicken" id="deli_chicken">
                    <label for="deli_chicken">10 pcs. Delicious Friend Chicken</label>
                </div>
                <div class="ml-4">
                    <h6 style="font-weight:bold;">Food Bundles B:</h6>
                    <input type="checkbox" name="halo_halo" id="halo_halo">
                    <label for="halo_halo">4 Cups Special Halo-Halo Regular</label>
                </div>
            </div>
            <!-- Right: Order Details and Buttons -->
            <div class="col-md-7">
                <div class="row">
                    <!-- Order Details Labels & Inputs -->
                    <div class="col-md-7">
                        <h5 style="font-weight:bold;">Order Details:</h5>
                        <div class="form-group row align-items-center mb-2">
                            <label for="price" class="col-5 col-form-label">Price:</label>
                            <div class="col-7">
                                <input type="text" class="form-control" name="price" id="price" value="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-2">
                            <label for="quantity" class="col-5 col-form-label">Quantity:</label>
                            <div class="col-7">
                                <input type="text" class="form-control" name="quantity" id="quantity" value="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-2">
                            <label for="amount_to_pay" class="col-5 col-form-label">Amount To Pay:</label>
                            <div class="col-7">
                                <input type="text" class="form-control" name="amount_to_pay" id="amount_to_pay" value="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-2">
                            <label for="amount_from_customer" class="col-5 col-form-label">Cash From Customer:</label>
                            <div class="col-7">
                                <input type="text" class="form-control" name="amount_from_customer" id="amount_from_customer" value="">
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-2">
                            <label for="change" class="col-5 col-form-label">Change:</label>
                            <div class="col-7">
                                <input type="text" class="form-control" name="change" id="change" value="">
                            </div>
                        </div>
                    </div>
                    <!-- Buttons Vertically Aligned -->
                    <div class="col-md-5 d-flex flex-column justify-content-start align-items-stretch" style="margin-top:38px;">
                        <button type="button" id="btn_calculate_bills" name="calculate_bills" class="btn btn-primary mb-2">CALCULATE BILLS</button>
                        <button type="button" id="btn_change" name="change" class="btn btn-info mb-2">CHANGE</button>
                        <button type="button" id="btn_new" name="new" class="btn btn-secondary">NEW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>