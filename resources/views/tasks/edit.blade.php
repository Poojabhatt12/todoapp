@extends('layout')
@section('content')

<h2>edit task</h2>

<form action="{{route('tasks.update',$task->id)}}" method="post">
@csrf
@method('put')
<input type ="text" name="title" placeholder="enter title" value="{{$task->title}}"><br>
<input type ="text" name="description" placeholder="enter description" value="{{$task->description}}">
<input type="submit" value="submit">

</form>
@endsection
