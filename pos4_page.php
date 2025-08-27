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
    <div><img src="lights_images/L1.jpg" alt="CandleLights"></div>
    <label for="CandleLights" id="CandleLights">Candle Lights <b>P2000.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L2.jpg" alt="Quartelites"></div>
    <label for="Quartelites" id="Quartelites">Quartelites <b>P1600.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L3.jpg" alt="IsleLights"></div>
    <label for="IsleLights" id="IsleLights">Isle Lights <b>P1300.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L4.jpg" alt="KitchenLights"></div>
    <label for="KitchenLights" id="KitchenLights">Kitchen Lights <b>P3000.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L5.jpg" alt="LoungeLights"></div>
    <label for="LoungeLights" id="LoungeLights">Lounge Lights <b>P2200.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L6.jpg" alt="VividLight"></div>
    <label for="VividLight" id="VividLight">Vivid Light <b>P2400.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L7.jpg" alt="PrismGlow"></div>
    <label for="PrismGlow" id="PrismGlow">Prism Glow <b>P3500.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L8.jpg" alt="RadiantNest1"></div>
    <label for="RadiantNest1" id="RadiantNest1">Radiant Nest1 <b>P3200.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L9.jpg" alt="RadiantNest2"></div>
    <label for="RadiantNest2" id="RadiantNest2">Radiant Nest2 <b>P2900.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L10.jpg" alt="LumosGlow"></div>
    <label for="LumosGlow" id="LumosGlow">Lumos Glow <b>P1500.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L11.jpg" alt="VividLamp"></div>
    <label for="VividLamp" id="VividLamp">Vivid Lamp <b>P2500.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L12.jpg" alt="LumosLamp"></div>
    <label for="LumosLamp" id="LumosLamp">Lumos Lamp <b>P1800.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L13.jpg" alt="DualLight1"></div>
    <label for="DualLight1" id="DualLight1">Dual Light1 <b>P2000.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L14.jpg" alt="DualLight2"></div>
    <label for="DualLight2" id="DualLight2">Dual Light2 <b>P2200.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L15.jpg" alt="AstraLite"></div>
    <label for="AstraLite" id="AstraLite">AstraLite <b>P3400.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L16.jpg" alt="VividNest"></div>
    <label for="VividNest" id="VividNest">Vivid Nest <b>P3200.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L17.jpg" alt="Aurora"></div>
    <label for="Aurora" id="Aurora">Aurora <b>P4000.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L18.jpg" alt="Megalite"></div>
    <label for="Megalite" id="Megalite">Megalite <b>P2450.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L19.jpg" alt="Hexalite1"></div>
    <label for="Hexalite1" id="Hexalite1">Hexalite1 <b>P2800.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L20.jpg" alt="Hexalite2"></div>
    <label for="Hexalite2" id="Hexalite2">Hexalite2 <b>P2900.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L21.jpg" alt="SkyHalo"></div>
    <label for="SkyHalo" id="SkyHalo">Sky Halo <b>P1750.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L22.jpg" alt="CelestiaBeam1"></div>
    <label for="CelestiaBeam1" id="CelestiaBeam1">Celestia Beam1 <b>P4500.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L23.jpg" alt="CelestiaBeam2"></div>
    <label for="CelestiaBeam2" id="CelestiaBeam2">Celestia Beam2 <b>P4300.00</b></label>
    </div>

    <div class="pic_option">
    <div><img src="lights_images/L24.jpg" alt="SunnyGlow"></div>
    <label for="SunnyGlow" id="SunnyGlow">Sunny Glow <b>P3450.00</b></label>
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
