@extends('layouts.app')
@section('contant')
    
@section('title')
Todo list
@endsection

@if (session()->has('success'))
<div class="alert alert-success m-3" role="alert">
    {{ session()->get('success') }}
</div>
@endif
    <h1 class="text-center my-5">TODOS PAGE</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
            Todos
          </div>

          <div class="card-body">
            <ul class="list-group">
              @foreach($todos as $todo)
                <li class="list-group-item">
                  {{ $todo->name }}

                 <a href="{{ route('todos.show',$todo->id) }}"> <button class="btn btn-primary btn-sm float-right">View</button></a>
                </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>

@endsection