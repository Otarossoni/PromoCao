@extends('adminlte::page')

@section('content')
    <h3>Editando Promoção: {{ $promocao->promocao_titulo }}</h3>

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <button type="button" class="btn btn-primary" onclick="location.href='{{ url('promocoes') }}'">Voltar</button><p></p>

    {!! Form::open(['route'=>["promocoes.update", 'promocao_id'=>$promocao->promocao_id], 'method'=>'put']) !!}
    @csrf
        <div class="form-group">
            {!! Form::label('promocao_titulo', 'Título:') !!}
            {!! Form::text('promocao_titulo', $promocao->promocao_titulo, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_descricao', 'Descrição:') !!}
            {!! Form::text('promocao_descricao', $promocao->promocao_descricao, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_preco', 'Preço:') !!}
            {!! Form::text('promocao_preco', $promocao->promocao_preco, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('promocao_url', 'URL:') !!}
            {!! Form::text('promocao_url', $promocao->promocao_url, ['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('loja_id', 'Loja:') !!}
            {!! Form::select('loja_id', \App\Models\Loja::orderBy('loja_nomeFantasia')
                ->pluck('loja_nomeFantasia', 'loja_id')->toArray(), $promocao->loja_id,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('consumidor_id', 'Consumidor:') !!}
            {!! Form::select('consumidor_id', \App\Models\Consumidor::orderBy('consumidor_nome')
                ->pluck('consumidor_nome', 'consumidor_id')->toArray(), $promocao->consumidor_id,['class' => 'form-control', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar Promoção', ['class' => 'btn btn-primary']) !!}
            {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        </div>
    {!! Form::close() !!}
@stop