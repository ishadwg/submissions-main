@extends('layout')

@section('title')
    Home
@endsection

@section('content')
    <x-header></x-header>

    <x-card-section :cardvalue="$cardvalue" :recenthistories="$recenthistories">
    </x-card-section>

    <x-table-section :records="$records"></x-table-section>
@endsection
