@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/auth_rank.css") }} />
@stop

@section('title')
  @parent
  @lang('layout.layout.member')
@stop

@section('main')
  @parent
  @include('auth.partial.ranking')
@stop
