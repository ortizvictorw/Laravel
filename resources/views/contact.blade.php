{{-- Llama a Layout --}}
@extends('layout')

{{-- determina dinamicamente el titulo de la pagina --}}
@section('title','Contact')


{{-- determina dinamicamente el contenido de la seccion --}}
@section('content')

<h1>Contact</h1>


<form method="POST" action="{{route('contact')}}">

    @csrf
<input type="text" name="name" id="" placeholder="Nombre..." value="{{old('name')}}"><br>
        {!!$errors->first('name' , '<small>:message</small><br>')!!}

        <input type="email" name="email" id="" placeholder="Correo..."value="{{old('email')}}"><br>
        {!!$errors->first('email' , '<small>:message</small><br>')!!}

        <input type="text" name="subject" id="" placeholder="Asunto..."value="{{old('subject')}}"><br>
        {!!$errors->first('subject' , '<small>:message</small><br>')!!}

        <textarea  name="content" id=""value="{{old('content')}}" >Mensaje...</textarea><br>
        {!!$errors->first('content' , '<small>:message</small><br>')!!}

        <button type="submit">Enviar</button>
    </form>

@endsection
