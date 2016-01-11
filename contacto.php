<!DOCTYPE html>
<html lang="es" manifest="manifest.appcache">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="shortcut icon" href="img/minilogo.png" />
      <title>Acerca</title>
      <link rel="stylesheet" href="fonts/icomoon/style.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/geocontacto.js"></script>
      <script type="text/javascript" src="js/camara.js"></script>
      <script type="text/javascript" src="js/carusel.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>  
   </head>
   <body class="size-960" onload="iniciar()">
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
                   <form action="#">
                       <header>
                         <h1>Dudas y Comentarios</h1>
                       </header>
                        <div class="form-group">
                           <label class="form-label">Nombres</label>
                           <input type="text" class="form-field" placeholder="Nombres" required autofocus>
                        </div>
                        <div class="form-group">
                           <label class="form-label">Apellido Paterno</label>
                           <input type="text" class="form-field" placeholder="Apellido Paterno" required autofocus>
                        </div>
                        <div class="form-group">
                           <label class="form-label">Apellido Materno</label>
                           <input type="text" class="form-field" placeholder="Apellido Materno" required autofocus>
                        </div>
                        <div class="form-group">
                           <label class="form-label">Correo Electrónico</label>
                           <input type="email" class="form-field" placeholder="email" required autofocus>
                        </div>
                        <div>
                           <label class="form-label">Tu mensaje:</label>
                           <textarea name="Field4" spellcheck="true" rows="10" cols="50" tabindex="4" placeholder="Tu mensaje" ></textarea>
                          </div>
                        <div class="form-label">
                           <button type="sumbit" class="btn btn-danger">Guardar</button>
                        </div>
                     </form>
                     <div>
                        <a href="http://www.facebook.com"> <samp class="icon-facebook2"> Facebook</samp> </a>
                        <a href="http://www.twitter.com"> <samp class="icon-twitter2"> Twitter</samp> </a>
                        <a href="http://www.instagram.com"> <samp class="icon-instagram"> Instagram</samp> </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- página home -->      
         <div class="line">
            <div class="margin">
               <div class="s-12 l-4 margin-bottom">
                  <div class="box">
                    <h1>  <p>Video</p></h1>
                      <video id="video" autoplay></video>
<canvas id="canvas" width="30" height="4"></canvas>
                  </div>
               </div>
               <div class="s-12 l-4 margin-bottom">
                  <div class="box">
                      <h1>Ubicación de vinomania</h1>
                     <h4><p>Instituto Tecnologico de Chetumal. <br> Dirección: Av. Insurgentes N° 304, <br> Colonia: David Gustavo Gtz, , <br> Codigo Postal: 77013 Chetumal, Q.R., México.</h4>
                <section>
                   <br> 
               <h2>Llamar a vinomania</h2><br> 
               <a href="tel:9832354876"><button class="myButton">Llamar aun contacto</button></a></p>
               </section></p><br> 
                      <h2>Geolocalizacion</h2>
                     <div class="aside-nav">
      <div id="informacion">
      <h3>Tu posición actual es:</h3>
      <h4>Latitud: <span id="latitude"></span></h4>
      <h4>Longitud: <span id="longitude"></span></h4>
   </div>
   <div id="mapa"></div>
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