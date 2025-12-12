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

  <!-- External CSS -->
  <link rel="stylesheet" href="css/pos1_styles.css">

  <!--js scripts-->
  <script src="js/script_seri_local_bags.js?v.1"></script>
  <script src="js/discount_options_function.js?v.1"></script>
  <script src="js/seri_calculate_change.js?v.1"></script>
  <script src="js/seri_pos_save.js?v.1"></script>

</head>
<body>
  <div class="container" style="margin-bottom:20px;">
    <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; font-family: Poppins">
      JUDE'S CHOICE STORE</h1>
    <h4 class="text-center" style="margin-bottom:20px; font-weight:bold; color:#333;">
      LOCAL BAGS
    </h4>
    <div style="margin-top:30px; margin-bottom:10px">
        <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px;
                margin-bottom:5px; margin-left:40px; width:130px">SEARCH</button>
        <select id="product_option" name="product_option" style="width:250px; height:36px; padding:5px">
            <option value="">---------------select product</option>
            <option value="pos1_page.php">Kitchen Utensils</option>
            <option value="pos2_page.php">Perfumes</option>
            <option value="pos3_page.php">Pizza</option>
            <option value="pos4_page.php">Lights</option>
            <option value="pos5_page.php">Local Bags</option>
        </select>
    </div>

  <div class="pic_group">

    <div class="pic_option">
        <div><img src="local_bags/b1.jpg" alt="Island Bag1"></div>
        <label for="IslandBag1" id="IslandBag1" price="750.00">Island Bag1 <b>P750.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b2.jpg" alt="Island Bag2"></div>
        <label for="IslandBag2" id="IslandBag2" price="700.00">Island Bag2 <b>P700.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b3.jpg" alt="Banwa Bag"></div>
        <label for="BanwaBag" id="BanwaBag" price="650.00">Banwa Bag <b>P650.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b4.jpg" alt="Abaca Bag"></div>
        <label for="AbacaBag" id="AbacaBag" price="800.00">Abaca Bag <b>P800.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b5.jpg" alt="Pinoy Bag"></div>
        <label for="PinoyBag" id="PinoyBag" price="790.00">Pinoy Bag <b>P790.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b6.jpg" alt="Pinoy Sling"></div>
        <label for="PinoySling" id="PinoySling" price="650.00">Pinoy Sling <b>P650.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b7.jpg" alt="Maharlika"></div>
        <label for="Maharlika" id="Maharlika" price="900.00">Maharlika <b>P900.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b8.jpg" alt="Pamana Bag"></div>
        <label for="PamanaBag" id="PamanaBag" price="1000.00">Pamana Bag <b>P1,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b9.jpg" alt="Mini Bag"></div>
        <label for="MiniBag" id="MiniBag" price="600.00">Mini Bag <b>P600.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b10.jpg" alt="Likha Bag"></div>
        <label for="LikhaBag" id="LikhaBag" price="1000.00">Likha Bag <b>P1,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b11.jpg" alt="Phil Sports"></div>
        <label for="PhilSports" id="PhilSports" price="1200.00">Phil Sports <b>P1,200.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b12.jpg" alt="Pinta Bag"></div>
        <label for="PintaBag" id="PintaBag" price="1100.00">Pinta Bag <b>P1,100.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b13.jpg" alt="Alon Bag"></div>
        <label for="AlonBag" id="AlonBag" price="860.00">Alon Bag <b>P860.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b14.jpg" alt="Lakambini"></div>
        <label for="Lakambini" id="Lakambini" price="1500.00">Lakambini <b>P1,500.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b15.jpg" alt="Sinag Bag"></div>
        <label for="SinagBag" id="SinagBag" price="1300.00">Sinag Bag <b>P1,300.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b16.jpg" alt="Pinoy Basket1"></div>
        <label for="PinoyBasket1" id="PinoyBasket1" price="1250.00">Pinoy Basket1 <b>P1,250.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b17.jpg" alt="Pinoy Basket2"></div>
        <label for="PinoyBasket2" id="PinoyBasket2" price="1350.00">Pinoy Basket2 <b>P1,350.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b18.jpg" alt="Pinoy Tote"></div>
        <label for="PinoyTote" id="PinoyTote" price="760.00">Pinoy Tote <b>P760.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b19.jpg" alt="Dalisay Tote"></div>
        <label for="DalisayTote" id="DalisayTote" price="550.00">Dalisay Tote <b>P550.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b20.jpg" alt="Dayaw Bag"></div>
        <label for="DayawBag" id="DayawBag" price="895.00">Dayaw Bag <b>P895.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b21.jpg" alt="Sari Sari"></div>
        <label for="SariSari" id="SariSari" price="575.00">Sari Sari <b>P575.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b22.jpg" alt="Anluwage"></div>
        <label for="Anluwage" id="Anluwage" price="620.00">Anluwage <b>P620.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b23.jpg" alt="Yaman Bag"></div>
        <label for="YamanBag" id="YamanBag" price="1000.00">Yaman Bag <b>P1,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="local_bags/b24.jpg" alt="Kalayaan Bag"></div>
        <label for="KalayaanBag" id="KalayaanBag" price="1600.00">Kalayaan Bag <b>P1,600.00</b></label>
    </div>

</div>

  <div style="width:90%; display:flex; justify-content:space-between; margin-top:40px;">
  <!-- Order Details -->
  <div style="width:40%;">
    <h5 class="text-left" style="font-weight:bold;">Order Details:</h5>
    <div style="width:100%; text-align:left;">

            <div class="input_box">
              <span>Item Name:</span>
              <input type="text" name="item_name" id="item_name" value="" disabled>
            </div>

            <div class="input_box">
              <span>Price:</span>
              <input type="text" name="price" id="price" value="" disabled>
            </div>

            <div class="input_box">
              <span>Quantity:</span>
              <input type="text" name="quantity" id="quantity" value="">
            </div>

            <div class="input_box">
              <span>Discount Amount:</span>
              <input type="text" name="discount_amount" id="discount_amount" value="" disabled>
            </div>

             <div class="input_box">
              <span>Discounted Amount:</span>
              <input type="text" name="discounted_amount" id="discounted_amount" value="" disabled>
            </div>

             <div class="input_box">
              <span>Total Quantity:</span>
              <input type="text" name="total_quantity" id="total_quantity" value="" disabled>
            </div>

            <div class="input_box">
              <span>Total Discount Given:</span>
              <input type="text" name="total_disc_given" id="total_disc_given" value="" disabled>
            </div>

            <div class="input_box">
              <span>Total Discounted Amount:</span>
              <input type="text" name="total_disc_amount" id="total_disc_amount" value="" disabled>
            </div>

           <div class="input_box">
              <span>Cash Given:</span>
              <input type="text" name="cash_given" id="cash_given" value="">
            </div>

            <div class="input_box">
              <span>Change:</span>
              <input type="text" name="change" id="change" value="" disabled>
            </div>

    </div>
  </div>

<!-- Order Discount Options & Calculator -->
<div style="width:55%;">
  <h5 class="text-left" style="font-weight:bold;">Order Discount Options:</h5>
  <div style="margin-bottom:15px;">
    <input type="radio" name="discount" id="senior" class="discount-radio">
    <label for="senior">Senior Citizen</label>
    <input type="radio" name="discount" id="disc_card" class="discount-radio">
    <label for="disc_card">With Disc. Card</label>
    <input type="radio" name="discount" id="employee" class="discount-radio">
    <label for="employee">Employee Disc.</label>
    <input type="radio" name="discount" id="none" class="discount-radio">
    <label for="none">No Discount</label>
  </div>

  <!-- Top Buttons -->
  <div style="display:flex; gap:10px; margin-bottom:10px;">
    <button id="btn_calculate_change" class="btn btn-primary" style="width:190px;">CALCULATE CHANGE</button>
    <button id="btn_new" class="btn btn-danger" style="width:90px;">NEW</button>
    <button id="btn_save" class="btn btn-warning" style="width:90px;">SAVE</button>
    <button class="btn btn-secondary" style="width:95px;">UPDATE</button>
  </div>

  <!-- Calculator-->
  <div style="display:grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap:5px; width:100%; max-width:500px;">

    <button class="btn btn-primary" style="grid-row:1/6; grid-column:1/2; height:100%;">ENTER</button>
    <button class="btn btn-dark">/</button>
    <button class="btn btn-dark">*</button>
    <button class="btn btn-dark">-</button>
    <button class="btn btn-dark">+</button>
    <button class="btn btn-dark">9</button>
    <button class="btn btn-dark">8</button>
    <button class="btn btn-dark">7</button>
    <button class="btn btn-dark">6</button>
    <button class="btn btn-dark">5</button>
    <button class="btn btn-dark">4</button>
    <button class="btn btn-dark">3</button>
    <button class="btn btn-dark">2</button>
    <button class="btn btn-dark">1</button>
    <button class="btn btn-dark">.</button>
    <button class="btn btn-dark">0</button>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  // Enable Bootstrap tooltips if used
  $(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>

<script>
  // Handle select dropdown redirects
  $(document).ready(function () {
    $("select").click(function () {
      var open = $(this).data("isopen");
      if (open) {
        window.location.href = $(this).val();
      }
      // Toggle the open state
      $(this).data("isopen", !open);
    });
  });
</script>

<script>
  // Run this when the document is ready
  $(document).ready(function () {
    // Select all labels inside .pic_option
    const labels = document.querySelectorAll('.pic_option label');

    // Loop through each label and add a click event listener
    labels.forEach(label => {
      label.addEventListener('click', () => {
        // Get visible item name text (before the <b> tag)
        const itemName = label.childNodes[0].textContent.trim();
        // Get price from the custom attribute
        const price = label.getAttribute('price');

        // Update the textboxes
        $('#item_name').val(itemName);
        $('#price').val('P' + price);

        // Optional: highlight the selected item
        $('.pic_option label').removeClass('selected');
        label.classList.add('selected');
      });
    });
  });
</script>

<script>
$(document).ready(function() {
  // Running totals (kept from existing logic)
  let runningTotalQuantity = 0;
  let runningTotalDiscount = 0;
  let runningTotalDiscounted = 0;

  // Ensure no discount radio is pre-selected and clear fields on load
  $('input[name="discount"]').prop('checked', false);
  $('#discount_amount').val('');
  $('#discounted_amount').val('');

  function getDiscountRate() {
    if ($('#senior').is(':checked')) return 0.30;
    if ($('#disc_card').is(':checked')) return 0.20;
    if ($('#employee').is(':checked')) return 0.15;
    return 0.00;
  }

  function triggerDiscountCalculation() {
    // only run when user has selected a discount radio
    if ($('input[name="discount"]:checked').length === 0) return;

    var priceStr = $('#price').val().replace(/[P,]/g, '');
    var price = parseFloat(priceStr) || 0;
    var quantity = parseInt($('#quantity').val()) || 0;
    var discount_rate = getDiscountRate();

    if (price > 0 && quantity > 0) {
      $.ajax({
        url: 'process/calc.php',
        method: 'POST',
        data: {
          price: price,
          quantity: quantity,
          discount_rate: discount_rate
        },
        dataType: 'json',
        success: function(response) {
          $('#discount_amount').val('P' + response.discount_amount);
          $('#discounted_amount').val('P' + response.discounted_amount);
        },
        error: function() {
          $('#discount_amount').val('');
          $('#discounted_amount').val('');
        }
      });
    } else {
      $('#discount_amount').val('');
      $('#discounted_amount').val('');
    }
  }

  // Trigger calc only when user selects a discount radio
  $('input[name="discount"]').on('change', triggerDiscountCalculation);

  // Recalculate when price/quantity change ONLY if a radio is already selected
  $('#quantity, #price').on('input', function() {
    if ($('input[name="discount"]:checked').length) {
      triggerDiscountCalculation();
    }
  });

  // Calculate Change button (existing behavior retained)
  $('#btn_calculate_change').click(function(e) {
    e.preventDefault();
    var quantity = parseInt($('#quantity').val()) || 0;
    var discount_amount = ($('#discount_amount').val() || '').replace(/[P,]/g, '') || 0;
    var discounted_amount = ($('#discounted_amount').val() || '').replace(/[P,]/g, '') || 0;
    var cash_given = parseFloat($('#cash_given').val()) || 0;

    $.ajax({
      url: 'process/pos-quiz_change.php',
      method: 'POST',
      data: {
        quantity: quantity,
        discount_amount: discount_amount,
        discounted_amount: discounted_amount,
        amount_given: cash_given
      },
      dataType: 'json',
      success: function(response) {
        runningTotalQuantity += parseInt(response.total_quantity) || 0;
        runningTotalDiscount += parseFloat(response.total_discount) || 0;
        runningTotalDiscounted += parseFloat(response.total_discounted) || 0;

        $('#total_quantity').val(runningTotalQuantity);
        $('#total_disc_given').val('P' + runningTotalDiscount.toFixed(2));
        $('#total_disc_amount').val('P' + runningTotalDiscounted.toFixed(2));
        $('#change').val('P' + response.change);
      },
      error: function() {
        $('#change').val('Error');
      }
    });
  });

  // NEW button (existing behavior retained)
  $('#btn_new').click(function(e) {
    e.preventDefault();
    $('#item_name').val('');
    $('#price').val('');
    $('#quantity').val('');
    $('#discount_amount').val('');
    $('#discounted_amount').val('');
    $('#cash_given').val('');
    $('#change').val('');
    // totals retained
  });
});
</script>


</body>
</html>
