@extends('frontend.layout.app')
@section('content')
    @include('frontend.component.MenuBar')
    @include('frontend.component.heroslider')
    @include('frontend.component.topCategories')
    @include('frontend.component.exclusiveProduct')
    @include('frontend.component.bestSellignOffer')
    @include('frontend.component.featuredProduct')
    @include('frontend.component.testimonial')
    @include('frontend.component.newsletter')
    @include('frontend.component.footer')
@endsection
