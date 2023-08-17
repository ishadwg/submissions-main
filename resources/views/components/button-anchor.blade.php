<a href="{{ $href }}{{ $id }}"
    {{ $attributes->merge(['class' => 'text-white active:bg-blue-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 uppercase']) }}>
    {{ $slot }}
</a>
