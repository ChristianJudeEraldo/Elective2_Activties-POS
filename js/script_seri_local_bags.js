$(document).ready(function() {

    // Helper function to update the form fields
    function item_price(item_name, price) {
        document.getElementById('item_name').value = item_name;
        document.getElementById('price').value = price;
    }

    // 1. Island Bag1
    $('#IslandBag1').click(function(e){
        e.preventDefault();
        item_price('Island Bag1', '750.00');
    });

    // 2. Island Bag2
    $('#IslandBag2').click(function(e){
        e.preventDefault();
        item_price('Island Bag2', '700.00');
    });

    // 3. Banwa Bag
    $('#BanwaBag').click(function(e){
        e.preventDefault();
        item_price('Banwa Bag', '650.00');
    });

    // 4. Abaca Bag
    $('#AbacaBag').click(function(e){
        e.preventDefault();
        item_price('Abaca Bag', '800.00');
    });

    // 5. Pinoy Bag
    $('#PinoyBag').click(function(e){
        e.preventDefault();
        item_price('Pinoy Bag', '790.00');
    });

    // 6. Pinoy Sling
    $('#PinoySling').click(function(e){
        e.preventDefault();
        item_price('Pinoy Sling', '650.00');
    });

    // 7. Maharlika
    $('#Maharlika').click(function(e){
        e.preventDefault();
        item_price('Maharlika', '900.00');
    });

    // 8. Pamana Bag
    $('#PamanaBag').click(function(e){
        e.preventDefault();
        item_price('Pamana Bag', '1,000.00');
    });

    // 9. Mini Bag
    $('#MiniBag').click(function(e){
        e.preventDefault();
        item_price('Mini Bag', '600.00');
    });

    // 10. Likha Bag
    $('#LikhaBag').click(function(e){
        e.preventDefault();
        item_price('Likha Bag', '1,000.00');
    });

    // 11. Phil Sports
    $('#PhilSports').click(function(e){
        e.preventDefault();
        item_price('Phil Sports', '1,200.00');
    });

    // 12. Pinta Bag
    $('#PintaBag').click(function(e){
        e.preventDefault();
        item_price('Pinta Bag', '1,100.00');
    });

    // 13. Alon Bag
    $('#AlonBag').click(function(e){
        e.preventDefault();
        item_price('Alon Bag', '860.00');
    });

    // 14. Lakambini
    $('#Lakambini').click(function(e){
        e.preventDefault();
        item_price('Lakambini', '1,500.00');
    });

    // 15. Sinag Bag
    $('#SinagBag').click(function(e){
        e.preventDefault();
        item_price('Sinag Bag', '1,300.00');
    });

    // 16. Pinoy Basket1
    $('#PinoyBasket1').click(function(e){
        e.preventDefault();
        item_price('Pinoy Basket1', '1,250.00');
    });

    // 17. Pinoy Basket2
    $('#PinoyBasket2').click(function(e){
        e.preventDefault();
        item_price('Pinoy Basket2', '1,350.00');
    });

    // 18. Pinoy Tote
    $('#PinoyTote').click(function(e){
        e.preventDefault();
        item_price('Pinoy Tote', '760.00');
    });

    // 19. Dalisay Tote
    $('#DalisayTote').click(function(e){
        e.preventDefault();
        item_price('Dalisay Tote', '550.00');
    });

    // 20. Dayaw Bag
    $('#DayawBag').click(function(e){
        e.preventDefault();
        item_price('Dayaw Bag', '895.00');
    });

    // 21. Sari Sari
    $('#SariSari').click(function(e){
        e.preventDefault();
        item_price('Sari Sari', '575.00');
    });

    // 22. Anluwage
    $('#Anluwage').click(function(e){
        e.preventDefault();
        item_price('Anluwage', '620.00');
    });

    // 23. Yaman Bag
    $('#YamanBag').click(function(e){
        e.preventDefault();
        item_price('Yaman Bag', '1,000.00');
    });

    // 24. Kalayaan Bag
    $('#KalayaanBag').click(function(e){
        e.preventDefault();
        item_price('Kalayaan Bag', '1,600.00');
    });

});