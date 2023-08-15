<!-- Recent Activities Card -->
<div class="xl:basis-3/4 xl:mx-auto bg-white rounded-lg shadow-lg px-4 py-6">
    <h2 class="text-base font-semibold text-gray-500 mb-2">Recent Approval</h2>

    @foreach ($recenthistories as $history)
        <div class="@if ($loop->first) border-t @endif border-b py-1">
            <p class="text-sm mb-2">{{ $history->submission->submitter->name }}'s submission with ID #{{ $history->submission_id }} was
              <x-status-cell :id="$history->status_id">
                {{ $history->status->name }}
              </x-status-cell>
            </p>
            <p class="text-gray-600 text-xs">Action taken {{ $history->created_at->diffForHumans() }} by {{ $history->actor->name }} </p>
        </div>
    @endforeach
</div>
