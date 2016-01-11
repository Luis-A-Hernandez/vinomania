<!DOCTYPE html>
<html lang="es" manifest="manifest.appcache">
   <head>
      <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="shortcut icon" href="img/minilogo.png" />
      <title>Vinomania</title>
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script async src="js/jquery-1.8.3.min.js"></script>
      <script async src="js/jquery-ui.min.js"></script>    
      <script async src="js/modernizr.js"></script>
      <script async src="js/responsee.js"></script>
      <script async src="js/geolindex.js"></script>
      <script async src="js/carusel.js"></script>
      <script async src="owl-carousel/owl.carousel.js"></script> 
      <script async src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>
	  <style>
         #mapdiv {
            margin: 0;
            padding: 0;
            height: 400px;
         }
      </style>
   </head>
   <body class="size-960" onload="geoloc()">
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
                        <a href="index"> <samp class="icon-home"> Inicio</samp> </a>
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
         <!-- página home -->      
         <div class="line">
            <div class="margin">
               <div class="s-12 l-4 margin-bottom">
                  <div class="box">
                     <a href="descubre">
                        <h2>Descubre</h2>
      						<figure>
      						   <img id="ImagenDegustacion" src="img/vinos_tintos.jpg">
      					    </figure>
                         <p>En éste enlace podras encontrar la informacio de descubre.</p>
                     </a>
                  </div>
               </div>
               <div class="s-12 l-4 margin-bottom">
                  <div class="box">
                     <a href="galeria">
                        <h2>Galeria</h2>
                        <figure>
                           <img id="Degustacion" src="img/index.jpg">
                        </figure>
                        <p>Aquí podrás ver fotos las fotos de vinomania.</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- sección de ubicación -->
         <div class="line">
            <div class="box margin-bottom">
               <div class="margin">
                  <!-- contenido, ubicación escrito -->
                  <article class="s-12 l-8">
                     <h1>Ubicación de vinomania</h1>
                     <p>Instituto Tecnologico de Chetumal. <br> Dirección: Av. Insurgentes N° 304 . <br> 
					       <section>
                        <h4>Haz clic en el numero de abajo, llama! y con gusto te atenderemos :)</h4><br>
                        <a href="tel:9832354876"><button class="myButton">Llamar aun contacto :) </button></a></p><br><br>
                        <script type="text/javascript">
                           if( sessionStorage.hits ){
                              sessionStorage.hits = Number(sessionStorage.hits) +1;
                           }
                           else{
                              sessionStorage.hits = 1;
                           }
                           document.write("Total de Visitas :" + sessionStorage.hits );
                        </script>
                           <br>
                              <script type="text/javascript">
                              if( localStorage.hits ){
                                 localStorage.hits = Number(localStorage.hits) +1;
                              }
                              else{
                                 localStorage.hits = 1;
                              }
                              document.write("Total Exitos :" + localStorage.hits );
                           </script>
                        <p>Cierre la ventana y abrirla de nuevo y comprobar el resultado.</p>
                  	</section></p>
                  </article>
                  <!-- mapa -->
                  <div class="s-12 l-4">
                     <h3>Mapa</h3>
                     <div class="aside-nav">
                        <p id='mapdiv'> </p>
                        <button onclick="stopWatch()" class="myButton">
                           Stop
                        </button>
                     </div>
                  </div>
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