@switch($id)
    @case(1)
    <span class="text-gray-600">
    @break

    @case(2)
    <span class="text-green-600">
    @break

    @case(3)
    <span class="text-red-600">
    @break
@endswitch
{{ $slot }}</span>
