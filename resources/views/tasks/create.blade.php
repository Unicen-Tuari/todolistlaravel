@extends('layouts.app')
@section('main')
<form action="{{ route('tasks.store') }}" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Task Name:</label>
    <input type="text" name="name">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" rows="8" cols="80"></textarea>
  </div>
  <button type="submit">Create</button>
</form>
@endsection
