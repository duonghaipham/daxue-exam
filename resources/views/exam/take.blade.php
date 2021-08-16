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
  @include('exam.partial.exam_taking')
@stop

@section('js')
  <script src={{ mix('js/exam_take.js') }} type="text/javascript"></script>
@stop
