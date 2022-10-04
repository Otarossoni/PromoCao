@extends('adminlte::page')

@section('content')
    <h3>Novo Tipo de Usuário</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('tipos') }}'">Voltar</button><p></p>

    {!! Form::open(['url' => 'tipos/store']) !!}
        <div class="form-group">
            {!! Form::label('tipo_descricao', 'Tipo de Usuário:') !!}
            {!! Form::text('tipo_descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop