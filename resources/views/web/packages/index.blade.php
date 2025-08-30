@extends('web.layout.app')
@section('content')
    @include('web.packages.components.images')

    @include('web.packages.components.others')
    @include('web.packages.components.packagescart')
@include('web.packages.components.about')

@include('web.packages.components.booking')
@include('web.packages.components.adventure')

    @endsection