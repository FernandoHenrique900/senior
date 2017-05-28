@extends('includes.principal')

@section('titulo-pg', " - $titulo")
@section('classe-pg', "page-$class_pg")
@section('conteudo')
    <article>
        <h1 class="titulos-losango col-md-3 col-md-offset-1">{{$titulo}}</h1>
        <div class="col-md-8 conteudo-textos">{!! $texto !!}</div>
        <div class="clearfix"></div>
    </article>
@stop