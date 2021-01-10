@extends('site.content_sections')

@section('hero')
    @include('site.content.hero')
@endsection

@section('about')
    @include('site.content.about')
@endsection

@if(!isset($services) && !is_object($services))
    {{ die('var services not found or invalid') }}
@endif

@section('services')
    @include('site.content.service')
@endsection

@if(!isset($portfolios) && !is_object($portfolios))
    {{ die('var portfolios not found or invalid') }}
@endif

@section('portfolio')
    @include('site.content.portfolio')
@endsection



@section('clients')
    @include('site.content.clients')
@endsection

{{--@if(!isset($team) && !is_object($team))--}}
{{--    {{ die('var team not found or invalid') }}--}}
{{--@endif--}}
@if(!isset($peoples) && !is_object($peoples))
    {{ die('var peoples not found or invalid') }}
@endif

@section('team')
    @include('site.content.team')
@endsection

{{--@if(!isset($peoples) && !is_object($peoples))--}}
{{--    {{ die('var peoples not found or invalid') }}--}}
{{--@endif--}}

@section('footer')
    @include('site.footer')
@endsection



