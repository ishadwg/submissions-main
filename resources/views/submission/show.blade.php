@extends('layout')

@section('title')
    Submission ID #{{ $record->id }}
@endsection

@section('content')
    <section class="py-6">
        <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Submission ID #{{ $record->id }}</h2>
            <form action="/submissions" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="Type" class="block text-gray-700 text-sm font-medium mb-1">Type</label>
                    <input type="text" id="Type"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200"
                        value="{{ $record->type }}" readonly required>
                </div>
                <div class="mb-4">
                    <label for="attachment" class="block text-gray-700 text-sm font-medium mb-1">Attachment</label>
                    <x-image class="w-full max-w-sm mx-auto" src="{{ asset($record->attachment) }}"></x-image>
                </div>
                <div class="mb-4">
                    <label for="submitter" class="block text-gray-700 text-sm font-medium mb-1">Submitter</label>
                    <input type="text" id="submitter"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200"
                        value="{{ $record->submitter->name }}" readonly required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-medium mb-1">Status</label>
                    <input type="text" id="status"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200"
                        value="{{ $record->status->name }}" readonly required>
                </div>
            </form>
        </div>
    </section>

    <x-card-table class="max-w-xl mx-auto p-6 bg-blue-200" :recenthistories="$record->histories">
      Submission ID#{{ $record->id }}'s Approval
    </x-card-table>

@endsection
