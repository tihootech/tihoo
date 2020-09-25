@extends('layouts.landing')
@section('content')

    <div id="pagepiling">

        @include('landing.sections.home')
        @include('landing.sections.products')
        @include('landing.sections.reviews')
        @include('landing.sections.contact')

    </div>

@endsection
