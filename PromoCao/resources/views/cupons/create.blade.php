@extends('adminlte::page')

@section('content')
    <h3>Novo Cupom</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('cupons') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'cupons.store']) !!}
        <div class="form-group">
            {!! Form::label('cupom_titulo', 'Título:') !!}
            {!! Form::text('cupom_titulo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupom_aplicavel', 'Cupom:') !!}
            {!! Form::text('cupom_aplicavel', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupom_url', 'URL:') !!}
            {!! Form::text('cupom_url', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_id', 'Loja:') !!}
            {!! Form::select('loja_id', \App\Models\Loja::orderBy('loja_nomeFantasia')
                ->pluck('loja_nomeFantasia', 'loja_id')->toArray(), null,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop