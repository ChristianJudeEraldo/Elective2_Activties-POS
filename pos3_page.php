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
      PIZZA
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
        <div><img src="pizza_images/d1.jfif" alt="Ham&Cheese"></div>
        <label for="HamCheese" id="HamCheese">Ham&Cheese <b>P800.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d2.jfif" alt="Pepperoni"></div>
        <label for="Pepperoni" id="Pepperoni">Pepperoni <b>P700.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d3.jfif" alt="Supreme"></div>
        <label for="Supreme" id="Supreme">Supreme <b>P950.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d4.jfif" alt="Margherita"></div>
        <label for="Margherita" id="Margherita">Margherita <b>P1000.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d5.jfif" alt="Deluxe"></div>
        <label for="Deluxe" id="Deluxe">Deluxe <b>P750.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d6.jfif" alt="CheesePizza"></div>
        <label for="CheesePizza" id="CheesePizza">Cheese Pizza <b>P800.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d7.jfif" alt="Spinach"></div>
        <label for="Spinach" id="Spinach">Spinach <b>P850.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d8.jfif" alt="MeatyPizza"></div>
        <label for="MeatyPizza" id="MeatyPizza">Meaty Pizza <b>P790.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d9.jfif" alt="VeggieLover"></div>
        <label for="VeggieLover" id="VeggieLover">Veggie Lover <b>P880.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d10.jfif" alt="Hawaiian"></div>
        <label for="Hawaiian" id="Hawaiian">Hawaiian <b>P770.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d11.jfif" alt="Margherita2"></div>
        <label for="Margherita2" id="Margherita2">Margherita 2 <b>P1050.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d12.jfif" alt="MeatLovers"></div>
        <label for="MeatLovers" id="MeatLovers">Meat Lovers <b>P1200.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d13.jfif" alt="ChickenPizza"></div>
        <label for="ChickenPizza" id="ChickenPizza">Chicken Pizza <b>P1300.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d14.jfif" alt="FourCheese"></div>
        <label for="FourCheese" id="FourCheese">Four Cheese <b>P900.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d15.jfif" alt="ClassicCombo"></div>
        <label for="ClassicCombo" id="ClassicCombo">Classic Combo <b>P865.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d16.jfif" alt="PizzaLover"></div>
        <label for="PizzaLover" id="PizzaLover">Pizza Lover <b>P1250.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d17.jfif" alt="SmokedPizza"></div>
        <label for="SmokedPizza" id="SmokedPizza">Smoked Pizza <b>P930.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d18.jfif" alt="WhitePizza"></div>
        <label for="WhitePizza" id="WhitePizza">White Pizza <b>P1000.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d19.jfif" alt="Artichoke"></div>
        <label for="Artichoke" id="Artichoke">Artichoke <b>P1250.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d20.jfif" alt="Mushroom"></div>
        <label for="Mushroom" id="Mushroom">Mushroom <b>P950.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d21.jpg" alt="WhitePotato"></div>
        <label for="WhitePotato" id="WhitePotato">White Potato <b>P745.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d22.jpg" alt="Jalapeno"></div>
        <label for="Jalapeno" id="Jalapeno">Jalapeño <b>P850.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d23.jpg" alt="Assorted"></div>
        <label for="Assorted" id="Assorted">Assorted <b>P1200.00</b></label>
        </div>

        <div class="pic_option">
        <div><img src="pizza_images/d24.jpg" alt="Mozzarella"></div>
        <label for="Mozzarella" id="Mozzarella">Mozzarella <b>P1100.00</b></label>
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
