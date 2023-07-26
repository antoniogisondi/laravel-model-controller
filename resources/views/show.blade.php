@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card mt-3 d-flex flex-row">
                        <div class="card-img-top d-flex justify-content-center my-3">
                            <img src="{{ $comics->thumb}}">
                        </div>
                        
                        <div class="card-body">
                            <h4>{{ $comics->title }}</h4>
                            <p>{{ $comics->description }}</p>
                            <p>Price: {{ $comics->price }}</p>
                            <p>Series: {{ $comics->series }}</p>
                            <p>Type: {{ $comics->type }}</p>
                            <p>Date: {{ $comics->sale_date }}</p>
                            <p>Artists: {{ $comics->artists }}</p>
                            <p>Writers: {{ $comics->writers }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection