@extends('layouts.app')
@section('contant')

@section('title')
 create_page
@endsection

@if ($errors->any())
<div class="alert alert-danger m-3">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1 class="text-center my-5">Create Todos</h1>

<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card card-default">
      <div class="card-header">Edit todo</div>
      <div class="card-body">
        
        <form action="{{ route('todos.update',$todo->id) }}" method="POST">
          @csrf
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" name="name" value="{{ $todo->name }}">
          </div>
          <div class="form-group">
            <textarea name="description" placeholder="Description" cols="5" rows="5" class="form-control">{{ $todo->description }}</textarea>
          </div>

          <div class="form-group text-center">
            <button type="submit" class="btn btn-success">Update Todo</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection