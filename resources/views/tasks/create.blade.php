@extends('layout')

@section('title', 'Create Tasks')

@section('content')
<div class="px-64">
    <h1 class="font-bold text-3xl">Create Page</h1>

    <form action="/tasks" method="POST">
            @csrf
        <label class="block" for="title">Title</label>
        <input class="border border-gray-800 w-full @error('title') border border-red-700 @enderror" type="text" name="title" id="title" required value="{{ old('title') ? old('title'):'' }}">
        @error('title')
           <small class="text-red-500"> {{ $message }}</small>
        @enderror
        <br>
        <label class="block" for="body">Body</label>
        <textarea class="border border-gray-800 w-full  @error('body') border border-red-700 @enderror" name="body" id="body" cols="30" rows="10" required> {{ old('body') ? old('body'):'' }}</textarea>
        @error('body')
           <small class="text-red-500"> {{ $message }}</small>
        @enderror
        <br>
        <button class="bg-blue-400 text-white px-4 py-1 float-right">Submit</button>
    </form>
  
</div>    
@endsection