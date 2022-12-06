@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div style="margin-top: 2rem" class="card">
                <div style="text-align: center; font-weight: bold; font-size: 25px" class="card-header">{{ __('Dashboard do Administrador') }}</div>

                <div class="card-body" style="text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bem-vindo(a) ao PromoCão! Aqui você pode administrar as promoções do site. ') }}
                    <br>
                    {{ __('Acesse o menu lateral para usar!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
