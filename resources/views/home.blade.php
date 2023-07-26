@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($comics as $comic)
                <div class="col">
                    <a href="{{ route('details', $comic->id) }}">
                        <div class="card mt-3">
                            <img src="{{ $comic->thumb}}" alt="">
                            <div class="card-body">
                                <h4>{{ $comic->title }}</h4>
                                <p>{{ $comic->description }}</p>
                                <p>Price: {{ $comic->price }}</p>
                                <p>Series: {{ $comic->series }}</p>
                                <p>Type: {{ $comic->type }}</p>
                                <p>Date: {{ $comic->sale_date }}</p>
                                <p>Artists: {{ $comic->artists }}</p>
                                <p>Writers: {{ $comic->writers }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
@endsection