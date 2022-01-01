@foreach($tournaments as $tournament)
    <div class="{{ $grid }} game-tournament" onclick="window.location.href = '/tournaments/{{ $tournament->id }}'">
        <div class="card" style="background: url('{{ $tournament->cover }}') center no-repeat; background-size: cover">
            <h3>{{ $tournament->title }}</h3>
        </div>
    </div>
@endforeach
