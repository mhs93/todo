@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ToDo List</div>

                    <div class="card-body">
                        @if(Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        <table class="table">
                            <a type="button" class="btn btn-sm btn-success" href="{{ route('todo.create') }}">Add New Todo</a>
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($todos as $todo)
                            <tr>

                                <td>{{ $todo->title }}</td>
                                <td>{{ $todo->description }}</td>
                                <td>
                                    @if( $todo->status == 0)
                                        <a class="btn btn-sm btn-warning" href="">Incomplete</a>
                                    @else
                                        <a class="btn btn-sm btn-success" href="">Completed</a>
                                    @endif
                                </td>
                                <td class="btn-group" role="group">
                                    <a type="button" class="btn btn-sm btn-success" href="{{ route('todos.show',$todo->id) }}">View</a>
                                    <a type="button" class="btn btn-sm btn-info" href="{{ route('todos.edit',$todo->id) }}">Edit</a>
                                    <form action="{{ route('todos.delete',$todo->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="todo_id" value="{{ $todo->id }}">
                                        <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
