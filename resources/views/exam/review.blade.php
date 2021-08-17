@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/exam_take.css") }} />
@stop

@section('title')
  @parent
  {{ $exam->name }}
@stop

@section('main')
  @parent
  @include('exam.partial.exam_review')
@stop
