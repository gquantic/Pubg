@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 mt-3 mb-2">
            <h3 class="title">Ближайшие турниры</h3>
        </div>

        <!-- Tournmanets -->
        <div class="row mt-3">
            @include('components.tournaments', ['tournaments' => \App\Models\Tournament::all(), 'grid' => 'col-lg-3 col-md-6'])
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="title">Контракты</h3>
        </div>

        <!-- Contacts -->
        <div class="row mt-3">
            @include('components.contracts')
        </div>
    </div>
</div>
@endsection
