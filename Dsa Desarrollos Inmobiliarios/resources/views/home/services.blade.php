@extends('layouts.app')

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row margin-title-sections-blog">
          <div class="span4 subtext">
            <div class="inner-heading">
              <h2>Servicios</h2>
            </div>
          </div>          
        </div>
      </div>
</section>
 <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <!--<h2><strong>DSA Desarrollos Inmobiliarios</strong></h2>-->
            <p>
              DSA le ofrece servicios de gestión integral tanto a compradores como a vendedores. Nos especializamos en la búsqueda del inmueble  especifico que mejor se adapte a las necesidades y preferencias de cada uno de nuestros clientes. Nuestro equipo continua formándose y aprendiendo de cada nueva relación con Ustedes, nuestros clientes y por ello estamos seguros que elegirnos representará su más tranquila y mejor elección.
            </p>
            <ul id="thumbs" class="portfolio">
                  <li class="item-thumbs span3 design services-margin" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Te lo alquilamos" href="/img/teloalquilamos.jpeg"></a>
                        <img src="/img/teloalquilamos.jpeg" alt="Alquiler: nos encargamos de manejar los servicios de Alquiler de nuestros clientes en nuestros distintos desarrollos inmobiliarios." title="San Miguel">                      
                        <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="#">Te lo alquilamos</a></h3></div>
                    </div>
                  </li>
                  <li class="item-thumbs span3 design services-margin" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Te lo vendemos" href="/img/telovendemos.jpeg"></a>
                        <img src="/img/telovendemos.jpeg" alt="Venta: de acuerdo a tus necesidades y posibilidades  te vendemos tu futuro hogar." title="San Miguel">                      
                        <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="#">Te lo vendemos</a></h3></div>
                    </div>
                  </li>
                  <li class="item-thumbs span3 design services-margin" data-id="id-0" data-type="web">
                     <div class="veamos">
                        <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Te lo gestionamos" href="/img/telogestionamos.jpeg"></a>
                        <img src="/img/telogestionamos.jpeg" alt="Gestión integral: realizamos la gestión y manejo de tu negocio inmobiliario." title="San Miguel">
                        <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="#">Te lo gestionamos</a></h3></div>                       
                     </div>
                  </li>
                  <li class="item-thumbs span3 design services-margin" data-id="id-0" data-type="web">
                    <div class="veamos">                      
                      <img src="/img/enquepodemosayudarte.jpeg" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="San Miguel">
                      <a style="color:white;text-decoration:none;font-weight: 300;" href="/contact">
                        <div class="overlay"><h3 id="name-project">Animate!</h3></div>
                      </a>
                    </div>
                  </li>
            </ul>
          </div>          
        </div>
      </div>
    </section>



@endsection