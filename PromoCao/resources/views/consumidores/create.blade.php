@extends('adminlte::page')

@section('content')
    <h3>Novo Consumidor</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('consumidores') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'consumidores.store']) !!}
        <div class="form-group">
            {!! Form::label('consumidor_nome', 'Nome:') !!}
            {!! Form::text('consumidor_nome', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_email', 'E-mail:') !!}
            {!! Form::text('consumidor_email', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop