@extends('frontend.home.index')

@section('content')
    @include('frontend.sections.hero')
    @include('frontend.sections.about')
    {{-- @include('frontend.sections.facts') --}}
    @include('frontend.sections.skills')
    @include('frontend.sections.resume')
    @include('frontend.sections.posts')
    {{-- @include('frontend.home.show') --}}
    @include('frontend.sections.contact')
    

    @endsection
    