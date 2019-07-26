@extends('layouts.app')



@section('title')
    Todos | Page
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
            <form action="{{ route('todo.save', ['id' => $todo->id])}}" method="POST">
                {{ csrf_field()}}
            <input type="text" name="todo" value="{{ $todo->todo }}" class="form-control input-lg" placeholder="Create a new todo">
           </form>
        </div>
    </div>
@endsection