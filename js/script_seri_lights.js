$(document).ready(function() {

    // Helper function to update the form fields
    function item_price(item_name, price) {
        document.getElementById('item_name').value = item_name;
        document.getElementById('price').value = price;
    }

    // 1. Candle Lights
    $('#CandleLights').click(function(e){
        e.preventDefault();
        item_price('Candle Lights', '2,000.00');
    });

    // 2. Quartelites
    $('#Quartelites').click(function(e){
        e.preventDefault();
        item_price('Quartelites', '1,600.00');
    });

    // 3. Isle Lights
    $('#IsleLights').click(function(e){
        e.preventDefault();
        item_price('Isle Lights', '1,300.00');
    });

    // 4. Kitchen Lights
    $('#KitchenLights').click(function(e){
        e.preventDefault();
        item_price('Kitchen Lights', '3,000.00');
    });

    // 5. Lounge Lights
    $('#LoungeLights').click(function(e){
        e.preventDefault();
        item_price('Lounge Lights', '2,200.00');
    });

    // 6. Vivid Light
    $('#VividLight').click(function(e){
        e.preventDefault();
        item_price('Vivid Light', '2,400.00');
    });

    // 7. Prism Glow
    $('#PrismGlow').click(function(e){
        e.preventDefault();
        item_price('Prism Glow', '3,500.00');
    });

    // 8. Radiant Nest1
    $('#RadiantNest1').click(function(e){
        e.preventDefault();
        item_price('Radiant Nest1', '3,200.00');
    });

    // 9. Radiant Nest2
    $('#RadiantNest2').click(function(e){
        e.preventDefault();
        item_price('Radiant Nest2', '2,900.00');
    });

    // 10. Lumos Glow
    $('#LumosGlow').click(function(e){
        e.preventDefault();
        item_price('Lumos Glow', '1,500.00');
    });

    // 11. Vivid Lamp
    $('#VividLamp').click(function(e){
        e.preventDefault();
        item_price('Vivid Lamp', '2,500.00');
    });

    // 12. Lumos Lamp
    $('#LumosLamp').click(function(e){
        e.preventDefault();
        item_price('Lumos Lamp', '1,800.00');
    });

    // 13. Dual Light1
    $('#DualLight1').click(function(e){
        e.preventDefault();
        item_price('Dual Light1', '2,000.00');
    });

    // 14. Dual Light2
    $('#DualLight2').click(function(e){
        e.preventDefault();
        item_price('Dual Light2', '2,200.00');
    });

    // 15. AstraLite
    $('#AstraLite').click(function(e){
        e.preventDefault();
        item_price('AstraLite', '3,400.00');
    });

    // 16. Vivid Nest
    $('#VividNest').click(function(e){
        e.preventDefault();
        item_price('Vivid Nest', '3,200.00');
    });

    // 17. Aurora
    $('#Aurora').click(function(e){
        e.preventDefault();
        item_price('Aurora', '4,000.00');
    });

    // 18. Megalite
    $('#Megalite').click(function(e){
        e.preventDefault();
        item_price('Megalite', '2,450.00');
    });

    // 19. Hexalite1
    $('#Hexalite1').click(function(e){
        e.preventDefault();
        item_price('Hexalite1', '2,800.00');
    });

    // 20. Hexalite2
    $('#Hexalite2').click(function(e){
        e.preventDefault();
        item_price('Hexalite2', '2,900.00');
    });

    // 21. Sky Halo
    $('#SkyHalo').click(function(e){
        e.preventDefault();
        item_price('Sky Halo', '1,750.00');
    });

    // 22. Celestia Beam1
    $('#CelestiaBeam1').click(function(e){
        e.preventDefault();
        item_price('Celestia Beam1', '4,500.00');
    });

    // 23. Celestia Beam2
    $('#CelestiaBeam2').click(function(e){
        e.preventDefault();
        item_price('Celestia Beam2', '4,300.00');
    });

    // 24. Sunny Glow
    $('#SunnyGlow').click(function(e){
        e.preventDefault();
        item_price('Sunny Glow', '3,450.00');
    });

});