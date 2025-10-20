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
</head>
<body>
  <div class="container" style="margin-bottom:20px;">
    <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; font-family: Poppins">
      JUDE'S CHOICE STORE</h1>
    <h4 class="text-center" style="margin-bottom:20px; font-weight:bold; color:#333;">
      PIZZAS
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
          <div><img src="pizza_images/d1.jfif" alt="Margherita Pizza"></div>
          <label for="Margherita" id="Margherita" price="350.00">Margherita <b>P350.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d2.jfif" alt="Pepperoni Pizza"></div>
          <label for="Pepperoni" id="Pepperoni" price="450.00">Pepperoni <b>P450.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d3.jfif" alt="Hawaiian Pizza"></div>
          <label for="Hawaiian" id="Hawaiian" price="400.00">Hawaiian <b>P400.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d4.jfif" alt="BBQ Chicken Pizza"></div>
          <label for="BBQChicken" id="BBQChicken" price="500.00">BBQ Chicken <b>P500.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d5.jfif" alt="Veggie Pizza"></div>
          <label for="Veggie" id="Veggie" price="350.00">Veggie <b>P350.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d6.jfif" alt="Four Cheese Pizza"></div>
          <label for="FourCheese" id="FourCheese" price="480.00">Four Cheese <b>P480.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d7.jfif" alt="Meat Lovers Pizza"></div>
          <label for="MeatLovers" id="MeatLovers" price="550.00">Meat Lovers <b>P550.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d8.jfif" alt="Supreme Pizza"></div>
          <label for="Supreme" id="Supreme" price="600.00">Supreme <b>P600.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d9.jfif" alt="Marinara Pizza"></div>
          <label for="Marinara" id="Marinara" price="300.00">Marinara <b>P300.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d10.jfif" alt="Chicken Bacon Ranch"></div>
          <label for="ChickenBaconRanch" id="ChickenBaconRanch" price="520.00">Chicken Bacon Ranch <b>P520.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d11.jfif" alt="Seafood Pizza"></div>
          <label for="Seafood" id="Seafood" price="600.00">Seafood <b>P600.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d12.jfif" alt="Buffalo Chicken"></div>
          <label for="BuffaloChicken" id="BuffaloChicken" price="500.00">Buffalo Chicken <b>P500.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d13.jfif" alt="Mushroom Pizza"></div>
          <label for="Mushroom" id="Mushroom" price="400.00">Mushroom <b>P400.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d14.jfif" alt="Taco Pizza"></div>
          <label for="Taco" id="Taco" price="450.00">Taco <b>P450.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d15.jfif" alt="Spinach Pizza"></div>
          <label for="Spinach" id="Spinach" price="350.00">Spinach <b>P350.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d16.jfif" alt="Italian Sausage Pizza"></div>
          <label for="ItalianSausage" id="ItalianSausage" price="500.00">Italian Sausage <b>P500.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d17.jfif" alt="Pepperoni & Mushroom"></div>
          <label for="PepperoniMushroom" id="PepperoniMushroom" price="550.00">Pepperoni & Mushroom <b>P550.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d18.jfif" alt="Cheese Lovers"></div>
          <label for="CheeseLovers" id="CheeseLovers" price="500.00">Cheese Lovers <b>P500.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d19.jfif" alt="Hawaiian Deluxe"></div>
          <label for="HawaiianDeluxe" id="HawaiianDeluxe" price="520.00">Hawaiian Deluxe <b>P520.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d20.jfif" alt="Veggie Supreme"></div>
          <label for="VeggieSupreme" id="VeggieSupreme" price="480.00">Veggie Supreme <b>P480.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d21.jpg" alt="Buffalo Supreme"></div>
          <label for="BuffaloSupreme" id="BuffaloSupreme" price="550.00">Buffalo Supreme <b>P550.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d22.jpg" alt="Double Cheese Pizza"></div>
          <label for="DoubleCheese" id="DoubleCheese" price="500.00">Double Cheese <b>P500.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d23.jpg" alt="BBQ Supreme"></div>
          <label for="BBQSupreme" id="BBQSupreme" price="600.00">BBQ Supreme <b>P600.00</b></label>
      </div>

      <div class="pic_option">
          <div><img src="pizza_images/d24.jpg" alt="Classic Pepperoni"></div>
          <label for="ClassicPepperoni" id="ClassicPepperoni" price="450.00">Classic Pepperoni <b>P450.00</b></label>
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
    <button class="btn btn-warning" style="width:90px;">SAVE</button>
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

  // Trigger discount calculation via PHP
  function triggerDiscountCalculation() {
    // Do nothing if user hasn't selected any discount radio yet
    if ($('input[name="discount"]:checked').length === 0) {
      return;
    }

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
      // Clear when no valid price/quantity
      $('#discount_amount').val('');
      $('#discounted_amount').val('');
    }
  }

  // Ensure no discount radio is pre-selected on load and clear fields
  $('input[name="discount"]').prop('checked', false);
  $('#discount_amount').val('');
  $('#discounted_amount').val('');

  // Trigger calc only when user selects a discount radio
  $('input[name="discount"]').on('change', triggerDiscountCalculation);

  // Recalculate if user changes price/quantity AFTER selecting a radio
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
