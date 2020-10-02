{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Home')


{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')
<div class="container">
    <div class=" row ">
    <div class="col-12 col-lg-6">

        <h1 class="display-4 text-primary" >Desarrollo Web</h1>
        <p class="lead text-secondary" >
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt laborum hic repellendus eligendi earum magnam, nesciunt ipsam quia. Non quo iste reiciendis culpa dolorem, illo blanditiis incidunt nemo facilis nisi.
        </p>
        <a class="btn btn-lg btn-block btn-primary" href="{{ route ('contact') }}">Contactame</a>
        <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route ('projects.index') }}">Portafolio</a>
    </div>
    <div class="col-12 col-lg-6">
        <img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo web">
    </div>
</div>
</div>



@endsection
