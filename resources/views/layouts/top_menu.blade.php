@foreach($categories as $category)
    <li class="nav-item">
        <a class="nav-link" href="{{ $category->url }}">{{ $category->text }}</a>
    </li>
@endforeach
