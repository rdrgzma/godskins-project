@extends('adminlte::page')
@section('title','Skin')
@section('content_header')
    <h1>Novo Skin</h1>

@endsection
@section('content')
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                <h5><i class="icon fas fa-ban"></i>
                    Ocorreu erro!
                </h5>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{route('skin.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data" >
                @csrf
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Imagem</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" value="{{old('nome')}}"  class="form-control @error('nome') is-invalid @enderror" id="nome">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="descricao" class="col-sm-2 col-form-label ">Descrição</label>
                    <div class="col-sm-10">
                        <input type="text" name="descricao" class="form-control @error('descricao') is-invalid @enderror" id="descricao">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="valor" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-10">
                        <input type="text" name="valor" class="form-control @error('valor') is-invalid @enderror" id="valor">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="raridade" class="col-sm-2 col-form-label">Raridade</label>
                    <div class="col-sm-4">
                        <select name="raridade" id="" class="form-control">
                                <option value="raro">Raro  </option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-12 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" value="Cadastrar" class="btn btn-success">
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
