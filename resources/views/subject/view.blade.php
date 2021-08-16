@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/subject_view.css") }} />
@stop

@section('title')
  @parent
  {{ $subject->name }}
@stop

@section('main')
  @parent
  @include('subject.partial.detail')
@stop

@section('js')
  <script src={{ mix('js/subject_view.js') }} type="text/javascript"></script>
@stop
