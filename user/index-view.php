<!--************ Imagen que reemplaza el carousel para dispositivos moviles ********-->
<div id="img-linux-tux" class="container hidden-lg hidden-md hidden-sm">
    <center><img src="img/slide-header.jpg" class="img-responsive img-rounded" alt="Image"></center>
</div>

<!--************************************Carousel******************************-->
<div class="container hidden-xs">
    <div class="col-xs-12">
<div id="carousel-example-generic" class="carousel slide">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>
    <div class="carousel-inner">
       <div class="item active">
           <img src="img/cloud.png" alt="">
          <div class="carousel-caption">
              Cloud Computing
          </div>
       </div>
       <div class="item">
          <img src="img/iaas.png" alt="">
          <div class="carousel-caption">
              IaaS
          </div>
       </div>
       <div class="item ">
          <img src="img/paas.png" alt="">
          <div class="carousel-caption">
             PaaS
          </div>
        </div>
        <div class="item ">
          <img src="img/saas.png" alt="">
          <div class="carousel-caption">
              SaaS
          </div>
        </div>
   </div>
   <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
       <span class="icon-prev"></span>
   </a>
   <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
     <span class="icon-next"></span>
   </a>
</div>
        </div>
     <div class="col-sm-2">&nbsp;</div>
</div>
<!--************************************ Fin Carousel******************************-->

 <hr class="hidden-xs">

<div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="text-center text-info">Productos y servicios</h1>
    </div>
  </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">CRM</h3>
            <img  src="img/Logocrm.png" class="img-responsive logos_GnuLinux" alt="Image">
             <p>
                Es fácil de usar <br>
                Interfaz de usuario simple y sencilla con una curva de aprendizaje mínima.
                Capacidad para configurar y empezar a vender desde el primer día.
                <br><br>
                Muchas funciones
                Funciones de automatización de ventas de primer nivel para automatizar todo su proceso comercial.
                Pase más tiempo interactuando con sus clientes y menos en la introducción manual de datos.
                <br><br>
                Personalizable
                Personalice completamente su experiencia de CRM sin escribir una sola línea de código.
                Integración sencilla en aplicaciones comerciales de terceros que utiliza a diario.
             </p>
             <p class="text-center">
                <a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a>
             </p>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
          <h3 class="text-center">Infraestructura como servicio</h3>
            <img src="img/Infraestructura.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
             IaaS es el nivel más básico de soluciones basadas en la nube, que se refiere al alquiler de una infraestructura de TI como un servicio totalmente subcontratado. En esta categoría, el proveedor de la nube le permite alquilar servidores, máquinas virtuales, almacenamiento, redes y sistemas operativos de pago por uso.
             <br><br>
             IaaS es la parte elemental de la computación en la nube, ya que es la que se encarga de proporcionar los recursos informáticos sobre los que seguiremos implementando el resto de conceptos.
            <br><br>
              Por ejemplo, en vez de tener 10 ordenadores físicos con Linux y 4 GB de RAM cada uno, podemos «virtualizarlos» en la nube y trabajar con ellos como si fueran sistemas físicos, aunque en realidad no lo son, están virtualizados dentro de un servidores
            </p>
            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">Software como servicio</h3>
            <img src="img/software.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
             SaaS, acrónimo de Software as a Service, es un modelo de distribución de software por el que terceros desarrolladores ofrecen ciertas aplicaciones a través de Internet accesibles solo a través de un cliente propio. Aunque no lo sepamos, este tipo de computación en la nube la utilizamos casi a diario, por ejemplo, al conectarnos a Twitter o Facebook desde sus respectivos clientes o al ver un vídeo o una película en streaming, por ejemplo, desde Netflix.
            <br><br>
              Muchos defensores del software libre, como Richard Stallman, han criticado el SaaS ya que, según ellos, usar estos clientes es como usar software privativo
            </p>
            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
        <div class="col-xs-12 col-md-6 thumbnail">
            <h3 class="text-center">Plataforma como servicio</h3>
            <img src="img/Plataforma.png" class="img-responsive logos_GnuLinux" alt="Image">
            <p>
                PaaS es la solución en la nube donde, además de proporcionar una infraestructura, los proveedores de la nube también emiten un entorno informático a pedido para desarrollar, probar, ejecutar y colaborar con componentes como servidores web, sistemas de gestión de bases de datos y kits de desarrollo de software (SDK) para Varios lenguajes de programación.
            </p>
            <p>
                PaaS, acrónimo de Platform as a Service, es un concepto de computación en la nube mediante la cual los usuarios pueden desarrollar, ejecutar y administrar aplicaciones sin preocuparse por la infraestructura que haya por debajo. De esta manera, los desarrolladores solo tienen que preocuparse por la programación de las aplicaciones, nunca por la configuración ni el software que hay por debajo, ahorrando tiempo y recursos.
            </p>
            <center><a href="#" class="btn btn-primary btn-sm" role="button">Leer más</a></center>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#carousel-example-generic").carousel({
            interval: 4000,
        });
    });
</script>