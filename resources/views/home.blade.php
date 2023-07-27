@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            @forelse ($trains as $train)
            <div class="col-12 my-5">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <!-- Train Code -->
                                    <div class="col col-6">
                                        <strong>Train Code:</strong>
                                        <span>{{ $train->train_code }}</span>
                                    </div>
                                    <!-- Company -->
                                    <div class="col col-6">
                                        <strong>Company:</strong>
                                        <span>{{ $train->company }}</span>
                                    </div>
                                    <!-- Coaches Number -->
                                    <div class="col col-12">
                                        <strong>Coaches Number:</strong>
                                        <span>{{ $train->coaches_number ? $train->coaches_number : 0 }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-5">
                                <div class="row">
                                    <!-- Departure Station -->
                                    <div class="col col-6">
                                        <strong>Departure Station:</strong>
                                        <span>{{ $train->departure_station }}</span>
                                    </div>
                                    <!-- Arrival Station -->
                                    <div class="col col-6">
                                        <strong>Arrival Station:</strong>
                                        <span>{{ $train->arrival_station }}</span>
                                    </div>
                                    <!-- Departure Date -->
                                    <div class="col col-6">
                                        <strong>Departure Date:</strong>
                                        <span>{{ $train->departure_date }}</span>
                                    </div>
                                    <!-- Departure Time -->
                                    <div class="col col-6">
                                        <strong>Departure Time:</strong>
                                        <span>{{ date('H:i', strtotime($train->departure_time)) }}</span>
                                    </div>
                                    <!-- Arrival Date -->
                                    <div class="col col-6">
                                        <strong>Arrival Date:</strong>
                                        <span>{{ $train->arrival_date }}</span>
                                    </div>
                                    <!-- Arrival Time -->
                                    <div class="col col-6">
                                        <strong>Arrival Time:</strong>
                                        <span>{{ date('H:i', strtotime($train->arrival_time)) }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <!-- On Time -->
                                    <div class="col col-6">
                                        <strong>On Time:</strong>
                                        <span>{{ $train->on_time ? 'Yes' : 'No' }}</span>
                                    </div>
                                    <!-- Deleted -->
                                    <div class="col col-6">
                                        <strong>Deleted:</strong>
                                        <span>{{ $train->deleted ? 'Yes' : 'No' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center my-5">
                <h2>Train Not Found!</h2>
            </div>
            @endforelse
        </div>
    </div>
@endsection