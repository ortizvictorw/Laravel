{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Prtafolios')
   
{{-- determina dinamicamente el contenido de la seccion --}}
@section('content') 

    <h1>PORTAFOLIO</h1>
        <ul>
            @forelse ($portafolio as $proyecto)
                    <li>{{ $proyecto['title'] }}</li>   
                @empty
                    <li>Aun no hay Proyectos</li>
            @endforelse
        </ul>
@endsection