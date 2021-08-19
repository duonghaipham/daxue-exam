@extends('layout.master')

@section('css')
  <link rel="stylesheet" href={{ mix("css/auth_change.css") }} />
@stop

@section('title')
  @parent
  @lang('layout.layout.change_password')
@stop

@section('main')
  @parent
  @include('auth.partial.password_changing')
@stop
