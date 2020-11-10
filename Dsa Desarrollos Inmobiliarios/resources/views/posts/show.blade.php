@extends('layouts.app')

@section('content')
    <section id="content" style="margin-bottom: -18px;  padding-top: 8%;">
        <div class="container">
        <div class="row">
            <div class="span10 title-visibility">
                    @php
                            $find = explode(".", $post->image);

                            $type = end($find);
    
                            $filename = basename($post->image, $type);

                            $filename = str_replace(".", "", $filename);

                            $dir = dirname($post->image);

                    @endphp
                    <h3 class="title-mobile"><strong>{{$post->title}}</strong></h3>
                   <!--  @if($post->image)
                    <div class="foto"><img src="/storage/{{$dir}}/{{$filename}}-medium.{{$type}}" alt="{{ $post->title }}" class="img-responsive"></div>
                    @endif -->
                    <div class="texto"><b>{{ $post->excerpt }}</b></div>
                    <div class="texto">
                        <p>{!! $post->body !!}</p>
                    </div>
                    <div class="addthis_inline_share_toolbox"></div>
            </div>
        </div>
        </div>
    </section>