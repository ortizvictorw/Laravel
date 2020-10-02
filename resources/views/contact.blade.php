{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Contact')


{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

    @include('partials.session-status')
    <form class="bg-white shadow rounded py-3 px-4"
    method="POST" action="{{route('messeges.store')}}">

    @csrf
    <h1 class="display-4">Contacto</h1><hr>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0  @enderror"
            type="text" name="name" id="name" placeholder="Nombre..." value="{{old('name')}}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
        @enderror
        </div>

        <div class="form-group">
            <label for="email">Correo electónico</label>
            <input class="form-control bg-light shadow-sm  @error('email') is-invalid @else border-0  @enderror"
            type="email" name="email" id="email" placeholder="Correo..."value="{{old('email')}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">
            <label for="subject">Asunto</label>
            <input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0  @enderror"
            type="text" name="subject" id="subject" placeholder="Asunto..."value="{{old('subject')}}">
            @error('subject')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror

        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea class="form-control bg-light shadow-sm  @error('content') is-invalid @else border-0  @enderror"
            name="content" id="content"value="{{old('content')}}"placeholder="Mensaje..." ></textarea>
            @error('content')
                <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
        <button class="btm btn-primary btn-lg btn-block" type="submit">Enviar</button>
    </form>
        </div>
    </div>




</div>
@endsection
