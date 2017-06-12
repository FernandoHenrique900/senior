@extends('includes.principal')

@section('titulo-pg', " - Contato")
@section('classe-pg', 'page-contato')
@section('conteudo')
    <div class="container contato-container">
        <h1 class="titulos-losango col-md-3">Contato</h1>
        <div class="conteudo-textos col-md-9">
            <div class="container-losangos col-md-6">
                @if(isset($msg_email))
                    <div class="alert alert-{{$classe_bootstrap}}">{{$msg_email}}</div>
                @else
                    <form method="post" class="form-horizontal" href="{{route('emailContato')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="col-sm-2">Nome:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" id="nome-ipt"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="email" id="email-ipt"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3">Mensagem:</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="mensagem" id="mensagem-ipt"></textarea>
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-default">Enviar</button>
                        </div>
                    </form>
                @endif
            </div>
            <div class="contato-info col-md-6">
                <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>{{$contato->telefone}}</p>
                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>{{$contato->email}}</p>
                <p>{!!$contato->facebookBtn()!!}</p>
                <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>{{$contato->endereco_1}}
                    <br/><br/>
                    {{$contato->endereco_2}}<br/><br/>
                    CEP: {{$contato->cep}}</p>
            </div>
        </div>
    </div>
    <div class="maps-container embed-responsive">{!!$contato->maps!!}</div>
@stop