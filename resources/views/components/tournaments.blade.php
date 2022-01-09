@foreach($tournaments as $tournament)
    <div class="{{ $grid }} game-tournament" onclick="window.location.href = '/tournaments/{{ $tournament->id }}'">
        <div class="card" style="background: url('{{ $tournament->cover }}') center no-repeat; background-size: cover">
            <h3>{{ $tournament->title }}</h3>
            <p>{{ substr(str_replace('-', '.', $tournament->start_date), 0, 10).' - '.substr(str_replace('-', '.', $tournament->end_date), 0, 10) }}</p>
        </div>
    </div>
@endforeach
