@extends('layout.master')

@section('css')
  <link rel="stylesheet" href={{ mix("css/auth_change.css") }} />
@stop

@section('title')
  @parent
  Đổi mật khẩu
@stop

@section('main')
  @parent
  @include('auth.partial.password_changing')
@stop
