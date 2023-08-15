<tbody>
  @foreach ($records as $record)
      <x-table-record :record="$record"></x-table-record>
  @endforeach
</tbody>