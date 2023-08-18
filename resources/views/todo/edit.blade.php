@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ToDo</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Back</a><br>
                        <form method="POST" action="{{ route('todos.update',$todo->id) }}">
                            @csrf
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" class="form-control"  name="title" value="{{ $todo->title }}" required>
                            </div>
                            <div class="form-group">
                                <label >Description</label>
                                <input type="text" name="description" class="form-control" cols="5" rows="5" value="{{ $todo->description }}" required>
                            </div>
                            <div>
                                <label for="status"> Status</label>
                                <select name="status" class="form-control" required>
                                    <option disabled selected>Select Option</option>
                                    <option value="1">Completed</option>
                                    <option value="0">InCompleted</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Task</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
