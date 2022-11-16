@extends('adminlte::page')

@section('content')
    <h3>Editando Cupom: {{ $cupom->cupom_titulo }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('cupons') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["cupons.update", 'cupom_id'=>$cupom->cupom_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('cupom_titulo', 'Título:') !!}
            {!! Form::text('cupom_titulo', $cupom->cupom_titulo, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupom_url', 'URL:') !!}
            {!! Form::text('cupom_url', $cupom->cupom_url, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('cupom_aplicavel', 'Cupom:') !!}
            {!! Form::text('cupom_aplicavel', $cupom->cupom_aplicavel, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_id', 'Loja:') !!}
            {!! Form::select('loja_id', \App\Models\Loja::orderBy('loja_nomeFantasia')
                ->pluck('loja_nomeFantasia', 'loja_id')->toArray(), $cupom->loja_id,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Cupom', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop