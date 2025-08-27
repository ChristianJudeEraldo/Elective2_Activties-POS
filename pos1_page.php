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
      KITCHEN UTENSILS
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
        <div><img src="kitchen_images/k1.jpg" alt="Kitchen Set"></div>
        <label for="KitchenSet" id="KitchenSet">Kitchen Set <b>P4,500.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k2.jpg" alt="Plate"></div>
        <label for="Plate" id="Plate">Plate <b>P200.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k3.jpg" alt="Plate Set"></div>
        <label for="PlateSet" id="PlateSet">Plate Set <b>P800.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k4.jpg" alt="Wine Glass"></div>
        <label for="WineGlass" id="WineGlass">Wine Glass <b>P450.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k5.jpg" alt="Glass"></div>
        <label for="Glass" id="Glass">Glass <b>P200.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k6.jpg" alt="Spoon & Fork"></div>
        <label for="SpoonFork" id="SpoonFork">Spoon & Fork <b>P300.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k7.jpg" alt="Utensil Set"></div>
        <label for="UtensilSet" id="UtensilSet">Utensil Set <b>P600.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k8.jpg" alt="Spatula1"></div>
        <label for="Spatula1" id="Spatula1">Spatula1 <b>P300.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k9.jpg" alt="Spatula2"></div>
        <label for="Spatula2" id="Spatula2">Spatula2 <b>P350.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k10..jpg" alt="Casserole1"></div>
        <label for="Casserole1" id="Casserole1">Casserole1 <b>P500.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k11.jfif" alt="Casserole2"></div>
        <label for="Casserole2" id="Casserole2">Casserole2 <b>P550.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k12.jpg" alt="Knife1"></div>
        <label for="Knife1" id="Knife1">Knife1 <b>P300.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k13.jpg" alt="Whisk"></div>
        <label for="Whisk" id="Whisk">Whisk <b>P250.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k14.jpg" alt="Blender"></div>
        <label for="Blender" id="Blender">Blender <b>P1,500.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k15.jpg" alt="Cutting Board"></div>
        <label for="CuttingBoard" id="CuttingBoard">Cutting Board <b>P150.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k16.jpg" alt="Tongs"></div>
        <label for="Tongs" id="Tongs">Tongs <b>P150.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k17.jpg" alt="Can Opener"></div>
        <label for="CanOpener" id="CanOpener">Can Opener <b>P250.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k18.jpg" alt="Rice Cooker"></div>
        <label for="RiceCooker" id="RiceCooker">Rice Cooker <b>P3,000.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k19.jpg" alt="Cooking Pan"></div>
        <label for="CookingPan" id="CookingPan">Cooking Pan <b>P500.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k20.jpg" alt="Aluminum Tray"></div>
        <label for="AluminumTray" id="AluminumTray">Aluminum Tray <b>P400.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k21.jpg" alt="Knife Set"></div>
        <label for="KnifeSet" id="KnifeSet">Knife Set <b>P1,000.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k22.jpg" alt="Spork Set"></div>
        <label for="SporkSet" id="SporkSet">Spork Set <b>P600.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k23.jpg" alt="Cooking Pan2"></div>
        <label for="CookingPan2" id="CookingPan2">Cooking Pan2 <b>P450.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="kitchen_images/k24.jpg" alt="Cooking Pan3"></div>
        <label for="CookingPan3" id="CookingPan3">Cooking Pan3 <b>P500.00</b></label>
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
