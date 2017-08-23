@extends('layouts.app')
@section('main')
<a href="{{ route('tasks.index') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back to Tasks List</a>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{{$task->name}}</h3>
  </div>
  <div class="panel-body">
    <p>{{$task->description}}</p>
  </div>
</div>

@endsection
