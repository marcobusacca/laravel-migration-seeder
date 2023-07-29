@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center my-5">
                <a href="{{ Route('home') }}" class="btn btn-dark mx-2">Return To Home Page</a>
            </div>
            @forelse ($passengers as $passenger)
                <div class="col-12 my-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <!-- First Name -->
                                        <div class="col col-6">
                                            <strong>First Name:</strong>
                                            <span>{{ $passenger->name }}</span>
                                        </div>
                                        <!-- Last Name -->
                                        <div class="col col-6">
                                            <strong>Last Name:</strong>
                                            <span>{{ $passenger->surname }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 my-5">
                                    <div class="row">
                                        <!-- Tax Code -->
                                        <div class="col col-6">
                                            <strong>Tax Code:</strong>
                                            <span>{{ $passenger->tax_code }}</span>
                                        </div>
                                        <!-- Date Of Birth -->
                                        <div class="col col-6">
                                            <strong>Date of Birth:</strong>
                                            <span>{{ $passenger->date_of_birth }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            <div class="col-12 text-center my-5">
                <h2>Passenger Not Found!</h2>
            </div>
            @endforelse
        </div>
    </div>
@endsection