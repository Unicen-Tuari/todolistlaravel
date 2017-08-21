@extends('layouts.app')
@section('main')
<form action="{{ route('tasks.update', $task) }}" method="post">
  {{ method_field('patch') }}
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Task Name:</label>
    <input type="text" name="name" value={{$task->name}}>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" rows="8" cols="80">{{$task->description}}</textarea>
  </div>
  <button type="submit">Update</button>
</form>
@endsection
