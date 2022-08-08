@extends('layouts.app')

@section('css')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

@endsection

@section('content')

<style>
    .bx{
        font-size: 90px;
    }

    form:hover i{
        color:  rgb(16 185 129) ;
        transition: all 0.5s ease-out;
    }
</style>


<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <h1 class="text-secondary">Subir imagenes</h1>
            <h5 class="text-secondary">Límite de tamaño de imagen es de 3MB</h5>
           <!-- <div class="card">
            	<div class="card-body">
            		<form action="{{route('imagenes.store')}}" method="POST" enctype="multipart/form-data">
            				@csrf
            			<div class="form-group">
                 			<input type="file" name="imagenes" accept="image/*">
                 			<br>
                 			@error('imagenes')
                 			<small class="text-danger">{{$message}}</small>
                 			@enderror
            			</div>
            		<button class="btn btn-primary mt-2" type="submit">Subir Imagen</button>
            		</form>
            	</div>
            </div> -->
            <form action="{{route('imagenes.store')}}" name="file" method="POST" class="dropzone" id="my-great-dropzone">
            	<div class="dz-message">
                 <div class="icon">
                        <i class='bx bx-cloud-upload' ></i>  
                 </div>   
                 <h2>Suelta tus imagenes aqui</h2>
                 <span class="note">no hay archivos seleccionados</span>
                </div>
            </form>
        </div>
    </div>
</div>
 <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" ></script>
    <script>
  		Dropzone.options.myGreatDropzone = {
  		    headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },

            dictDefaultMessage: "Arrastre una imagen al recuadro para subirlo",
            acceptedFiles: "image/*",
            maxFilesize: 5,
 		};
    </script>
@endsection