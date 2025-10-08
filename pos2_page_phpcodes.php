<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale 2</title>

     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- jQuery library -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <!-- Popper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <!-- Latest compiled JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script src="js/script_pos2.js"></script>

     <link rel="stylesheet" href="css/pos2_styles.css">

</head>
<body>
    <?php
        //info entry
        $item_name = "";

        //input data for computation
        $quantity   = "";
        $price      = "";
        $cash_given = "";

        $total_quantity          = 0.00;
        $total_discount_amount   = 0.00;
        $total_discounted_amount = 0.00;

        //for formula formulation
        $discount_amount   = "";
        $discounted_amount = "";
        $change            = "";

        //getting input from textbox and place it inside the variable by calling the name of the inputs
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // to press Calculate button
            //if(isset($_POST["calculate"])){
            //    $item_name=$_POST["item_name"];
            //    $quantity=$_POST["quantity"];
            //    $price=$_POST["price"];
            //    $cash_given=$_POST["cash_given"];

            //creating formula for computations
            //    $discount_amount = (($quantity * $price) * 0.25);
            //     $discounted_amount = (($quantity * $price) - $discount_amount);

            // to press CHANGE button
            if (isset($_POST["change"])) {
                $item_name  = $_POST["item_name"];
                $quantity   = $_POST["quantity"];
                $price      = $_POST["price"];
                $cash_given = $_POST["cash_given"];

                //creating formula for computations
                $discount_amount   = (($quantity * $price) * 0.25);
                $discounted_amount = (($quantity * $price) - $discount_amount);
                $total_quantity += $quantity;
                $total_discount_amount += $discount_amount;
                $total_discounted_amount += $discounted_amount;
                $change = $cash_given - $discounted_amount;

                // to press Cancel button
            } else if (isset($_POST["cancel"])) {
                echo "CANCEL";

                // to press Close button
            } else if (isset($_POST["close"])) {
                echo "CLOSE";

                // to press Enter button
            } else if (isset($_POST["enter"])) {
                echo "ENTER";

                // to press / button
            } else if (isset($_POST["division"])) {
                echo "/";

                // to press * button
            } else if (isset($_POST["multiplication"])) {
                echo "*";

                // to press - button
            } else if (isset($_POST["subtraction"])) {
                echo "-";

                // to press + button
            } else if (isset($_POST["addition"])) {
                echo "+";

                // to press 6 button
            } else if (isset($_POST["six"])) {
                echo "6";

                // to press 7 button
            } else if (isset($_POST["seven"])) {
                echo "7";

                // to press 8 button
            } else if (isset($_POST["eight"])) {
                echo "8";

                // to press 9 button
            } else if (isset($_POST["nine"])) {
                echo "9";

                // to press 2 button
            } else if (isset($_POST["two"])) {
                echo "2";

                // to press 3 button
            } else if (isset($_POST["three"])) {
                echo "3";

                // to press 4 button
            } else if (isset($_POST["four"])) {
                echo "4";

                // to press 5 button
            } else if (isset($_POST["five"])) {
                echo "5";

                // to press 0 button
            } else if (isset($_POST["zero"])) {
                echo "0";

                // to press . button
            } else if (isset($_POST["period"])) {
                echo ".";

                // to press 1 button
            } else if (isset($_POST["one"])) {
                echo "1";
            }
        }
    ?>

    <div class="container">
      <form action="pos2_page_phpcodes.php" method="POST">
          <h1 class="text-center" style="padding-bottom:10px; padding-top:30px; font-weight:bold;">Jude's Food Ordering Application</h1>
          <div class="pic_group">
            <div class="pic_option">
              <div><img src="pizza_images/d1.jfif" alt="Cinque Terre"></div>
              <label class="form-check-label" for="hawaiian_delight" id="hawaiian_delight">Hawaiian Delight</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d2.jfif"  alt="Cinque Terre"></div>
              <label for="new_york" id="new_york" >New York Style</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d3.jfif" alt="Cinque Terre"></div>
              <label for="pepperoni_special" id="pepperoni_special">Pepperoni Special</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d4.jfif" alt="Cinque Terre"></div>
              <label for="cauliflower" id="cauliflower">Cauliflower Crust</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d5.jfif" alt="Cinque Terre"></div>
              <label for="dominos_special" id="dominos_special">Dominos Special Pizza</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d6.jfif" alt="Cinque Terre"></div>
              <label for="pizza_specialA" id="pizza_specialA">Pizza Special A</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d7.jfif" alt="Cinque Terre"></div>
              <label for="pizza_specialB" id="pizza_specialB">Pizza Special B</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d8.jfif" alt="Cinque Terre"></div>
              <label for="pizza_specialC" id="pizza_specialC">Pizza Special C</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d9.jfif" alt="Cinque Terre"></div>
              <label for="pizza_specialD" id="pizza_specialD">Pizza Special D</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d10.jfif" alt="Cinque Terre"></div>
              <label for="pizza_barbeque" id="pizza_barbeque">Pizza Barbeque Supreme</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d11.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme1" id="pizza_supreme1">Pizza Supreme 1</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d13.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme2" id="pizza_supreme2">Pizza Supreme 2</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d14.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme3" id="pizza_supreme3">Pizza Supreme 3</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d15.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme4" id="pizza_supreme4">Pizza Supreme 4</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d16.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme5" id="pizza_supreme5">Pizza Supreme 5</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d17.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme6" id="pizza_supreme6">Pizza Supreme 6</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d18.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme7" id="pizza_supreme7">Pizza Supreme 7</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d19.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme8" id="pizza_supreme8">Pizza Supreme 8</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d12.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme9" id="pizza_supreme9">Pizza Supreme 9</label>
            </div>
            <div class="pic_option">
              <div><img src="pizza_images/d20.jfif" alt="Cinque Terre"></div>
              <label for="pizza_supreme10" id="pizza_supreme10">Amanos Pizza Maximum</label>
            </div>
          </div>

          <div style="width:45%; float:left;">
            <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-weight:bold; margin-left:20px;">Order Details:</h5>
              <div style="width:100%; text-align:left; padding-left:10px; margin-bottom:50px; margin-left:20px;">
                  <div class="input_box"style="margin-top:20px;" >
                    <span>Name of an Item:</span>
                    <input type="text" name="item_name" id="item_name" value="<?php echo $item_name; ?>">
                  </div>
                  <div class="input_box">
                    <span>Quantity:</span>
                    <input type="text" name="quantity" id="quantity" value="<?php echo $quantity; ?>">
                  </div>
                  <div class="input_box">
                    <span>Price:</span>
                    <input type="text" name="price" id="price" value="<?php echo $price; ?>">
                  </div>
                  <div class="input_box">
                    <span>Discount Amount:</span>
                    <input type="text" name="dicount_amount" id="discount_amount" value="<?php echo $discount_amount; ?>" disabled>
                  </div>
                  <div class="input_box">
                    <span>Discounted Amount:</span>
                    <input type="text" name="discounted_amount" id="discounted_amount" value="<?php echo $discounted_amount; ?>"disabled>
                  </div>
                  <div class="input_box">
                    <span>Total Quantity:</span>
                    <input type="text" name="total_quantity" id="total_quantity" value="<?php echo $total_quantity; ?>"disabled>
                  </div>
                  <div class="input_box">
                    <span>Total Discount Given:</span>
                    <input type="text" name="total_discount_given" id="total_discount_given" value="<?php echo $total_discount_amount; ?>"disabled>
                  </div>
                  <div class="input_box">
                    <span>Total Discounted Amount:</span>
                    <input type="text" style="margin-bottom:20px;" name="total_discounted_given" id="total_discounted_given" value="<?php echo $total_discounted_amount; ?>" disabled>
                  </div>
                  <div class="input_box">
                    <span>Cash Given:</span>
                    <input type="text" name="cash_given" id="cash_given" value="<?php echo $cash_given; ?>">
                  </div>
                  <div class="input_box" style="margin-bottom:70px;">
                    <span>Change:</span><input type="text" name="change" id="change" value="<?php echo $change; ?>" disabled>
                  </div>
              </div>
            </div>

          <h5 class="text-left" style="padding-top:10px; padding-left:10px; font-weight:bold;">Order Discount Options:</h5>
          <div style="margin-bottom:15px;">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="discount" id="senior" value="senior" checked>
              <label class="form-check-label" for="senior">Senior Citizen</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="discount" id="disc_card" value="disc_card">
              <label class="form-check-label" for="disc_card">With Disc. Card</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="discount" id="employee" value="employee">
              <label class="form-check-label" for="employee">Employee Disc.</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="discount" id="none" value="none">
              <label class="form-check-label" for="none">No Discount</label>
            </div>
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

    <script>
    $(document).ready(function(){

    const pizzaPrices = {
        "Hawaiian Delight": 350,
        "New York Style": 400,
        "Pepperoni Special": 420,
        "Cauliflower Crust": 380,
        "Dominos Special Pizza": 450,
        "Pizza Special A": 390,
        "Pizza Special B": 410,
        "Pizza Special C": 430,
        "Pizza Special D": 440,
        "Pizza Barbeque Supreme": 460,
        "Pizza Supreme 1": 470,
        "Pizza Supreme 2": 480,
        "Pizza Supreme 3": 490,
        "Pizza Supreme 4": 500,
        "Pizza Supreme 5": 510,
        "Pizza Supreme 6": 520,
        "Pizza Supreme 7": 530,
        "Pizza Supreme 8": 540,
        "Pizza Supreme 9": 550,
        "Amanos Pizza Maximum": 600
    };

    function setPizzaFields(pizzaName) {
        $("#item_name").val(pizzaName);
        $("#price").val(pizzaPrices[pizzaName] || "");
        calculateFields(false); // Don't show change yet
    }

    $(".pic_option label, .pic_option img").click(function() {
        let pizzaName = $(this).is("label") ? $(this).text() : $(this).closest(".pic_option").find("label").text();
        setPizzaFields(pizzaName);
    });

    function getDiscountRate() {
        if ($("#senior").is(":checked")) return 0.25;
        if ($("#disc_card").is(":checked")) return 0.20;
        if ($("#employee").is(":checked")) return 0.15;
        return 0.0;
    }

    // showChange: boolean, if true show change, if false leave change blank
    function calculateFields(showChange) {
        const price = parseFloat($("#price").val()) || 0;
        const quantity = parseFloat($("#quantity").val()) || 0;
        const cashGiven = parseFloat($("#cash_given").val()) || 0;
        const discountRate = getDiscountRate();

        const discountAmount = price * quantity * discountRate;
        const discountedAmount = (price * quantity) - discountAmount;
        const change = cashGiven - discountedAmount;

        $("#discount_amount").val(discountAmount.toFixed(2));
        $("#discounted_amount").val(discountedAmount.toFixed(2));
        $("#total_quantity").val(quantity);
        $("#total_discount_given").val(discountAmount.toFixed(2));
        $("#total_discounted_given").val(discountedAmount.toFixed(2));
        if (showChange) {
            $("#change").val(change >= 0 ? change.toFixed(2) : "");
        } else {
            $("#change").val("");
        }
    }

    // Only show change when button is pressed
    $("button:contains('CALCULATE CHANGE')").click(function(e){
        e.preventDefault();
        calculateFields(true);
    });

    $("button:contains('NEW')").click(function(e){
        e.preventDefault();
        $("#item_name, #price, #quantity, #discount_amount, #discounted_amount, #cash_given, #change, #total_quantity, #total_discount_given, #total_discounted_given").val("");
    });

    // When discount option changes, recalculate (without showing change)
    $("input[type=radio][name=discount]").change(function() {
        calculateFields(false);
    });

    // When price or quantity changes, recalculate (without showing change)
    $("#price, #quantity").on("input", function() {
        calculateFields(false);
    });

    // When cash_given changes, do NOT recalculate change automatically
    // Optionally, you can still update discount/amount fields if needed:
    $("#cash_given").on("input", function() {
        calculateFields(false);
    });

});
    </script>
</body>
</html>



