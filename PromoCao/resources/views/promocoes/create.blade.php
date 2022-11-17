@extends('adminlte::page')

@section('content')
    <h3>Nova Promoção</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('promocoes') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'promocoes.store']) !!}
        <div class="form-group">
            {!! Form::label('promocao_titulo', 'Título:') !!}
            {!! Form::text('promocao_titulo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_descricao', 'Descrição:') !!}
            {!! Form::text('promocao_descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_preco', 'Preço:') !!}
            {!! Form::text('promocao_preco', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_url', 'URL:') !!}
            {!! Form::text('promocao_url', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_id', 'Loja:') !!}
            {!! Form::text('loja_id', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::text('consumidor_id', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop