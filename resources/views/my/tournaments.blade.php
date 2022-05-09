@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title">Мои турниры</h3>
            </div>
        </div>
        <div class="row mt-3">
            @include('components.tournaments', ['tournaments' => $tournaments, 'grid' => 'col-lg-6 col-md-6'])
        </div>
    </div>
@endsection
