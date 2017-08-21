@extends('layouts.app')
@section('main')
    <a href="{{ route('tasks.index') }}">Tasks List</a>
    <h1>{{$task->name}}</h1>
    <p>{{$task->description}}</p>
@endsection
