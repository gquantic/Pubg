@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <img src="{{ $tournament->cover }}" width="100%" class="rounded-3" alt="">
            </div>
            <div class="col-8">
                <h2>{{ $tournament->title }}</h2>
                <p>{{ $tournament->description }}</p>
                <button class="btn btn-primary">Участвовать</button>
            </div>
        </div>
    </div>
@endsection
