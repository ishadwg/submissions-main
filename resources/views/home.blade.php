@extends('layout')

@section('content')
    <x-card-section :cardvalue="$cardvalue" :recenthistories="$recenthistories">
    </x-card-section>

    <x-table-section :records="$records"></x-table-section>
@endsection
