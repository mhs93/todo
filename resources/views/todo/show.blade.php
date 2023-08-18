@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                         <a href="{{ url()->previous() }}" class="btn btn-sm btn-info">Back</a><br>
                        <b>Todo Title is: {{ $todo->title }}</b><br>
                        <b>Todo Description is: {{ $todo->description }}</b>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
