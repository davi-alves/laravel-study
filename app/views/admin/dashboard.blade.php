@extends('layouts.admin.master')

@section('content')

@stop

@section('js')
  @parent

  {{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js') }}
  {{ HTML::script('scripts/admin/controllers/controllers.js') }}
@stop
