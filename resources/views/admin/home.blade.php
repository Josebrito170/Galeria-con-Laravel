@extends('layouts.app')

@section('content')
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
    .bx{
        font-size: 43px;
        margin-left: 7px;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex"><h2>{{ __('Notificación') }}</h2><i class='bx bx-info-circle'></i></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h3>Bienvenido a la vista de administrador</h3>
                    <h5 class="text-secondary">Accede a la vista de imagenes para que veas tu galeria de imagenes, si no tienes imagenes piedes subirlas en la vista de crearte. Gracias por su atención</h5>
                    <img src="https://trucosviajeros.com/wp-content/uploads/ilustracion-undraw.jpg" alt="" class="w-100">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
