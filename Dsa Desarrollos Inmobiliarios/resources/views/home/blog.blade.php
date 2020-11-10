@extends('layouts.app')

@section('content')

    <section id="inner-headline">
      <div class="container">
        <div class="row margin-title-sections-blog">
          <div class="span4 subtext">
            <div class="inner-heading">
              <h2>Novedades</h2>
            </div>
          </div>          
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8" style="margin-left:0px;">            
              <div class="span8">
                
                  @foreach($posts as $publication)
                  @php
                          $find = explode(".", $publication->image);

                          $type = end($find);

                          $filename = basename($publication->image, $type);

                          $filename = str_replace(".", "", $filename);

                          $dir = dirname($publication->image);

                  @endphp
                  <!--<div class="col-md-12">
                    <a href="/nota/{{$publication->id}}" class="block-noti" style= "margin-bottom: 12px;">
                      <div class="col-md-3" style="float:left;">                                                          
                        @if(!empty($publication->image)) 
                          <img class="img-responsive" style="width: 80%;" src="/storage/{{$dir}}/{{$filename}}-cropped.{{$type}}" alt="publicacion de DSA | Inmobiliaria Tucumán" title="noticia">
                        @endif                                          
                      </div>
                      <div class="col-md-9">                      
                          <h4 class="titulos titulo1">{{$publication->title}}</h4>           
                          <div class="col-md-12">
                              {{$publication->excerpt}}
                          </div>                          
                      </div>
                    </a>                                    
                  </div>-->
                   <div class="span8" style="margin-left:0px;">
                    <a href="/nota/{{$publication->id}}" class="block-noti" style= "margin-bottom: 12px;">
                      <div class="span3">                                                          
                        @if(!empty($publication->image))
                          <div class="mobile-image"  style="float:left;">
                            <img class="img-responsive" src="/storage/{{$dir}}/{{$filename}}-cropped.{{$type}}" alt="{{$publication->title}}">
                          </div>                          
                        @endif                                          
                      </div>
                      <div class="span4">                      
                          <h5 style="padding-left: 0px;float:left;padding-bottom: 5px;" class="titulos titulo1">{{$publication->title}}</h5>           
                          <div class="col-md-12 body-posts-f" style="float: left">
                              {{$publication->excerpt}}
                          </div>
                          <div style="clear: both;"></div>                         
                      </div>
                    </a>                                    
                  </div>

                   @endforeach
              </div>          
            <div class="paginador text-center">
              <nav aria-label="Page navigation">
                 {{ $posts->render()}}
              </nav>
            </div>
          </div>
          <div class="span4">
            <aside class="right-sidebar">
              <!--<div class="widget">
                <form class="form-search">
                  <input placeholder="Type something" type="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </form>
              </div>-->
              <!--<div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                  <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
                </ul>
              </div>-->
              <div class="widget">
                <h5 class="widgetheading">Ultimas publicaciones</h5>
                <ul class="recent">
                  @foreach($lastposts as $last)
                  @php
                          $find = explode(".", $last->image);

                          $type = end($find);

                          $filename = basename($last->image, $type);

                          $filename = str_replace(".", "", $filename);

                          $dir = dirname($last->image);

                  @endphp

                  <li >
                    <img style="width: 50%;" src="/storage/{{$dir}}/{{$filename}}-medium.{{$type}}" alt="{{$last->title}}" class="pull-left" alt="noticia destacada de DSA | Desarrollo Inmobiliario" title="noticia destacada" />
                    <h6><a href="#">{{$last->title}}</a></h6>
                    <!--<p>
                      {{$last->excerpt}}
                    </p>-->
                  </li>

                  @endforeach



                  <!--<li>
                    <img src="img/blog/images (2).jpg" class="pull-left" alt="" />
                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                    <p>
                      Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                  </li>-->
                  <!--<li>
                    <a href="#"><img src="img/blog/images (3).jpg" class="pull-left" alt="" /></a>
                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                    <p>
                      Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                  </li>-->
                  <!--<li>
                    <a href="#"><img src="img/blog/nueva-arquitectura-espanola-eb-19.jpg" class="pull-left" alt="" /></a>
                    <h6><a href="#">Et mei iusto dolorum</a></h6>
                    <p>
                      Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                  </li>-->
                </ul>
              </div>
              <!--<div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Internet</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Development</a></li>
                </ul>
              </div>-->
            </aside>
          </div>
        </div>
      </div>
    </section>

@endsection