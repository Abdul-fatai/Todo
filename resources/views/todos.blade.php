@extends('layouts.app')



@section('title')
    Todos | Page
@endsection


@section('content')

    <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
           <form action="create/todo" method="POST">
                {{ csrf_field()}}
                <input type="text" name="todo" class="form-control input-lg" placeholder="Create a new todo">
           </form>
        </div>
    </div>

    @foreach($todos as $todo)

        {{ $todo->todo }} <a href="{{ route('todo.delete', ['id' => $todo->id ])}}" class="btn btn-danger"> x </a>
        <a href="{{ route('todo.update', ['id' => $todo->id ])}}" class="btn btn-danger">update</a>

        @if(!$todo->completed)
             <a href="{{ route('todo.completed', ['id' => $todo->id ])}}" class="btn btn-danger">mark as completed</a>
       
        @else

            <span class="text-success">Completed</span>

        @endif
       

        <hr>
    @endforeach

@endsection