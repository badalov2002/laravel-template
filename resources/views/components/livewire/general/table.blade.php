<div>
    <ul>
        @foreach($data as $item)
            <li>{{ $item->title }} @livewire('features.languages.edit', ['item' => $item])</li>
        @endforeach
    </ul>
</div>
