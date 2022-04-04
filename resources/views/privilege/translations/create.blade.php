@extends('admin.layouts.header')

@section('admin.content')
    <form action="{{ route('translations.store') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <h5 class="card-title mb-4">Информация о турнире</h5>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="" class="mb-2">Игра</label>
                            <select name="game" id="" class="form-control">
                                @foreach($games as $game)
                                    <option value="{{ $game->id }}">{{ $game->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="" class="mb-2">Турнир</label>
                            <select name="tournament" id="" class="form-control">
                                @foreach($tournaments as $tournament)
                                    <option value="{{ $tournament->id }}">{{ $tournament->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="" class="mb-2">Название</label>
                            <input type="text" name="title" class="form-control" placeholder="Введите название">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 mb-4">
                        <h5 class="card-title mb-1">Ссылки на трансляции</h5>
                        <p class="text-muted mb-0">Вставлять необходимо непосредственно ссылки из embed code html.</p>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="" class="mb-2">YouTube</label>
                            <input type="text" name="youtube" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="form-group">
                            <label for="" class="mb-2">Twitch</label>
                            <input type="text" name="twitch" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-3">
                        <div class="form-group">
                            <label for="" class="mb-2">TikTok</label>
                            <input type="text" name="tiktok" class="form-control" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-3">
                        <div class="form-group">
                            <label for="" class="mb-2">Discord</label>
                            <input type="text" name="discord" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body d-flex justify-content-end">
                <button class="btn btn-primary">Создать</button>
            </div>
        </div>
    </form>
@endsection
