<!DOCTYPE html>
<html>
<head>
	<title>Codeclcass Code Challenge</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./assets/bs/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="cclass.css">
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="./assets/font-awesome.css">
  <script type="text/javascript" src="./assets/bs/js/bootstrap.js"></script>
  <script type="text/javascript" src="./assets/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/scrollreveal.min.js"></script>
  <script type="text/javascript" src="autoscroll.js"></script>
  <script type="text/javascript" src="./assets/jqueryui/jquery-ui.min.js"></script>
  <script type="text/javascript" src="cclass.js"></script>
  <link rel="stylesheet" type="text/css" href="./assets/jqueryui/jquery-ui.min.css">
 </head>

  <body>
<!-- Beginning of Cover and Header -->
      <div id="cover">
        <nav class="navbar nav navbar-default" id="navbar" >
          <div class="container" style="color: white;">

              <div class="navbar-header">
               <button id="menu" arial-controls="navbar" type="button" data-toggle="collapse" data-target="#navbars" aria-expanded="false" class="navbar-toggle collapsed">
              <span class="sr-only" style="color: white;">Toggle navigation</span>
              <span class="icon-bar" style="color: white;"></span>
              <span class="icon-bar" style="color: white;"></span>
              <span class="icon-bar" style="color:white;"></span>
               </button>
                <a class="navbar-brand" href="index.html" id="navtitle">CodeClass Challenge</i></a>
              </div>


                <div id="navbars" role="navigation" class="collapse navbar-collapse" style="color: white;">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" style="color: white;">Home</a>
                    </li>
                    
                    <li>
                      <a href="#" style="color: white;"><i class="glyphicon glyphicon-shopping-cart"></i> <b id="num"> 0 </b></a>
                      <!-- Use JS to increment -->
                    </li>
                </ul>
            

            </div>
            
          </div>
        </nav>

        <section class="container">
          <center><h1 id="navheading">Awesome Products Up for Grab!</h1></center>

          <center id="horzline">
              <div class="container cont">
                <div class="circle">

                </div>
              </div>

          </center>
              
          <center><button id="see"><span>See All</span> <i class="glyphicon glyphicon-chevron-down"></i> </button></center>
        </section>
      </div>

 <!-- End of Cover and Header -->     

<!-- Section for Displaying the Ads-->
  <section>
    <div class="container" id="cho">

    <section>
    <div class="row" id="row">
    <div class="col-sm-4"  id="product1">
    <article class="caption">
        <img class="caption__media" src="./images/codeit.jpg"  />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title">Alaska <span  id="hiden1"><i  class="glyphicon glyphicon-remove-sign pull-right" id="gly-remove"></i></span></h2>
            <p class="caption__overlay__content" >
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.<br>

                  <center><button onclick="addToCart()" class="cart" id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>

            </p>
        </div>
        
    </article>
    
    </div>

    <div class="col-sm-4" id="product2">
    <article class="caption">
        <img class="caption__media" src="./images/1.jpg" />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title" >Alaska <span id="hiden2"><i  class="glyphicon glyphicon-remove-sign pull-right" id="gly-remove" ></i></span></h2>
            <p class="caption__overlay__content">
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.

                <center><button onclick="addToCart()" class="cart" id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>
            </p>
        </div>
        
    </article>
    
    </div>

    <div class="col-sm-4" id="product3">
    <article class="caption">
        <img class="caption__media" src="./images/3.jpg" />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title" >Alaska <span style="cursor: pointer;" id="hiden3" ><i  class="glyphicon glyphicon-remove-sign pull-right" id="gly-remove"></i></span></h2>
            <p class="caption__overlay__content">
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.

                <center><button onclick="addToCart()" class="cart" id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>
            </p>
        </div>
        
    </article>
    
    </div>
    </div>
    </section>

    <div class="row" id="row2">
    <div class="col-sm-4" id="product4">
    <article class="caption">
        <img class="caption__media" src="./demo/images/4.jpg" />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title" >Alaska <span style="cursor: pointer;" id="hiden4"><i id="gly-remove" class="glyphicon glyphicon-remove-sign pull-right"></i></span></h2>
            <p class="caption__overlay__content">
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.<br>

                  <center><button onclick="addToCart()" class="cart" id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>

            </p>
        </div>
        
    </article>
    
    </div>

    <div class="col-sm-4" id="product5">
    <article class="caption">
        <img class="caption__media" src="./demo/images/5.jpg" />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title" >Alaska <span style="cursor: pointer; " id="hiden5"><i id="gly-remove"  class="glyphicon glyphicon-remove-sign pull-right""></i></span></h2>
            <p class="caption__overlay__content">
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.

                <center><button onclick="addToCart()" class="cart" id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>
            </p>
        </div>
        
    </article>
    
    </div>

    <div class="col-sm-4" id="product6">
    <article class="caption">
        <img class="caption__media" src="./demo/images/6.jpg" />
        <div class="caption__overlay">
            <h2 class="caption__overlay__title" >Alaska <span style="cursor: pointer;" id="hiden6"><i id="gly-remove"  class="glyphicon glyphicon-remove-sign pull-right" ></i></span></h2>
            <p class="caption__overlay__content" >
                Alaska is a U.S. state situated in the northwest extremity of the North American continent. Bordering the state is Canada to the east, the Arctic Ocean to the north, and the Pacific Ocean to the west and south, with Russia (specifically, Siberia) further west across the Bering Strait.

                <center><button onclick="addToCart()" class="cart"  id="cart" title="Add to Cart"><i class="glyphicon glyphicon-heart"></i></button></center>
            </p>
        </div>
        
    </article>
    
    </div>
    </div>
    </section>

    

</div>

</div>



</section>
      


<section  id="footer">
<footer>
  <div class="container" id="footer_container">

    
      <span style="font-size: 10px;">Built with <i class="glyphicon glyphicon-heart" id="donewith"></i> by Rapheal </span>
      

    
  </div>
  </footer>
</section>
          
       </body>
       </html>

