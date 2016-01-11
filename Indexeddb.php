<!DOCTYPE html>
<html lang="es" manifest="manifest.appcache">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="shortcut icon" href="img/minilogo.png" />
      <title>IndexedDB</title>
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="css/indexdb.css">
      <script type="text/javascript" src="js/indexdb.js"></script>
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/carusel.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script> 
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
         <!-- Menu nav -->  
         <div class="line">
            <nav class="margin-bottom">
               <p class="nav-text">Menú</p>
               <div class="top-nav s-12 l-10">
                   <ul>
                     <li>
                        <a href="index"> <samp class="icon-home3"> Inicio</samp> </a>
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
                        <a href="Indexeddb"><samp class="icon-info"> IndexedDB</samp></a>
                     </li>
                     <li>
                        <a href="websql"><samp class="icon-pencil2"> WebSql</samp></a>
                     </li>
                     <li>
                        <a href="pouchdb"><samp class="icon-pencil2"> PouchDB</samp></a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </header>
      <section>
      <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                     <header>
            <h1>IndexedDB (<span>No</span>)</h1>
        </header>
        <article>
            <label for="whish">Itroduzca un vino:</label>
            <input type="text" id="wish" />
            <button id="btnSave">Guardar</button>
            <div id="result">
                <h2>Mis Vinos:</h2>
                <ul id="list"></ul>
            </div>
        </article>   
                  </div>
               </div>
            </div>    
      </section>
      <!-- pie de página -->
      <footer class="line">
         <div class="box-pie">
            <div class="s-12-pie l-6-pie">
               <p>Vinomania: Descubre, disfruta y aprende...</p>
            </div>
         </div>
      </footer>
   </body>
</html>