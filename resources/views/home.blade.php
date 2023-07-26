@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @forelse ($comics as $comic)
                <div class="col">
                    <a href="{{ route('details', $comic->id) }}">
                        <div class="card mt-3">
                            <img src="{{ $comic->thumb}}">
                            <div class="card-body">
                                <h4>{{ $comic->title }}</h4>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
@endsection