@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach($imagen as $item)
                    <div class="card">
                        <img src="{{asset($item->url)}}" alt="" class="card-img-top">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection