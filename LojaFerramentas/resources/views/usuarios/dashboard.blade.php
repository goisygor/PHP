@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Dashboard de Projetos</h1>


    <form method="GET" action="{{ route('dashboard') }}">
        <input type="text" name="search" placeholder="Pesquisar produtos..." value="{{ request('search') }}">
        <button type="submit">Pesquisar</button>
    </form>


    <div class="row">
        @foreach ($produtos as $produto)
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/img1.jpg" class="card-img-top" alt="{{ $produto->nome }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produto->nome }}</h5>
                        <p class="card-text">{{ $produto->descricao }}</p>
                        <p class="card-text">{{ $produto->categoria }}</p>
                        <p class="card-text">Preço: R$ {{ $produto->preco }}</p>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary">Abrir projeto</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
