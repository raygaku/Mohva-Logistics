<!DOCTYPE html>
 <html>
   <meta charset="utf-8">
   <head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <link rel="stylesheet" href="css/estilos.css">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <main>
     <nav class="black">
         <div class=" container nav-wrapper black">
           <a href="index.php"><i class="material-icons left">home</i></a>
           <a href="index.php" class="brand-logo ">Mohva Logistics</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="compania.php"><i class="material-icons left">perm_identity</i>Compañia</a></li>
             <li><a href="aduanas.php"><i class="material-icons left">language</i>Aduanas</a></li>
             <li><a href="procesos.php"><i class="material-icons left">work</i>Procesos</a></li>
             <li><a href="contactoIndex.php"><i class="material-icons left">phone</i>Contacto</a></li>

           </ul>
           <ul class="side-nav" id="mobile-demo">
             <li><a href="compania.php">Compañia</a></li>
             <li><a href="aduanas.php">Aduanas</a></li>
             <li><a href="procesos.php">Procesos</a></li>
             <li><a href="contactoIndex.php">Contacto</a></li>
           </ul>
       </div>
   </nav>
    <br><br><br><br>
    <div class="container">
      <div class="row">
        <div class="col 6 m6">
          <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="source/card1.jpg">
               <span class="card-title">Importación</span>
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Dentro de México<i class="material-icons right">more_vert</i></span>

             </div>
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">¿Que necesito?<i class="material-icons right">close</i></span>
               <p>Aqui se explicará lo necesario para realizar una importación.</p>
          </div>
        </div>
        </div>

        <div class="col 6 m6">
          <div class="card">
             <div class="card-image waves-effect waves-block waves-light">
               <img class="activator" src="source/card2.jpg">
               <span class="card-title">Importación</span>
             </div>
             <div class="card-content">
             <span class="card-title activator grey-text text-darken-4">Fuera de México<i class="material-icons right">more_vert</i></span>

             </div>
           <div class="card-reveal">
             <span class="card-title grey-text text-darken-4">¿Que necesito?<i class="material-icons right">close</i></span>
               <p>Aqui se explicará lo necesario para realizar una exportación.</p>
          </div>
        </div>
        </div>

      </div>
    </div>


  </main>

   <footer class="page-footer black">
     <div class="container">
       <div class="row">
         <div class="col l6 s12">
           <h5 class="white-text">Footer Content</h5>
           <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
         </div>
         <div class="col l4 offset-l2 s12">
           <h5 class="white-text">Links</h5>
           <ul>
             <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>

           </ul>
         </div>
       </div>
     </div>
     <div class="footer-copyright grey darken-4">
       <div class="container">
       © 2014 Copyright Text
       <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
       </div>
     </div>
   </footer>






<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
  $(".button-collapse").sideNav(); //Script para barra cuando navegador cambia de tamaño
  $(document).ready(function(){
  $('.slider').slider({full_width: true, height:550, indicators: false});
  });


</script>

</html>
