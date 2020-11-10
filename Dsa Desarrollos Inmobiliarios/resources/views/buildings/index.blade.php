@extends('layouts.app')

@section('content')


 <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row margin-title-sections-blog">
          <div class="span4 subtext">
            <div class="inner-heading">
              <h2>Proyectos</h2>
            </div>
          </div>          
        </div>
      </div>
</section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
              <section id="projects">
                <form id="form-project" action="projects/search" class="form-inline form-filtro col-md-8">
                  <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
                    <div class="form-group">                      
                      <select class="form-control" id="tipo" name="tipo">
                        <option>Tipo</option>                       
                        <option value="1">Departamento</option>
                        <option value="2">Local comercial</option>
                      </select>                      
                    </div>
                    <div class="form-group">                     
                      <select class="form-control" id="estado" name="estado">
                        <option >Estado</option>
                        <option value="1">Terminada</option>
                        <option value="2">En construcción</option>
                        <option value="3">Proximo a entregarse</option>
                      </select>
                    </div>                  
                    <div class="form-group">                      
                      <select class="form-control" id="room" name="room">
                        <option>N° de dormitorios</option>
                        @foreach($rooms as $room)
                          <option value="{{$room->id}}">{{$room->name}}</option>                        
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Buscar</button>                      
                    </div>
                  </form>
                   
                  <ul style="margin-left: -3%;" id="thumbs" class="portfolio col-md-8">

                    @foreach($buildings as $building)
                      <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                        <div class="veamos">
                        <a href="/building/{{$building->id}}">                                        
                          <img src="/storage/{{$building->image}}" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="{{$building->name}}">
                          <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="/building/{{$building->id}}">{{$building->name}}</a></h3></div></a>
                        </div>
                      </li>
                    @endforeach
                    <li class="item-thumbs span3 design item" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a href="/contact">                   
                      <img src="/img/EN QUE PODEMOS AYUDARTE.jpg" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="Como podemos ayudarte - Inmobiliaria Tucumán">
                        <div class="overlay"><h3 id="name-project"  ><a style="color:white;text-decoration:none;font-weight: 300;" href="/contact">Anímate!</a>
                        </h3></div>
                        </a>                      
                    </div>
                  </li>         
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
   
@endsection


   