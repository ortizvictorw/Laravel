{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Portafolio | '. $project->title)


@section('content')
<div class="container">
    <div class="bg-whit p-5 shadow rounded">

        <h1 >{{ $project->title }}</h1>



        <p class="text-secondary" >{{ $project->description }}</p>
        <p class="text-black-50" >{{ $project->created_at->diffForHumans() }}</p>

        <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('projects.index') }}">Regresar</a>

        @include('partials.session-status')

        @auth
        <div class="btn-group btn-group-sm">



            <a class="btn btn-primary mx-1 rounded" href="{{ route ('projects.edit', $project ) }}">Editar </a>
            <a class="btn btn-danger rounded" href="#" onclick="document.getElementById('delete-proyect').submit()">Eliminar</a>
            <form class="d-none" id='delete-proyect'  action="{{ route ('projects.destroy', $project) }}" method="post">
                @csrf @method('DELETE')
            </form>

        @endauth
    </div>

    </div>
</div>
@endsection
