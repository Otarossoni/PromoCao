@extends('adminlte::page')

@section('content')
    <h3>Nova Denúncia</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('denuncias') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'denuncias.store']) !!}
        <div class="form-group">
            {!! Form::label('denuncia_titulo', 'Título:') !!}
            {!! Form::text('denuncia_titulo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('denuncia_descricao', 'Descrição:') !!}
            {!! Form::text('denuncia_descricao', null, ['class' => 'form-control', 'required']) !!}
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