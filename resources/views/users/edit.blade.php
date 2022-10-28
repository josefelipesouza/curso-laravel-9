@extends('layouts.app')


@section('title', 'Editar usuário {{$user->name}}')

@section('content')
<h1>Editar {{ $user->name}}</h1>


@include('includes.validations-form')

<form action="{{route('users.update', $user->id)}}" method="post">

    @method('PUT')
    @include('users._partials.form')
    <button type="submit">Editar</button>

</form>

@endsection