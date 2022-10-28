@extends('layouts.app')

@section('title', 'lista')

@section('content')
<h1 class="text-2x1 font-semibold leading-tight py-2">
    
    Listagem de usuários
    (<a href="{{route('users.create')}}">+</a> )
</h1>



<form action="{{route('users.index')}}" method="get">
    @csrf
    <input type="text" name="search" placeholder="Pesquisar">
    <button>Pesquisar</button>


</form>



<ul>
    @foreach ($users as $user)
            
        <l1>
            {{ $user->name }} - 
            {{ $user->email }}
            | <a href="{{ route('users.show', ['id' => $user->id ]) }}">detalhe</a>
            <a href="{{ route('users.edit', ['id' => $user->id ]) }}">editar</a>
        </l1><br>

    @endforeach


</ul>
@endsection

