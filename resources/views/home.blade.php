@extends('includes.principal')

@section('classe-pg', 'page-home')
@section('javascript')
    <script src="build/js/banner.js"></script>
@stop
@section('conteudo')
    <article class="container">
        <div class="esconde-banner">
            <div class="container-banner">
                @foreach($banners as $key=>$banner)
                    <div class="banner" data-banner="{{$key}}">
                        <h1 class="titulos-losango col-md-3">{{$banner->titulo}}</h1>
                        <div class="col-md-8 conteudo-textos">{!! $banner->texto !!}</div>
                        <div class="clearfix"></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="container-controle-banner" class="text-center"></div>
    </article>
@stop