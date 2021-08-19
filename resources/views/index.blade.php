@extends('layout.master')

@section('css')
  <link rel="stylesheet" href={{ mix("css/home.css") }} />
@stop

@section('title')
  @parent
  {{ __('layout.home.welcome') }}
@stop

@section('main')
  @parent
  @include('includes.cta')
  @include('includes.nav_subjects')
@stop
