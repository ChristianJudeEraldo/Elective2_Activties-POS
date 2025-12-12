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
  <script src="js/script_seri_lights.js?v.1"></script>
  <script src="js/discount_options_function.js?v.1"></script>
  <script src="js/seri_calculate_change.js?v.1"></script>
  <script src="js/seri_pos_save.js?v.1"></script>

</head>
<body>
  <div class="container" style="margin-bottom:20px;">
    <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; font-family: Poppins">
      JUDE'S CHOICE STORE</h1>
    <h4 class="text-center" style="margin-bottom:20px; font-weight:bold; color:#333;">
      LIGHTS
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
        <div><img src="lights_images/L1.jpg" alt="Candle Lights"></div>
        <label for="CandleLights" id="CandleLights" price="2000.00">Candle Lights <b>P2,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L2.jpg" alt="Quartelites"></div>
        <label for="Quartelites" id="Quartelites" price="1600.00">Quartelites <b>P1,600.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L3.jpg" alt="Isle Lights"></div>
        <label for="IsleLights" id="IsleLights" price="1300.00">Isle Lights <b>P1,300.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L4.jpg" alt="Kitchen Lights"></div>
        <label for="KitchenLights" id="KitchenLights" price="3000.00">Kitchen Lights <b>P3,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L5.jpg" alt="Lounge Lights"></div>
        <label for="LoungeLights" id="LoungeLights" price="2200.00">Lounge Lights <b>P2,200.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L6.jpg" alt="Vivid Light"></div>
        <label for="VividLight" id="VividLight" price="2400.00">Vivid Light <b>P2,400.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L7.jpg" alt="Prism Glow"></div>
        <label for="PrismGlow" id="PrismGlow" price="3500.00">Prism Glow <b>P3,500.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L8.jpg" alt="Radiant Nest1"></div>
        <label for="RadiantNest1" id="RadiantNest1" price="3200.00">Radiant Nest1 <b>P3,200.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L9.jpg" alt="Radiant Nest2"></div>
        <label for="RadiantNest2" id="RadiantNest2" price="2900.00">Radiant Nest2 <b>P2,900.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L10.jpg" alt="Lumos Glow"></div>
        <label for="LumosGlow" id="LumosGlow" price="1500.00">Lumos Glow <b>P1,500.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L11.jpg" alt="Vivid Lamp"></div>
        <label for="VividLamp" id="VividLamp" price="2500.00">Vivid Lamp <b>P2,500.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L12.jpg" alt="Lumos Lamp"></div>
        <label for="LumosLamp" id="LumosLamp" price="1800.00">Lumos Lamp <b>P1,800.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L13.jpg" alt="Dual Light1"></div>
        <label for="DualLight1" id="DualLight1" price="2000.00">Dual Light1 <b>P2,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L14.jpg" alt="Dual Light2"></div>
        <label for="DualLight2" id="DualLight2" price="2200.00">Dual Light2 <b>P2,200.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L15.jpg" alt="AstraLite"></div>
        <label for="AstraLite" id="AstraLite" price="3400.00">AstraLite <b>P3,400.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L16.jpg" alt="Vivid Nest"></div>
        <label for="VividNest" id="VividNest" price="3200.00">Vivid Nest <b>P3,200.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L17.jpg" alt="Aurora"></div>
        <label for="Aurora" id="Aurora" price="4000.00">Aurora <b>P4,000.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L18.jpg" alt="Megalite"></div>
        <label for="Megalite" id="Megalite" price="2450.00">Megalite <b>P2,450.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L19.jpg" alt="Hexalite1"></div>
        <label for="Hexalite1" id="Hexalite1" price="2800.00">Hexalite1 <b>P2,800.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L20.jpg" alt="Hexalite2"></div>
        <label for="Hexalite2" id="Hexalite2" price="2900.00">Hexalite2 <b>P2,900.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L21.jpg" alt="Sky Halo"></div>
        <label for="SkyHalo" id="SkyHalo" price="1750.00">Sky Halo <b>P1,750.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L22.jpg" alt="Celestia Beam1"></div>
        <label for="CelestiaBeam1" id="CelestiaBeam1" price="4500.00">Celestia Beam1 <b>P4,500.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L23.jpg" alt="Celestia Beam2"></div>
        <label for="CelestiaBeam2" id="CelestiaBeam2" price="4300.00">Celestia Beam2 <b>P4,300.00</b></label>
    </div>

    <div class="pic_option">
        <div><img src="lights_images/L24.jpg" alt="Sunny Glow"></div>
        <label for="SunnyGlow" id="SunnyGlow" price="3450.00">Sunny Glow <b>P3,450.00</b></label>
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
  // Running totals
  let runningTotalQuantity = 0;
  let runningTotalDiscount = 0;
  let runningTotalDiscounted = 0;

  // Helper: get selected discount rate
  function getDiscountRate() {
    if ($('#senior').is(':checked')) return 0.30;
    if ($('#disc_card').is(':checked')) return 0.20;
    if ($('#employee').is(':checked')) return 0.15;
    return 0.00;
  }

  // Trigger discount calculation via PHP (only when a radio is selected)
  function triggerDiscountCalculation() {
    // do nothing if user hasn't selected a discount radio
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

  // ensure no discount radio is pre-selected and clear fields on load
  $('input[name="discount"]').prop('checked', false);
  $('#discount_amount').val('');
  $('#discounted_amount').val('');

  // Trigger calc only when user selects a discount radio
  $('input[name="discount"]').on('change', triggerDiscountCalculation);

  // Recalculate when price/quantity change ONLY if a radio is already selected
  $('#quantity, #price').on('input', function() {
    if ($('input[name="discount"]:checked').length) {
      triggerDiscountCalculation();
    }
  });

  // Calculate Change Button
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
        // Accumulate running totals
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

  // NEW button functionality (clear order fields, keep totals)
  $('#btn_new').click(function(e) {
    e.preventDefault();
    $('#item_name').val('');
    $('#price').val('');
    $('#quantity').val('');
    $('#discount_amount').val('');
    $('#discounted_amount').val('');
    $('#cash_given').val('');
    $('#change').val('');
    // Totals are retained (accumulated)
  });
});
</script>


</body>
</html>
