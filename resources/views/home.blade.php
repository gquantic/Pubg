@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-12 mt-3 mb-2">
            <h3>Ближайшие турниры</h3>
        </div>

        <!-- Tournmanets -->
        <div class="row mt-3">
            @include('components.tournaments', ['tournaments' => \App\Models\Tournament::all(), 'grid' => 'col-lg-3 col-md-6'])
        </div>
    </div>
</div>
@endsection
