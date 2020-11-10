@extends('layouts.app')


@section('content')


<section id="inner-headline">
      <div class="container">
        <div class="row margin-title-sections-blog">
          <div class="span4 subtext">
            <div class="inner-heading">
              <h2>{{$building->name}}</h2>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div style="margin-bottom: 0;" class="row">
          <div class="span8">
            <article class="style-photos">
              <div class="top-wrapper">
                <div class="post-heading">
                  <!--<h3><a href="#">This is an example of portfolio detail</a></h3>-->
                </div>
                <!-- start flexslider -->
                <div class="flexslider">
                  <ul class="slides">                   
                   @foreach($galleryImages as $gallery)
                     <li>
                      <img src="{{$gallery->image}}"/>
                    </li> 
                    @endforeach
                     <!--<li>
                      <img src="/img/buildings/detalle23.jpg" alt="" />
                    </li>-->                  
                  </ul>
                </div>
                <!-- end flexslider -->
              </div>
              <p>
              
              </p>
            </article>
          </div>
          <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <h5 class="widgetheading">Características</h5>
                <ul class="folio-detail">
                  <li><i class="fa fa-chevron-right items-project"></i><label>Estado :</label>@if($building->state==1) Terminado @elseif($building->state==2) En construcción @else Próximo a entregarse @endif</li>
                  <li><i class="fa fa-chevron-right items-project"></i><label>Tipo de Propiedad :</label> {{ $building->type==1 ? 'Edificio de viviendas' : 'Local comercial' }}</li>
                  <li><i class="fa fa-chevron-right items-project"></i><label>Ubicación :</label> {{$building->location->ubication}} </li>
                  <li><i class="fa fa-chevron-right items-project"></i><label>Cantidad:</label>@if($building->available >0) {{$building->available}} @else No hay disponibles por el momento @endif</li>               
                  <li><i  class="fa fa-chevron-right items-project"></i><label>Viviendas :</label>  
                    <ul>
                    @foreach($room_numbers as $room)
                      <li>{{$room->roomNumber->name}}</li>
                    @endforeach
                    </ul>
                   </li>
                  
                </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Información adicional</h5>
               <ul class="folio-detail">
                  <li><i class="fa fa-chevron-right items-project"></i><label>Pileta :</label> {{ $building->pool==1 ? 'Si' : 'No'}}</li>
                  <li><i class="fa fa-chevron-right items-project"></i><label>Garage :</label> {{ $building->garage==1 ? 'Si' : 'No'}}</li>
                  <li><i class="fa fa-chevron-right items-project"></i><label>Terraza :</label> {{ $building->outstanding==1 ? 'Si' : 'No'}}</li>
               </ul>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Descripción</h5>
                <p>
                   {{$building->description}}
                </p>
              </div>
            </aside>
          </div>         
        </div>
      </div>
    </section>
    <div style="margin-bottom: 4%;" class="container">
     <iframe style="width:100%;" src="https://www.google.com/maps/d/embed?mid={{$building->mymaps_part}}" width="1160" height="446"></iframe>
   </div> 
    <div style="margin-bottom: 3%;" class="container">
       <div class="accordion" id="accordion2">
          <div style="margin-left:0;" class="accordion-group span6 left">
            <div class="accordion-heading buttons-project">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
              <i style="font-size: 201%;color: #297295;" class="fas fa-object-group"></i><h7 style="margin-left: 4%;position: relative;bottom: 4px;">Planos</h7>
              </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse">
              @foreach($planosf as $plano)
              <div class="accordion-inner">
                <!--<a href="/storage/{{$plano->image}}" download="{{$plano->image}}" target="_blank">{{$plano->name}}</a>-->
                <a href="{{$plano->image}}" target="_blank">{{ $plano->name}}</a>
                <!--<a href="URL::to()">{{$plano->name}}</a>-->
                
                <!--<a href="#" onclick="window.open('$plano->image', '_blank', 'fullscreen=yes'); return false;">{{$plano->name}}</a>-->
              </div>
              @endforeach
            </div>
          </div>
          <div class="accordion-group span6 right">
            <div class="accordion-heading buttons-project">
              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
              <i style="font-size: 201%;color: #297295;" class="fas fa-copy"></i></i><h7 style="margin-left: 4%;position: relative;bottom: 4px;">Memoria de calidad</h7>
              </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
              <div class="accordion-inner">
                <?php
                $json = $building->quality_memory;
                $obj = json_decode($json);
                $url = $obj[0]->download_link;
                ?>
                <a href="/storage/{{$url}}"  target="_blank">Memoria Técnica</a>
              </div>
            </div>
          </div>
        </div>
    </div>    

@endsection

@section('jsfooter')

<script type="text/javascript">

  /*var building = {!! json_encode($building->toArray()) !!};



  console.log(building.latitud);


  
var map = L.map('map').setView([building.latitud, building.longitud], 5465);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.5, -0.09]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();*/

</script>

@endsection

