@extends('adminlte::page')

@section('content')
    <h3>Editando Denúncia: {{ $denuncia->denuncia_titulo }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('denuncias') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["denuncias.update", 'denuncia_id'=>$denuncia->denuncia_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('denuncia_titulo', 'Título:') !!}
            {!! Form::text('denuncia_titulo', $denuncia->denuncia_titulo, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('denuncia_descricao', 'Descrição:') !!}
            {!! Form::text('denuncia_descricao', $denuncia->denuncia_descricao, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::text('consumidor_id', $denuncia->consumidor_id, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Denúncia', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop