@extends('adminlte::page')

@section('content')
    <h3>Nova Loja</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['url' => 'lojas/store']) !!}
        <div class="form-group">
            {!! Form::label('loja_nomeFantasia', 'Nome Fantasia:') !!}
            {!! Form::text('loja_nomeFantasia', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_url', 'URL:') !!}
            {!! Form::text('loja_url', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Criar Loja', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop