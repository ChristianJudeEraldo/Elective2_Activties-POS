<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point of Sale B</title>

  <!-- Bootstrap and jQuery -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/pos1_styles.css">
</head>
<body>
  <div class="container" style="margin-bottom:20px;">
    <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; font-family: Poppins">
      JUDE'S CHOICE STORE</h1>
    <h4 class="text-center" style="margin-bottom:20px; font-weight:bold; color:#333;">
      PERFUMES
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
      <!-- Example perfume products, update as needed -->
      <div class="pic_option">
          <div><img src="perfume_images/p1.jpg" alt="Perfume 1"></div>
          <label for="Perfume1" id="Perfume1" price="1200.00">Perfume 1 <b>P1,200.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p2.jpg" alt="Perfume 2"></div>
          <label for="Perfume2" id="Perfume2" price="950.00">Perfume 2 <b>P950.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p3.jpg" alt="Perfume 3"></div>
          <label for="Perfume3" id="Perfume3" price="1500.00">Perfume 3 <b>P1,500.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p4.jpg" alt="Perfume 4"></div>
          <label for="Perfume4" id="Perfume4" price="800.00">Perfume 4 <b>P800.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p5.jpg" alt="Perfume 5"></div>
          <label for="Perfume5" id="Perfume5" price="1100.00">Perfume 5 <b>P1,100.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p6.jpg" alt="Perfume 6"></div>
          <label for="Perfume6" id="Perfume6" price="1350.00">Perfume 6 <b>P1,350.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p7.jpg" alt="Perfume 7"></div>
          <label for="Perfume7" id="Perfume7" price="990.00">Perfume 7 <b>P990.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p8.jpg" alt="Perfume 8"></div>
          <label for="Perfume8" id="Perfume8" price="1050.00">Perfume 8 <b>P1,050.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p9.jpg" alt="Perfume 9"></div>
          <label for="Perfume9" id="Perfume9" price="1250.00">Perfume 9 <b>P1,250.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p10.jpg" alt="Perfume 10"></div>
          <label for="Perfume10" id="Perfume10" price="1400.00">Perfume 10 <b>P1,400.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p11.jpg" alt="Perfume 11"></div>
          <label for="Perfume11" id="Perfume11" price="1150.00">Perfume 11 <b>P1,150.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p12.jpg" alt="Perfume 12"></div>
          <label for="Perfume12" id="Perfume12" price="980.00">Perfume 12 <b>P980.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p13.jpg" alt="Perfume 13"></div>
          <label for="Perfume13" id="Perfume13" price="1320.00">Perfume 13 <b>P1,320.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p14.jpg" alt="Perfume 14"></div>
          <label for="Perfume14" id="Perfume14" price="870.00">Perfume 14 <b>P870.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p15.jpg" alt="Perfume 15"></div>
          <label for="Perfume15" id="Perfume15" price="1600.00">Perfume 15 <b>P1,600.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p16.jpg" alt="Perfume 16"></div>
          <label for="Perfume16" id="Perfume16" price="1020.00">Perfume 16 <b>P1,020.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p17.jpg" alt="Perfume 17"></div>
          <label for="Perfume17" id="Perfume17" price="1120.00">Perfume 17 <b>P1,120.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p18.jpg" alt="Perfume 18"></div>
          <label for="Perfume18" id="Perfume18" price="990.00">Perfume 18 <b>P990.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p19.jpg" alt="Perfume 19"></div>
          <label for="Perfume19" id="Perfume19" price="1080.00">Perfume 19 <b>P1,080.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p20.jpg" alt="Perfume 20"></div>
          <label for="Perfume20" id="Perfume20" price="1250.00">Perfume 20 <b>P1,250.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p21.jpg" alt="Perfume 21"></div>
          <label for="Perfume21" id="Perfume21" price="1450.00">Perfume 21 <b>P1,450.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p22.jpg" alt="Perfume 22"></div>
          <label for="Perfume22" id="Perfume22" price="900.00">Perfume 22 <b>P900.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p23.jpg" alt="Perfume 23"></div>
          <label for="Perfume23" id="Perfume23" price="1100.00">Perfume 23 <b>P1,100.00</b></label>
      </div>
      <div class="pic_option">
          <div><img src="perfume_images/p24.jpg" alt="Perfume 24"></div>
          <label for="Perfume24" id="Perfume24" price="1550.00">Perfume 24 <b>P1,550.00</b></label>
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
          <input type="radio" name="discount" id="senior" class="discount-radio" checked>
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
    </div>

    <script>
      // Handle select dropdown redirects
      $(document).ready(function () {
        $("select").click(function () {
          var open = $(this).data("isopen");
          if (open) {
            window.location.href = $(this).val();
          }
          $(this).data("isopen", !open);
        });
      });
    </script>

    <script>
      // Product label click: fill item name and price
      $(document).ready(function () {
        const labels = document.querySelectorAll('.pic_option label');
        labels.forEach(label => {
          label.addEventListener('click', () => {
            const itemName = label.childNodes[0].textContent.trim();
            const price = label.getAttribute('price');
            $('#item_name').val(itemName);
            $('#price').val('P' + price);
            $('.pic_option label').removeClass('selected');
            label.classList.add('selected');
          });
        });
      });
    </script>

    <script>
    $(document).ready(function() {
      let runningTotalQuantity = 0;
      let runningTotalDiscount = 0;
      let runningTotalDiscounted = 0;

      function getDiscountRate() {
        if ($('#senior').is(':checked')) return 0.30;
        if ($('#disc_card').is(':checked')) return 0.20;
        if ($('#employee').is(':checked')) return 0.15;
        return 0.00;
      }

      function triggerDiscountCalculation() {
        var priceStr = $('#price').val().replace(/[P,]/g, '');
        var price = parseFloat(priceStr) || 0;
        var quantity = parseInt($('#quantity').val()) || 0;
        var discount_rate = getDiscountRate();

        if (price > 0 && quantity > 0) {
          $.ajax({
            url: 'process/pos-quiz_calculate.php',
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

      $('#quantity').on('input', triggerDiscountCalculation);
      $('input[name="discount"]').on('change', triggerDiscountCalculation);
      $('#price').on('input', triggerDiscountCalculation);

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

      $('#btn_new').click(function(e) {
        e.preventDefault();
        $('#item_name').val('');
        $('#price').val('');
        $('#quantity').val('');
        $('#discount_amount').val('');
        $('#discounted_amount').val('');
        $('#cash_given').val('');
        $('#change').val('');
      });
    });
    </script>
</body>
</html>
