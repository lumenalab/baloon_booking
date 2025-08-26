@extends('web.layout.app')
@section('content')
    @include('web.components.home-carousel')

    <!-- Awards & Certifications Section -->
    @include('web.components.logos')

        <!-- Top Selling Tours Section -->
        @include('web.components.top-selling-tours')

        @include('web.components.exp')

        @include('web.components.home_about')

    @endsection