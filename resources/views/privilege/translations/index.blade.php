@extends('admin.layouts.header')

@section('admin.content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Турнир</th>
                <th>Игра</th>
                <th>Название</th>
                <th>YouTube</th>
                <th>Twitch</th>
                <th>TikTok</th>
                <th>Discord</th>
            </tr>
        </thead>
        <tbody>
            @foreach($translations as $translate)
                <tr>
                    <td>#{{ $translate->id }}</td>
                    <td>{{ $translate->tournament }}</td>
                    <td>{{ $translate->game }}</td>
                    <td>{{ $translate->title }}</td>
                    <td>
                        <a href="{{ $translate->youtube }}" target="_blank">{{ $translate->youtube }}</a>
                    </td>
                    <td>{{ $translate->twitch }}</td>
                    <td>{{ $translate->tiktok }}</td>
                    <td>{{ $translate->discord }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
