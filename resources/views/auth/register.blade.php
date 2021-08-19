@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/auth_register.css") }} />
@stop

@section('title')
  @parent
  @lang('layout.layout.register')
@stop

@section('main')
  @parent
  @include('auth.partial.register')
@stop
