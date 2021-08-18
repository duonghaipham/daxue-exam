@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/exam_exceed.css") }} />
@stop

@section('title')
  @parent
{{--  {{ $exam->name }}--}}
@stop

@section('main')
  @parent
  @include('exam.partial.exam_exceed')
@stop
