@extends('layouts.app')
@section('main')
<h1>To Do List</h1>
<ul>
  @foreach ($tasks as $task)
    <li>
      <a href="{{ route('tasks.show', $task) }}">{{ $task->name }}</a>
      <a href="{{ route('tasks.edit', $task) }}">Edit</a>
      <form class="" action="{{route('tasks.destroy', $task)}}" method="post">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" >Delete</button>
      </form>
    </li>
  @endforeach
</ul>
<a href="{{route('tasks.create')}}">Create</a>
@endsection
