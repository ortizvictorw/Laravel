{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Crear Proyecto | Victor Ortiz')

{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">


    <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('projects.store') }}">
    <h1 class="display-4">Nuevo Proyecto</h1><hr>

        {{-- Llama a estructura del formulario --}}
        @include('projects._form',['btnText'=>'Guardar'])

    </form>

            @include('partials.session-status')
            {{-- Llama a Errors --}}
            @include('partials.validationErros')
@endsection

        </div>
    </div>
</div>
