<!DOCTYPE html>
<html lang="es" ng-app="app" >
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" href="img/minilogo.png" />
      <title>Login</title>
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
   </head>


   <body class="size-960">
      <!-- HEADER -->
      <header>
         <!-- CAROUSEL -->  
         <div class="line">
            <div class="up">
               <div id="owl-demo" class="owl-carousel owl-theme  margin-bottom">
                  <div class="item"><img src="img/carrusel/vino1.jpg" alt=""></div>
                  <div class="item"><img src="img/carrusel/vino3.jpg" alt=""></div>
                  <div class="item"><img src="img/carrusel/vino4.jpg" alt=""></div>
                  <div class="item"><img src="img/carrusel/vino5.jpg" alt=""></div>
                  <div class="item"><img src="img/carrusel/vino6.jpg" alt=""></div>
                  <div class="item"><img src="img/carrusel/vino7.jpg" alt=""></div>

               </div>
            </div>
         </div>

         <!-- TOP NAV -->  
         <div class="line">
            <nav class="margin-bottom">
               <p class="nav-text">Menú</p>
               <div class="top-nav s-12 l-10">
                  <ul>
                     <li>
                        <a href="index"> <samp class="icon-home3"> Inicio</samp> </a>
                     </li>
                     <li>
                        <a href="websql"><samp class="icon-pencil2"> Descubre</samp></a>
                     </li>
                     <li>
                        <a href="galeria"><samp class="icon-users"> Galeria</samp></a>
                     </li>
                     <li>
                        <a href="contacto"><samp class="icon-book"> Contacto</samp></a>
                     </li>
                     <li>
                        <a href="acerca"><samp class="icon-info"> Acerca de Vinomania</samp></a>
                     </li>
                <li>
                        <a href="#"><samp class="icon-info"> Carrito</samp></a>
                     </li>
                <li>
                        <a href="login"><samp class="icon-pencil2"> Login/Registro</samp></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>

      <div class="line">
            <div class="box margin-bottom" class="container">
               <div class="margin" id="login-form">

    <h3>Login</h3>

    <fieldset>

      <form name="form" ng-submit="vm.login()" role="form">

        <input type="email" required value="Email" onBlur="if(this.value=='')this.value='Email'" onFocus="if(this.value=='Email')this.value='' "> <!-- JS because of IE support; better: placeholder="Email" -->

        <input type="password" required value="Password" onBlur="if(this.value=='')this.value='Password'" onFocus="if(this.value=='Password')this.value='' "> <!-- JS because of IE support; better: placeholder="Password" -->

        <input type="submit" value="Login">

        <footer class="clearfix">

          <p><span class="info">?</span><a href="#">Forgot Password</a></p>

        </footer>

      </form>

    </fieldset>


    
                  </div>
               </div>
            </div>
      
      <!-- pie de página -->
      <footer class="line">
         <div class="box-pie">
            <div class="s-12-pie l-6-pie">
                <p>Vinomania: Descubre, disfruta y aprende...</p>
            </div>
            
         </div>
      </footer>
      <!--Script para los carrusel-->
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>  
      <script type="text/javascript">
         jQuery(document).ready(function($) {	  
           $("#owl-demo").owlCarousel({		
         	navigation : true,
         	slideSpeed : 300,
         	paginationSpeed : 400,
         	autoPlay : true,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	items : 4,
         	lazyLoad : true,
         	autoPlay : true,
         	navigation : true,
         	pagination : false
           });
         });	 
      </script>
   </body>
</html>