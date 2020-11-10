@extends('layouts.app')

@section('content')

<div id="nivo-slider " style="margin-top: 115px;" class="nomovile">
    <div  class="nivo-slider">
      @foreach($sliders as $slider)
        @if($slider->url != null)
          <a href="//{{$slider->url}}">
            <img src="/storage/{{$slider->img_desktop}}"/>
          </a>
        @else
          <img src="/storage/{{$slider->img_desktop}}"/>
        @endif
      @endforeach
    </div>      
</div> 
<div id="nivo-slider " class="noescritorio" style="margin-top: 76px;">
    <div  class="nivo-slider">
      @foreach($sliders as $slider)
        @if($slider->url != null)
          <a href="//{{$slider->url}}">
            <img src="/storage/{{$slider->img_mobile}}"/>
          </a>         
        @else
          <img src="/storage/{{$slider->img_mobile}}"/>
        @endif
      @endforeach
    </div>      
</div> 
<section style="margin-top: 0px;padding-top:0px;" class="callaction">
      <div style="height: 66px;" class="container own-project">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h1 id="jack" style="font-size: 1px;">Inmobiliaria Tucumán</h1>
                <h2 class="own-projects" style="font-size: 34px;margin-bottom: 22px;"> Nuestros <span class="highlight"><strong>proyectos</strong></span></h2>
              </div>              
            </div>
          </div>
        </div>
      </div>
</section>
<section class="callaction">
      <div class="container">      	
	      <div style="margin-bottom:0px;" class="row">
          <div class="span12">           
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                @foreach($buildings as $building)                
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a href="/building/{{$building->id}}">                                        
                      <img src="/storage/{{$building->image}}" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="{{$building->name}}">
                      <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="/building/{{$building->id}}">{{$building->name}}</a></h3></div></a>
                    </div>
                  </li>
                 @endforeach
                 <!--<li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <div class="veamos">                                         
                      <img src="/img/EN QUE PODEMOS AYUDARTE.jpg" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="Como podemos ayudarte - Inmobiliaria Tucumán">
                      <div class="overlay"><h3 id="name-project"><a style="color:white;text-decoration:none;font-weight: 300;" href="/propuesta">Anímate!</a></h3></div>
                    </div>
                  </li>-->
                  @if($leads->lead_availability == 1)
                  <li class="item-thumbs span3 design item" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a href="/propuesta">                    
                      <img src="/img/EN QUE PODEMOS AYUDARTE.jpg" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="Como podemos ayudarte - Inmobiliaria Tucumán">
                        <div class="overlay"><h3 id="name-project"  ><a style="color:white;text-decoration:none;font-weight: 300;" href="/propuesta">Anímate!</a>
                        </h3></div></a>       
                    </div>
                  </li>
                  @else
                  <li class="item-thumbs span3 design item" data-id="id-0" data-type="web">
                    <div class="veamos">
                    <a href="/contact">                   
                      <img src="/img/EN QUE PODEMOS AYUDARTE.jpg" alt="Imagen de edificio desarrollado por DSA - Inmobiliaria Tucumán" title="Como podemos ayudarte - Inmobiliaria Tucumán">
                        <div class="overlay"><h3 id="name-project"  ><a style="color:white;text-decoration:none;font-weight: 300;" href="/contact">Anímate!</a>
                        </h3></div>
                        </a>                      
                    </div>
                  </li>
                  @endif
                </ul>
              </section>
            </div>            
          </div>
        </div>
          <div class="row">
          <div class="span12">
          	<h2 style="font-size: 28px;" class="heading publications">Publicaciones <strong style="color:#297295;" >destacadas</strong></h2>
            <div class="row" style="margin-left:0px;">
               @foreach($posts as $post)
              <div style="margin-left: 0;margin-right: 1%;" class="span4">
                <div class="box aligncenter">                 
                  <div class="aligncenter icon">
                    <img class="img-responsive" style="width: 75%" src="/storage/{{$post->image}}" alt="publicaciones destacadas de DSA- Desarrollos Inmobiliarios" title="{{$post->title}}">
                  </div>
                  <div class="">
                    <h6 style="padding-left: 13%;padding-right: 13%;line-height: 14px;"><a href="/posts/{{$post->id}}" style="text-decoration:none;font-size: 16px;">{{$post->title}}</a></h6>
                    <!--<p>
                      {{$post->excerpt}}
                    </p>-->
                    <!--<a href="#">Learn about</a>-->
                  </div>
                </div>
              </div>
              @endforeach()           
            </div>
          </div>
        </div>
       </div>
</section>
@endsection

@section("jsfooter")
   
<script>
$(document).ready(function(){
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    responsive:{
        0:{
      autoWidth:true,
            items:2,
            nav:false
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
      autoWidth:true,
            items:5,
            nav:false,
            loop:false
        }
    }
});
});

</script>
@append
