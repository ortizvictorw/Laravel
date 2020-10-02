{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Editar Proyecto | Victor Ortiz')

{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">


                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('projects.update', $project) }}">
                    @method('PATCH')
                    <h1 >Editar Proyecto</h1><hr>
                    {{-- Llama a estructura del formulario --}}
                    @include('projects._form',['btnText'=>'Actualizar'])



                <div class="d-flex justify-content-between align-items-center text-center">
                <a class="btm btn-light btn-lg btn-block my-1 " href="{{route('projects.index') }}">Cancelar</a>
                </div>
                </form>
                {{-- Llama a Errors --}}

                @include('partials.validationErros')
        </div>
    </div>
</div>
@endsection

