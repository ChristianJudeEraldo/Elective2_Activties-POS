$(document).ready(function() {

    // Helper function to update the form fields
    function item_price(item_name, price) {
        document.getElementById('item_name').value = item_name;
        document.getElementById('price').value = price;
    }

    // 1. Margherita
    $('#Margherita').click(function(e){
        e.preventDefault();
        item_price('Margherita', '350.00');
    });

    // 2. Pepperoni
    $('#Pepperoni').click(function(e){
        e.preventDefault();
        item_price('Pepperoni', '450.00');
    });

    // 3. Hawaiian
    $('#Hawaiian').click(function(e){
        e.preventDefault();
        item_price('Hawaiian', '400.00');
    });

    // 4. BBQ Chicken
    $('#BBQChicken').click(function(e){
        e.preventDefault();
        item_price('BBQ Chicken', '500.00');
    });

    // 5. Veggie
    $('#Veggie').click(function(e){
        e.preventDefault();
        item_price('Veggie', '350.00');
    });

    // 6. Four Cheese
    $('#FourCheese').click(function(e){
        e.preventDefault();
        item_price('Four Cheese', '480.00');
    });

    // 7. Meat Lovers
    $('#MeatLovers').click(function(e){
        e.preventDefault();
        item_price('Meat Lovers', '550.00');
    });

    // 8. Supreme
    $('#Supreme').click(function(e){
        e.preventDefault();
        item_price('Supreme', '600.00');
    });

    // 9. Marinara
    $('#Marinara').click(function(e){
        e.preventDefault();
        item_price('Marinara', '300.00');
    });

    // 10. Chicken Bacon Ranch
    $('#ChickenBaconRanch').click(function(e){
        e.preventDefault();
        item_price('Chicken Bacon Ranch', '520.00');
    });

    // 11. Seafood
    $('#Seafood').click(function(e){
        e.preventDefault();
        item_price('Seafood', '600.00');
    });

    // 12. Buffalo Chicken
    $('#BuffaloChicken').click(function(e){
        e.preventDefault();
        item_price('Buffalo Chicken', '500.00');
    });

    // 13. Mushroom
    $('#Mushroom').click(function(e){
        e.preventDefault();
        item_price('Mushroom', '400.00');
    });

    // 14. Taco
    $('#Taco').click(function(e){
        e.preventDefault();
        item_price('Taco', '450.00');
    });

    // 15. Spinach
    $('#Spinach').click(function(e){
        e.preventDefault();
        item_price('Spinach', '350.00');
    });

    // 16. Italian Sausage
    $('#ItalianSausage').click(function(e){
        e.preventDefault();
        item_price('Italian Sausage', '500.00');
    });

    // 17. Pepperoni & Mushroom
    $('#PepperoniMushroom').click(function(e){
        e.preventDefault();
        item_price('Pepperoni & Mushroom', '550.00');
    });

    // 18. Cheese Lovers
    $('#CheeseLovers').click(function(e){
        e.preventDefault();
        item_price('Cheese Lovers', '500.00');
    });

    // 19. Hawaiian Deluxe
    $('#HawaiianDeluxe').click(function(e){
        e.preventDefault();
        item_price('Hawaiian Deluxe', '520.00');
    });

    // 20. Veggie Supreme
    $('#VeggieSupreme').click(function(e){
        e.preventDefault();
        item_price('Veggie Supreme', '480.00');
    });

    // 21. Buffalo Supreme
    $('#BuffaloSupreme').click(function(e){
        e.preventDefault();
        item_price('Buffalo Supreme', '550.00');
    });

    // 22. Double Cheese
    $('#DoubleCheese').click(function(e){
        e.preventDefault();
        item_price('Double Cheese', '500.00');
    });

    // 23. BBQ Supreme
    $('#BBQSupreme').click(function(e){
        e.preventDefault();
        item_price('BBQ Supreme', '600.00');
    });

    // 24. Classic Pepperoni
    $('#ClassicPepperoni').click(function(e){
        e.preventDefault();
        item_price('Classic Pepperoni', '450.00');
    });

});