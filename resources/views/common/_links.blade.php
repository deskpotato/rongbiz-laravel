@foreach ($links  as $item)
    <a href="{{ $item->url }}" target="_blank">{{ $item->title }}</a>
@endforeach