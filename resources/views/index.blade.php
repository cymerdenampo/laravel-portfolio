@extends('layouts.app')

@section('content')
    @include('pages.about')
    {{-- @include('pages.facts') --}}
    @include('pages.skills')
    @include('pages.resume')
    @include('pages.portfolio')
    @include('pages.services')
    @include('pages.testimonials')
    @include('pages.contact')
@endsection
