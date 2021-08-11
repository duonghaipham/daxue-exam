@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/auth_register.css") }} />
@stop

@section('title')
  @parent
  Đăng ký
@stop

@section('main')
  @parent
  @include('auth.partial.register')
@stop
