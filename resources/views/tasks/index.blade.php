@extends('layout')
@section('content')
<h1>laravel</h1>
<h2>Lists of all Tasks</h2>
<ul>
    @foreach($alltasks as $p)


    <li>
        {{$p->title}}<br>
        {{$p->description}}


        <a href="{{route(tasks.edit,$task->id}}">edit</a>

        <form action="{{route('tasks.destroy',$task->id)}}" method='post'>
            @csrf
            @method('delete')
            <input type="submit" value='delete'>

        </form>
    </li>


    @endforeach
</ul>
@endsection