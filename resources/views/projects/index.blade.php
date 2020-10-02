{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Potafolio | Victor Ortiz')

{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')
    <div class="container">
            <div class="d-flex justify-content-between align-items-center ">
                    <h1 class="display-4 mb-0">PORTAFOLIO</h1>
                @auth
                    <a class="btn btn-primary" href="{{ route('projects.create') }}">Crear Proyecto</a>
                @endauth
            </div><hr>
            <p class="lead text-secondary" >Proyectos realizados en marcos laborales y personales.</p>

        <ul class="list-group">
            @forelse ($projects as $project)
                    <li class="list-group-item border-0 mb-3 shadow-sm" >
                        <a class="d-flex justify-content-between align-items-center text-secondary"
                        href="{{ route('projects.show', $project) }}">
                            <span class=" font-weight-bold">
                            {{ $project->title }}
                            </span>
                            <span class="text-black-50">
                            {{ $project->created_at->format('d/m/Y')}}
                            </span>
                        </a>
                    </li>
                @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm ">Aun no hay Proyectos</li>
            @endforelse
            {{ $projects->links() }}
        </ul>

    @include('partials.session-status')
</div>
@endsection
