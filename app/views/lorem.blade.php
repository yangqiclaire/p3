@extends('_master')

@section('title')
Lorem Ipsum
@stop


@section('content')
  <a href="/">back to home</a>
  <h1>
  	Lorem Ipsum Generator
  </h1>

  {{ Form::open(array('url' => '/lorem', 'method' => 'get'))}}
  <p>
     {{ Form::label('number of paragraphs') }}
     {{ Form::number('paragraph_number', $paragraph_number)}}
     (max=20)
  </p>
  <p>
     {{ Form::submit('Submit') }}
  </p>
  {{ Form::close() }}

  <p>
     {{$text}}
  </p>


 @stop