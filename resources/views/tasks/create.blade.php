@extends('layout')
@section('content')

<h1>Create tasks</h1>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif----
<form action="{{Route('tasks.store')}}" method="post">
    @csrf

    <input type="text" placeholder="enter title" name="title"><br>
    <input type="text" placeholder="enter 
</form>


</form>
@endsection