<li class="nav-item">
    <a class="nav-link" href="/home">Главная</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('tournaments.index') }}">Турниры</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="/pay-balance">Пополнить баланс</a>
</li>

@foreach($categories as $category)
    <li class="nav-item">
        <a class="nav-link" href="{{ $category->url }}">{{ $category->text }}</a>
    </li>
@endforeach
