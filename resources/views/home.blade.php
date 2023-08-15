@extends('layout')

@section('content')
    <x-card-section></x-card-section>

    <x-table-section :records="$records"></x-table-section>
@endsection
