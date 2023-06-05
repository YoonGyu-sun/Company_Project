@extends('layout')

@section('title', 'Create Tasks')

@section('content')
<div class="px-64 mt-3">
    <div class="flex">
    <h1 class="font-bold text-3xl flex-1">Tasks Page</h1>
        <a href="/tasks/create">
        <button class="bg-green-500 hover:bg-green-600 px-4 py-2 float-right text-white">Create Task</button>
        </a>
    </div>
    <ul>
        @foreach ($tasks as $task) 
            <a href="/tasks/{{ $task->id }}">
                <li class="border-2 rounded my-2 p-3"> Title : {{ $task->title }}  <small class="float-right">Create at {{ $task->created_at }}</small></li>
            </a>
        @endforeach
    </ul>
</div>
@endsection

