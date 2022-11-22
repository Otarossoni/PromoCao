@extends('adminlte::page')

@section('content')
    <h3>Editando Comentário: {{ $comentario->comentario_titulo }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('comentarios') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["comentarios.update", 'comentario_id'=>$comentario->comentario_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('comentario_titulo', 'Título:') !!}
            {!! Form::text('comentario_titulo', $comentario->comentario_titulo, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comentario_descricao', 'Descrição:') !!}
            {!! Form::text('comentario_descricao', $comentario->comentario_descricao, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::select('consumidor_id', \App\Models\Consumidor::orderBy('consumidor_nome')
                ->pluck('consumidor_nome', 'consumidor_id')->toArray(), $comentario->consumidor_id,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_id', 'Promoção:') !!}
            {!! Form::select('promocao_id', \App\Models\Promocao::orderBy('promocao_titulo')
                ->pluck('promocao_titulo', 'promocao_id')->toArray(), $comentario->promocao_id,['class' => 'form-control', 'required']) !!}
        </div>   
        <div class="form-group">
            {!! Form::submit('Editar Comentário', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop