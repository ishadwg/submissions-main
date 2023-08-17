<tr>
  <x-cell-head>{{ $record->id }}</x-cell-head>
  <x-cell-row>{{ $record->created_at->toDayDateTimeString() }}</x-cell-row>
  <x-cell-row>{{ $record->type }}</x-cell-row>
  <x-cell-row>{{ $record->submitter->name }}</x-cell-row>
  <x-cell-row>
    <x-status-cell :id="$record->status_id">
      {{ $record->status->name }}
    </x-status-cell>
  </x-cell-row>
    <x-cell-row>
      <x-button-anchor class="bg-blue-500" :id="$record->id"
        href="/submissions/">
        View
      </x-button-anchor>
      <x-button-anchor class="bg-green-500" :id="$record->id"
        href="/submissions/approve/">
        Approve
      </x-button-anchor>
      <x-button-anchor class="bg-red-500" :id="$record->id"
        href="/submissions/reject/">
        Reject
      </x-button-anchor>
    </x-cell-row>
</tr>