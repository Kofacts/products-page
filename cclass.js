    //Using the JS to add to the cart
    function addToCart()
    {
      var num=document.getElementById("num").innerHTML
        var parseit= parseInt(num);
        var addCart= parseit+1;
        document.getElementById("num").innerHTML=addCart;  
     }

     $(document).ready(function(){
      $("button.cart").click(function(){
        $(this).prop("disabled","true");
        $(this).html("<i class='glyphicon glyphicon-ok' title='Added'></i>")
      });

      
      $("#hiden1").click(function(event) {
        $("#product1").hide().fadeOut(200);
      });
     

      
      $("#hiden2").click(function(event) {
        $("#product2").hide().slideUp(400);
      });
      

      
      $("#hiden3").click(function(event) {
        $("#product3").hide().fadeOut(200);
      });
      

      
      $("#hiden4").click(function(event) {
        $("#product4").hide().fadeOut(200);
      });
      

      
      $("#hiden5").click(function(event) {
        $("#product5").hide().fadeOut(200);
      });
      

      
      $("#hiden6").click(function(event) {
        $("#product6").hide().fadeOut(200);
      
      });
     });
