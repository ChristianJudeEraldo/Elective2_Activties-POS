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
    <h1 class="text-center" style="padding-top:10px; padding-bottom:10px; font-weight:bold; font-family: Algerian">
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
      <div><img src="local_bags/b1.jpg" alt="IslandBag1"></div>
      <label for="IslandBag1" id="IslandBag1">Island Bag1 <b>P750.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b2.jpg" alt="IslandBag2"></div>
      <label for="IslandBag2" id="IslandBag2">Island Bag2 <b>P700.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b3.jpg" alt="BanwaBag"></div>
      <label for="BanwaBag" id="BanwaBag">Banwa Bag <b>P650.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b4.jpg" alt="AbacaBag"></div>
      <label for="AbacaBag" id="AbacaBag">Abaca Bag <b>P800.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b5.jpg" alt="PinoyBag"></div>
      <label for="PinoyBag" id="PinoyBag">Pinoy Bag <b>P790.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b6.jpg" alt="PinoySling"></div>
      <label for="PinoySling" id="PinoySling">Pinoy Sling <b>P650.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b7.jpg" alt="Maharlika"></div>
      <label for="Maharlika" id="Maharlika">Maharlika <b>P900.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b8.jpg" alt="PamanaBag"></div>
      <label for="PamanaBag" id="PamanaBag">Pamana Bag <b>P1000.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b9.jpg" alt="MiniBag"></div>
      <label for="MiniBag" id="MiniBag">Mini Bag <b>P600.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b10.jpg" alt="LikhaBag"></div>
      <label for="LikhaBag" id="LikhaBag">Likha Bag <b>P1000.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b11.jpg" alt="PhilSports"></div>
      <label for="PhilSports" id="PhilSports">Phil Sports <b>P1200.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b12.jpg" alt="PintaBag"></div>
      <label for="PintaBag" id="PintaBag">Pinta Bag <b>P1100.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b13.jpg" alt="AlonBag"></div>
      <label for="AlonBag" id="AlonBag">Alon Bag <b>P860.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b14.jpg" alt="Lakambini"></div>
      <label for="Lakambini" id="Lakambini">Lakambini <b>P1500.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b15.jpg" alt="SinagBag"></div>
      <label for="SinagBag" id="SinagBag">Sinag Bag <b>P1300.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b16.jpg" alt="PinoyBasket1"></div>
      <label for="PinoyBasket1" id="PinoyBasket1">Pinoy Basket1 <b>P1250.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b17.jpg" alt="PinoyBasket2"></div>
      <label for="PinoyBasket2" id="PinoyBasket2">Pinoy Basket2 <b>P1350.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b18.jpg" alt="PinoyTote"></div>
      <label for="PinoyTote" id="PinoyTote">Pinoy Tote <b>P760.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b19.jpg" alt="DalisayTote"></div>
      <label for="DalisayTote" id="DalisayTote">Dalisay Tote <b>P550.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b20.jpg" alt="DayawBag"></div>
      <label for="DayawBag" id="DayawBag">Dayaw Bag <b>P895.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b21.jpg" alt="SariSari"></div>
      <label for="SariSari" id="SariSari">Sari Sari <b>P575.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b22.jpg" alt="Anluwage"></div>
      <label for="Anluwage" id="Anluwage">Anluwage <b>P620.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b23.jpg" alt="YamanBag"></div>
      <label for="YamanBag" id="YamanBag">Yaman Bag <b>P1000.00</b></label>
    </div>

    <div class="pic_option">
      <div><img src="local_bags/b24.jpg" alt="KalayaanBag"></div>
      <label for="KalayaanBag" id="KalayaanBag">Kalayaan Bag <b>P1600.00</b></label>
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
    <input type="radio" name="discount" id="senior" checked>
    <label for="senior">Senior Citizen</label>
    <input type="radio" name="discount" id="disc_card">
    <label for="disc_card">With Disc. Card</label>
    <input type="radio" name="discount" id="employee">
    <label for="employee">Employee Disc.</label>
    <input type="radio" name="discount" id="none">
    <label for="none">No Discount</label>
  </div>

  <!-- Top Buttons -->
  <div style="display:flex; gap:10px; margin-bottom:10px;">
    <button class="btn btn-primary" style="width:190px;">CALCULATE CHANGE</button>
    <button class="btn btn-danger" style="width:90px;">NEW</button>
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
    <button class="btn btn-dark">6</button>
    <button class="btn btn-dark">7</button>
    <button class="btn btn-dark">8</button>
    <button class="btn btn-dark">9</button>
    <button class="btn btn-dark">2</button>
    <button class="btn btn-dark">3</button>
    <button class="btn btn-dark">4</button>
    <button class="btn btn-dark">5</button>
    <button class="btn btn-dark">0</button>
    <button class="btn btn-dark">-</button>
    <button class="btn btn-dark">1</button>
  </div>
</div>


  <script>
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();});
  </script>

  <script>
    $("select").click(function() {
    var open = $(this).data("isopen");if(open) {
    window.location.href = $(this).val() 
    }

    //set isopen to opposite so next time when use clicked select box
    //it wont trigger this event
    $(this).data("isopen", !open);
    });
 </script>
</body>
</html>
