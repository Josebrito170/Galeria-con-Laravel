@extends('layouts.app')

@section('content')
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
    body{
        background-image:  linear-gradient(0deg, rgba(33,37,41,1) 0%, rgba(46,42,42,1) 0%, rgba(43,39,39,0.8631827731092436) 0%, rgba(23,23,24,0.6362920168067228) 0%, rgba(49,47,66,0.8995973389355743) 0%, rgba(55,46,46,0.6334908963585435) 100%), url("https://img.freepik.com/vector-gratis/hombres-mujeres-visitando-museo-o-galeria-arte-ilustracion_1262-18948.jpg?w=2000");
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .bx{
        font-size: 43px;
        margin-left: 7px;
    }
</style>
<div class="container">
    <div class="my-5 py-5">
       <div class="mb-4">
            <h1 class="text-white text-center my-5">
        Ingresa para acceder a la galeria 
            </h1>
       </div> 
     
      <div class="d-flex justify-content-center d-flex m">
        <a class="btn btn-outline-light btn-lg mx-2" href="{{ route('login') }}">
          <h1>Iniciar sesión</h1>
        </a>
        <a class="btn btn-dark btn-lg mx-2" href="{{ route('register') }}">
         <h1>Registrar</h1> 
        </a>
      </div>

    
    
</div>
@endsection
