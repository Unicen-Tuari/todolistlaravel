@extends('layouts.app')
@section('content')
<a href="{{ route('task.index') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back to Tasks List</a>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Task #{{$task->id}}</h3>
  </div>
  <div class="panel-body">
    <form action="{{ route('task.update', $task) }}" method="post">
      {{ method_field('patch') }}
      {{ csrf_field() }}
      <div class="form-group">
        <label for="name">Task Name:</label>
        <input class="form-control" type="text" name="name" value={{$task->name}}>
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control"  name="description" rows="8" cols="40">{{$task->description}}</textarea>
      </div>
      <button type="submit" class="btn btn-default">Update</button>
    </form>
  </div>
</div>
@endsection
