@extends('adminlte::page')

@section('title', 'Skins')

@section('content_header')
    <h1>Cadastro de Skins</h1>
    <a href="{{route('site.create')}}" class="btn btn-sm btn-info">Nova Skin</a>
@stop

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>IMAGEM</th>
                        <th>Nome</th>
                        <th style="width: 100px">DESCRIÇÃO</th>
                        <th style="width: 100px">URL</th>
                        <th style="width: 100px">RARIDADE</th>
                        <th style="width: 100px">VALOR</th>
                        <th style="width: 100px"><AÇÕES></AÇÕES></th>

                    </tr>
                    </thead>
                    <tbody>
                        @foreach($skins as $skin)
                            <tr>
                                <td>{{$skin->id}}</td>
                                <td>
                                    <img src="{{url("storage/{$skin->imagem}")}}" alt="{{$skin->nome}}" style="max-width: 100px">
                                </td>
                                <td>{{$skin->nome}}</td>
                                <td>{{$skin->descricao}}</td>
                                <td>{{$skin->url}}</td>
                                <td>{{$skin->raridade}}</td>
                                <td>{{$skin->valor}}</td>
                                <td>
                                    <a href="{{route('skin.edit', ['id'=> $skin->id])}}" class="btn btn-sm btn-info">Editar</a>
                                    <a href="{{route('skin.destroy', ['id'=> $skin->id])}}" class="btn btn-sm btn-danger">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop
