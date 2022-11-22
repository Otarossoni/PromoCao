@extends('adminlte::page')

@section('content')
    <h3>Novo Comentário</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('promocoes') }}'">Voltar</button><p></p>

    {!! Form::open(['route' => 'comentarios.store']) !!}
        <div class="form-group">
            {!! Form::label('comentario_titulo', 'Título:') !!}
            {!! Form::text('comentario_titulo', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comentario_descricao', 'Descrição:') !!}
            {!! Form::text('comentario_descricao', null, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_id', 'Promoção:') !!}
            {!! Form::select('promocao_id', \App\Models\Promocao::orderBy('promocao_titulo')
                ->pluck('promocao_titulo', 'promocao_id')->toArray(), null,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::select('consumidor_id', \App\Models\Consumidor::orderBy('consumidor_nome')
                ->pluck('consumidor_nome', 'consumidor_id')->toArray(), null,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop