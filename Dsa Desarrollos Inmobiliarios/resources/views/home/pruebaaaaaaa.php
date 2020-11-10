@extends('layouts.app')

@section('content')

<section id="inner-headline"  style="margin-bottom: -18px;  padding-top: 7%;">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2 style="margin: auto;">Publicaciones</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <!--<li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>-->
              <!--<li><a href="#">Blog</a><i class="icon-angle-right"></i></li>-->
              <!--<li class="active">Blog with left sidebar</li>-->
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row span8">

                @foreach($posts as $publication)
                
                @php
                          $find = explode(".", $publication->image);

                          $type = end($find);

                          $filename = basename($publication->image, $type);

                          $filename = str_replace(".", "", $filename);

                          $dir = dirname($publication->image);

                @endphp

                <div class="col-md-12">
                  <div class="col-md-3">
                    <div class="foto" style="float:left;">
                    @if(!empty($publication->image)) 
                      <img class="img-responsive" src="/storage/{{$dir}}/{{$filename}}-cropped.{{$type}}" alt="{{$publication->title}}">
                    @endif
                    </div>                   
                  </div>
                  <div class="col-md-9">                      
                        <h3><a href="#">{{$publication->title}}</a></h3>                   
                        <p>
                          {{$publication->excerpt}} 
                        </p>
                  </div>                  
                </div>
              </div>
              @endforeach
            </article>           
            </article>
            <div id="pagination">
              <span class="all">Page 1 of 3</span>
              <span class="current">1</span>
              <a href="#" class="inactive">2</a>
              <a href="#" class="inactive">3</a>
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
                  <li>
                    <img src="img/blog/images (2).jpg" class="pull-left" alt="" />
                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                    <p>
                      Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                  </li>
                  <li>
                    <a href="#"><img src="img/blog/images (3).jpg" class="pull-left" alt="" /></a>
                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                    <p>
                      Mazim alienum appellantur eu cu ullum officiis pro pri
                    </p>
                  </li>
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