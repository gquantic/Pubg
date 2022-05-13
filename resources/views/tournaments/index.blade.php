@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <h3 class="title">
                    Турниры
                    @isset($gameInfo)
                        {{ $gameInfo->title }}
                    @endisset
                </h3>

                @isset($gameInfo)
                    <a href="{{ route('tournaments.index') }}">Показать турниры по всем играм</a>
                @endisset
            </div>
        </div>
        <div class="row mt-3">
            @include('components.tournaments', ['tournaments' => $tournaments, 'grid' => 'col-lg-3 col-md-6'])
        </div>
    </div>
@endsection
