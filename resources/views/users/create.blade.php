@extends('layouts.app')


@section('title', 'Novo usuário')

@section('content')
<h1>Novo usuário</h1>


@include('includes.validations-form')

<form action="{{route('users.store')}}" method="post">

    @csrf
    @include('users._partials.form')
    <button type="submit">Salvar</button>

</form>

@endsection