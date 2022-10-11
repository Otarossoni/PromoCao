@extends('adminlte::page')

@section('content')
    <h3>Editando Loja: {{ $loja->loja_nomeFantasia }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('lojas') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["lojas.update", 'loja_id'=>$loja->loja_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('loja_nomeFantasia', 'Nome Fantasia:') !!}
            {!! Form::text('loja_nomeFantasia', $loja->loja_nomeFantasia, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_url', 'URL:') !!}
            {!! Form::text('loja_url', $loja->loja_url, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Loja', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop