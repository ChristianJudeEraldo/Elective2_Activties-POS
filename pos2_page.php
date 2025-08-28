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
      
      <div class="pic_option">
        <div><img src="perfume_images/p1.jpg" alt="Authenteque"></div>
        <label for="Authenteque" id="Authenteque">Authenteque <b>P1000.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p2.jpg" alt="Dior Sauvage"></div>
        <label for="DiorSauvage" id="DiorSauvage">Dior Sauvage <b>P2500.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p3.jpg" alt="Chuxin Blue"></div>
        <label for="ChuxinBlue" id="ChuxinBlue">Chuxin Blue <b>P1200.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p4.jpg" alt="Chuxin Dark"></div>
        <label for="ChuxinDark" id="ChuxinDark">Chuxin Dark <b>P1250.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p5.jpg" alt="Femme Pink"></div>
        <label for="FemmePink" id="FemmePink">Femme Pink <b>P1150.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p6.jpg" alt="Healing Berry"></div>
        <label for="HealingBerry" id="HealingBerry">Healing Berry <b>P1600.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p7.jpg" alt="Blossom"></div>
        <label for="Blossom" id="Blossom">Blossom <b>P2150.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p8.jpg" alt="Body Lovin "></div>
        <label for="Body Lovin" id="Body Lovin">Body Lovin  <b>P2200.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p9.jpg" alt="Splash"></div>
        <label for="Splash" id="Splash">Splash <b>P1000.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p10.jpg" alt="Scentastic"></div>
        <label for="Scentastic" id="Scentastic">Scentastic <b>P1300.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p11.jpg" alt="Reef Black"></div>
        <label for="ReefBlack" id="ReefBlack">Reef Black <b>P1450.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p12.jpg" alt="Saint Germain"></div>
        <label for="SaintGermain" id="SaintGermain">Saint Germain <b>P1700.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p13.jpg" alt="Chanel Paris"></div>
        <label for="ChanelParis" id="ChanelParis">Chanel Paris <b>P3000.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p14.jpg" alt="Coco Chanel"></div>
        <label for="CocoChanel" id="CocoChanel">Coco Chanel <b>P2800.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p15.jpg" alt="Malino"></div>
        <label for="Malino" id="Malino">Malino <b>P1500.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p16.jpg" alt="Alfeem"></div>
        <label for="Alfeem" id="Alfeem">Alfeem <b>P1300.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p17.jpg" alt="El Nabil"></div>
        <label for="ElNabil" id="ElNabil">El Nabil <b>P2400.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p18.jpg" alt="Eau Parfum"></div>
        <label for="EauParfum" id="EauParfum">Eau Parfum <b>P3000.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p19.jpg" alt="Bois Talisman"></div>
        <label for="BoisTalisman" id="BoisTalisman">Bois Talisman <b>P2800.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p20.jpg" alt="Dior Homme"></div>
        <label for="DiorHomme" id="DiorHomme">Dior Homme <b>P2500.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p21.jpg" alt="Bryedo"></div>
        <label for="Bryedo" id="Bryedo">Bryedo <b>P1800.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p22.jpg" alt="Bdk Perfume"></div>
        <label for="BdkPerfume" id="BdkPerfume">Bdk Perfume <b>P1650.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p23.jpg" alt="Bleu Men"></div>
        <label for="BleuMen" id="BleuMen">Bleu Men <b>P1200.00</b></label>
      </div>

      <div class="pic_option">
        <div><img src="perfume_images/p24.jpg" alt="Joud Perfume"></div>
        <label for="JoudPerfume" id="JoudPerfume">Joud Perfume <b>P1600.00</b></label>
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
