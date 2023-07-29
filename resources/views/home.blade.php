@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center my-3">
                <a href="{{ Route('trains') }}" class="btn btn-dark mx-2">Trains</a>
                <a href="#" class="btn btn-dark mx-2">Passengers</a>
            </div>
        </div>
    </div>
@endsection