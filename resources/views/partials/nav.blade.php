<nav class="navbar navbar-light navbar-expand-lg bg-light shadow-sm">
<div class="container">
<a class="navbar-brand" href="{{ route('home') }}">
    {{ config('app.name') }}
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ setActive('home') }}"
            href="{{route ('home')}}">{{__('Home')}}
            </a>
        </li><br>
       <li class="nav-item ">
            <a class="nav-link {{ setActive('about') }}"
            href="{{route ('about')}}">@lang('About')
            </a>
        </li><br>
       <li class="nav-item ">
            <a class="nav-link {{ setActive('projects.*') }}"
            href="{{route ('projects.index')}}">{{__('Projects') }}
            </a>
        </li><br>
       <li class="nav-item ">
            <a class="nav-link {{ setActive('contact') }}"
            href="{{route ('contact')}}">{{__('Contact')}}
            </a>
        </li><br>

       {{-- Con esta directiva solo se mostrara cuando no esta logueado --}}

       @guest
       <li class="nav-item">
            <a class="nav-link {{ setActive('login') }}"
            href="{{route ('login')}}">Login
            </a>
        </li>



       @else
           <li class="nav-item">
               <a class="nav-link {{ setActive('logout') }}"
               href="#"onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Seccion</a></li>

       @endguest

   </ul>
</div>
</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
