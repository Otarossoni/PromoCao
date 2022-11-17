@extends('adminlte::page')

@section('content')
    <h3>Editando Consumidor: {{ $consumidor->consumidor_nome }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('consumidores') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["consumidores.update", 'consumidor_id'=>$consumidor->consumidor_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('consumidor_nome', 'Nome:') !!}
            {!! Form::text('consumidor_nome', $consumidor->consumidor_nome, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_email', 'E-mail:') !!}
            {!! Form::text('consumidor_email', $consumidor->consumidor_email, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Consumidor', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop