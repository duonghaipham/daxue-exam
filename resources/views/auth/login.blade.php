@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/auth_login.css") }} />
@stop

@section('title')
  @parent
  @lang('layout.layout.login')
@stop

@section('main')
  @parent
  @include('auth.partial.login')
@stop
