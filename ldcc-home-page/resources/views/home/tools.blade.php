@extends('layouts.frontend')

@section('content')
    <div class="main-content">
        @include('partial.frontend.tools.slide-tools')
        @include('partial.frontend.tools.featured')
        @include('partial.frontend.tools.guide-vertical')
        @include('partial.frontend.tools.tool-list')
        @include('partial.frontend.tools.mobile-list')
        @include('partial.frontend.tools.banner-bottom')
    </div>
@endsection
