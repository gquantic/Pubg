@extends('admin.layouts.header')

@section('admin.content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Почта</th>
            <th>Роль</th>
            <th>Подтверждена почта</th>
            <th>Баланс</th>
            <th>Проверен</th>
            <th>Забанен</th>
            <th style="width: 15px;"></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>#{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email_verified_at }}</td>
                <td>{{ $user->balance }}</td>
                <td>{{ $user->moderated }}</td>
                <td>{{ $user->banned }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="text-white">
                        <i class="lni lni-pencil"></i>
                    </a>
                </td>
                <td>
                    <a href="{{ route('users.update', $user->id) }}" class="text-white">
                        <i class="lni lni-lock"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
