@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/auth_view.css") }} />
@stop

@section('title')
  @parent
  @lang('layout.user.update')
@stop

@section('main')
  @parent
  <div class="profile">
    <div class="profile-container">
      @include('auth.partial.mutual_profile')
      @include('auth.partial.update')
    </div>
  </div>
@stop

@section('js')
  <script src={{ mix('js/auth_view.js') }} type="text/javascript"></script>
@stop
