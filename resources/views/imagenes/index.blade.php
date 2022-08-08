@extends('layouts.app')

@section('content')
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<div class="container">
    <div class="row">
    	<h1 class="text-secondary">Galeria de imagenes <i class='bx bx-photo-album'></i></h1>
        <div class="m-auto col-12 d-flex flex-wrap">
            @foreach ($files as $file)
            	<div class="col-4">
            		<div class="card mb-3 mx-2">
            			<img src="{{asset($file->url)}}" alt="">
            			<div class="card-footer">
      
            				<form action="{{route('imagenes.destroy', $file)}}" class="d-inline" method="POST">
     						        @method('DELETE')
     						        @csrf
            					<button type="submit" class="btn btn-danger"> Eliminar</button>
            				</form>
            			</div>
            		</div>
            	</div>
            @endforeach
            <div class="col-12">
            	{{$files->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
