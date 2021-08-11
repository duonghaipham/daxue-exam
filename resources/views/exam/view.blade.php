@extends('layout.master')

@section('css')
  @parent
  <link rel="stylesheet" href={{ mix("css/exam_view.css") }} />
@stop

@section('title')
  @parent
  Tên bài thi
@stop

@section('main')
  @parent
  @include('exam.partial.exam_status')
@stop
