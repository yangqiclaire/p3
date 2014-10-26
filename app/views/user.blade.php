@extends('_master')

@section('title')
Random Users
@stop


@section('content')
  <a href="/">back to home</a>
  <h1>
  	Random Users Generator
  </h1>
  
  {{ Form::open(array('url' => '/user', 'method' => 'get')) }}
  <p>{{ Form::label('number of random users') }}
     {{ Form::number('users_number', $users_number)}}(max=100)</p>
  <p>{{ Form::submit('Submit') }}</p>
  {{ Form::close() }}

  <p><?php
       for  ($i=0; $i <$users_number; $i++) {
       echo  $faker->name.'<br>', "\n";
       echo  $faker->address.'<br>',"\n";
       echo  $faker->text.'<br>',"\n";
       echo '<p> </p>';
  }
  ?>
  </p>

 @stop