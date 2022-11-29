@extends('layouts.frontend')

@section('content')
    <div class="main-content">
        @include('partial.frontend.advisor.slide-advisor-page')
        @include('partial.frontend.advisor.guide-advisor-page')
        @include('partial.frontend.advisor.guide-vertical-advisor-page')
        @include('partial.frontend.advisor.advisor-service')
        @include('partial.frontend.advisor.list')
        @include('partial.frontend.advisor.list-article')
        @include('partial.frontend.advisor.banner-bottom')
    </div>
@endsection
