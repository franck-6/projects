@extends('layouts.app')

@section('content')
<section id="inner-headline">
      <div class="container">
        <div class="row margin-title-sections-blog">
          <div class="span4 subtext">
            <div class="inner-heading">
              <h2>Contacto</h2>
            </div>
          </div>          
        </div>
      </div>
    </section>
<section id="content">
      <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>-->

      <div class="container">
        <div  class="row">
          <div  style="margin-left: 0px;" class="span12">
            <div id="form" class="span8" style="float:left;">              
              <h4>Haganos su <strong>consulta</strong></h4>
              <form action="/send_contact" method="post" enctype="multipart/form-data" role="form" class="contactForm">
                 {{csrf_field()}}
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <div class="row">
                  <div class=" form-contact span4 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nombre y Apellido" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-contact span4 form-group">
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono" data-rule="minlen:4" data-msg="Please enter at least 8 chars of phone" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-contact span4 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-contact span4 form-group">
                    <select class="form-control span4 locality-style" id="localidad" name="localidad">
                        <option>Provincia</option>                       
                        <option value="">Tucumán</option>
                        <option value="">Santiago del Estero</option>
                        <option value="">Salta</option>
                        <option value="">Catamarca</option>
                        <option value="">Jujuy</option>
                        <option value="">Otras</option>
                      </select> 
                    <div class="validation"></div>
                  </div>
                  <div class="form-contact span8 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>                  
                  <div id="form-contact-message" class="span8 margintop10 form-group">
                    <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                    <p style="text-align: start;" class="text-center">
                      <button class="btn btn-large btn-theme margintop10" type="submit">Enviar</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
            <div id="dates" class="span4" style="width: 29%;">
              <h5 style="font-weight: bold;">Datos de contacto</h5>
              <ul class="info-contact">
                <li style="padding: 10px 0;"><i class="date-style fa fa-map-marker"></i>General Paz 1480 - S.M. de Tucumán</li>
                <li><i class="date-style fa fa-mobile"></i>(0381) 155195659</li>
                <li style="padding: 10px 0;" ><i class="date-style fa fa-envelope"></i>info@dsaideas.com</li>
              </ul>
            </div>            
          </div>
          <div  id="contact"  class="span12">             
              <div id="map" id="mapa"><iframe id="frame" style="width:100%;" src="https://www.google.com/maps/d/embed?mid=1o3qs6NVQO7UUMWze63kGEJONJCtl8Oiv" width="1160" height="446"></iframe></div>           
          </div> 
        </div>
      </div>
    </section>

   
   <!-- <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -26.832839, lng: -65.221049};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 5, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
  Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFsA1wIiZnis6Bfv1gbF-Xd9ksSFDfofs&callback=initMap">
    </script>-->




@endsection