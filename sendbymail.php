<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "jahaziel@ariasbd.16mb.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['comments'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Comentarios: " . $_POST['comments'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Banquetes y Decoración::Jáltipan, Veracruz | Arias</title>
    <meta name="description" content="Verás lo mejor en Banquetes, Decoración de eventos y fiestas, Cristaleria, Servicio de Meseros y Renta de manteleria. Jaltipan de Morelos Veracruz">
    <meta author="Jahaziel Ortiz Barrios">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  </head>
  <body>
    <header id="header">
      <nav class="navbar"><a href="/" class="brand">
          <figure><img src="img/Logo-verde.png" alt="" height="70px"></figure>
          <h1 class="title-brand">Arias<span class="title-brand--bd icon-home">Banquetes & Decoración</span></h1></a>
        <div href="" class="toggle"><i class="fa fa-bars"></i></div>
        <div class="right"><a href="/#servicios" class="link">Servicios</a></div>
        <div class="right"><a href="/#portafolio" class="link">Portafolio</a></div>
        <div class="right"><a href="paquetes.html" class="link">Paquetes</a></div>
        <div class="right"><a href="faq.html" title="Preguntas frecuentes" class="link">PF ¿?</a></div>
        <div class="right"><a href="acercade.html" title="Acerca de nosotros" class="link">Acerca de</a></div>
        <div class="right"><a href="contacto.html" class="link">Contacto</a></div>
      </nav>
    </header>
    <section class="carrusel">
      <div class="owl-carousel">
        <div></div>
      </div>
    </section>
    <h2 class="title">Caracteristicas</h2>
    <section class="back-color-grey">
      <article id="caracteristicas" class="container-lp">
        <h3 class="subtitle">Nuestros clientes nos definen por nuestra:</h3>
        <div class="content">
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-experiencia"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Experiencia</h2>
              <p Class="flex-a--p">Tenemos 28 años de experiencia que nos respaldan e incontables clientes satisfechos.</p>
            </div>
          </div>
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-puntualidad"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Puntualidad</h2>
              <p Class="flex-a--p"> Siempre puntuales. Todo lo que se programa se cumple, ustedes es el que manda.</p>
            </div>
          </div>
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-innova"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Innovación</h2>
              <p Class="flex-a--p"> Siempre haciendo nuevas cosas, para que tengas muchas opciones para escojer lo que mejor vaya con tu estilo y tipo de evento.</p>
            </div>
          </div>
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-eficiencia"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Eficiencia</h2>
              <p Class="flex-a--p"> Trabajamos siempre con orden para que las cosas se hagan bien y de manera mas agíl</p>
            </div>
          </div>
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-experiencia-dos"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Limpieza</h2>
              <p Class="flex-a--p">Nuestros artículos y nuestros servicios son cuidadosamente revisados manteniendo una higiene adecuada para ti.</p>
            </div>
          </div>
          <div class="content-box">
            <div class="flex">
              <div class="circulo">
                <div class="circulo-a"><i class="icon-seriedad"></i></div>
              </div>
            </div>
            <div class="flex-a">
              <h2 class="flex-a--title">Seriedad</h2>
              <p Class="flex-a--p">Cada evento es un reto pero le ponemos la seriedad que nuestro trabajo implica.</p>
            </div>
          </div>
        </div>
      </article>
    </section>
    <article class="container--portafolio">
      <div class="portafolio">
   
        <h3 id="portafolio" class="portafolio-title">Portafolio</h3>
        <h4 class="portafolio-sub">Puedes ver en que eventos hemos estado presentes ultimamente</h4>
        <nav class="product-view"><i class="fa fa-th btn-gallery active"></i><i class="fa fa-list btn-list"></i></nav>
        <div class="portafolio-content">
          <section class="products gallery">
            <figure><img src="https://unsplash.it/700/700?random=01" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=02" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=03" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=04" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=05" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=06" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=07" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=08" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=09" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
            <figure><img src="https://unsplash.it/700/700?random=10" alt="">
              <figcaption> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio quis provident saepe est, eius quibusdam qui commodi. Molestias molestiae dicta dolorum, fugit reprehenderit dolores id! Ea, earum, quibusdam. Quos, recusandae!</figcaption>
            </figure>
          </section>
        </div>
       
      </div>
    </article>
    <h2 class="title">Servicios</h2>
    <section class="pru">
      <article id="container--servicios" class="container--servicios">
        <p class="subtitle">Estos son los servicios que ofrecemos, todos ellos los mas completos, con diferentes productos en Decoración y Banqueteria
          <div id="servicios" class="servicios">
            <div class="box"><span class="icon-cont"><i class="icon-mobiliario"></i></span>
              <h3>Mobiliario</h3>
              <ul class="hidden">
                <li>Mesas</li>
                <li>Sillas</li>
                <li>Sillas infantiles</li>
                <li>Lonas</li>
                <li>...</li><a href="mobiliario.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
            <div class="box"><span class="icon-cont"><i class="icon-manteleria-dos"> </i></span>
              <h3>Mantelería</h3>
              <ul class="hidden">
                <li>manteles</li>
                <li>cubres</li>
                <li>chemise's</li>
                <li>moños</li>
                <li>servilletas</li><a href="manteleria.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
            <div class="box"><span class="icon-cont"><i class="small-icon icon-cristaleria"></i><i class="small-icon icon-plaque"></i></span>
              <h3>Cristaleria y Loza</h3>
              <ul class="hidden">
                <li>platos</li>
                <li>platos base</li>
                <li>vasos</li>
                <li>copas</li>
                <li>plaqué</li><a href="cristaleria.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
            <div class="box"><span class="icon-cont"><i class="mini-icon icon-decoracion"></i><i class="mini-icon icon-decoracion-add"></i><i class="mini-icon icon-decoracion-flower"></i></span>
              <h3>Decoración</h3>
              <ul class="hidden">
                <li>Jardineras</li>
                <li>Entradas</li>
                <li>Mesa de honor</li>
                <li>Techo</li>
                <li>Arreglo de iglesis</li><a href="decoracion.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
            <div class="box"><span class="icon-cont"><i class="icon-banquetes"></i></span>
              <h3>Banquetes</h3>
              <ul class="hidden">
                <li>Entremes ó Crenas</li>
                <li>Plato fuerte: pollo</li>
                <li>Plato fuerte: cerdo</li>
                <li>Ensalada ó Pastas</li>
                <li>...</li><a href="banquetes.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
            <div class="box"><span class="icon-cont"><i class="icon-meseros"> </i></span>
              <h3>Meseros</h3>
              <ul class="hidden">
                <li>Capitanes</li>
                <li>Charoleros</li>
                <li>Meseros</li>
                <li>Edecanes</li>
                <li>...</li><a href="meseros.html" class="seeMore">Ver más</a>
              </ul><a class="expand"><span class="plus">+</span><span class="minus">-</span></a>
            </div>
          </div>
        </p>
        <h2 class="title-question">¿Ya viste todo lo que tenemos para ti?</h2>
        <p class="parra"> <span class="negrita">¿Tienes dudas? </span><span>ve a tu nuestra sección de </span><a href="" class="link-pink">preguntas frecuentes </a><span>ó </span><a href="" class="link-pink">contactanos</a><span>, aclararemos todas tus dudas sin ningun compromiso.</span></p>
        <p class="parra">Bien, ya hemos aclarado todas tus dudas llamanos y aparta tu fecha con un 25% del monto total.</p>
        <div class="row center middle column margin3">
          <div class="phon col-6 end">
            <button class="button-green">Ver paquetes</button>
          </div>
          <div class="phon col-6 start">
            <button class="button-contacto">Contacto</button>
          </div>
        </div>
      </article>
    </section>
   
    <article class="footer">
      <div class="footer-content"><a href="/">
          <H3 class="footer-title">Arias</H3><span>Banquetes & Decoración</span></a>
        <ul class="footer-list">
          <li class="footer-list-item"><a href="/acercade.html">Acerca de</a></li>
          <li class="footer-list-item"><a href="#portafolio">Portafolio</a></li>
          <li class="footer-list-item"><a href="/contacto">Contacto</a></li>
        </ul>
      </div>
      <div class="footer-content">
        <h3 class="footer-title">Servicios</h3>
        <ul class="footer-list">
          <li class="footer-list-item"><a href="mobiliario.html">Mobiliario</a></li>
          <li class="footer-list-item"><a href="meseros.html">Meseros</a></li>
          <li class="footer-list-item"><a href="manteleria.html">Mantelería</a></li>
          <li class="footer-list-item"><a href="cristaleria.html">Cristalería</a></li>
          <li class="footer-list-item"><a href="decoracion.html">Decoración</a></li>
          <li class="footer-list-item"><a href="banquetes.html">Banquetes</a></li>
        </ul><a href="" id="xxx" class="button-circle icon-triangle-up"></a>
      </div>
    </article>
    <div class="derechos">© 2016 Arias Banquetes & Decoración. Todos los derechos reservados.
      <div class="jahaziel">Desarrollado por<a target="_blank" href="https://www.facebook.com/Jahaziel.Ortiz.Barrios"><span class="negrita">Jahaziel Ortiz Barrios</span><span class="face-jahaziel icon-facebook"></span></a></div>
    </div>
    <script src="./js/bundle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script class="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/mains.js"></script>
  </body>
</html>";
}
?>