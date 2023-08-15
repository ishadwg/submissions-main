<tr>
  <x-cell-head>{{ $record->id }}</x-cell-head>
  <x-cell-row>{{ $record->created_at->toDayDateTimeString() }}</x-cell-row>
  <x-cell-row>{{ $record->type }}</x-cell-row>
  <x-cell-row>{{ $record->user->name }}</x-cell-row>
  <x-cell-row>
    <x-status-cell :id="$record->status_id">
      {{ $record->status->name }}
    </x-status-cell>
  </x-cell-row>
</tr>