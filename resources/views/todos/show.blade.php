@extends('layouts.app')
@section('contant')

@section('title')
single page: {{ $todo->name }}
@endsection
    

    <h1 class="text-center my-5"> {{ $todo->name }}</h1>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-default">
          <div class="card-header">
           Details
          </div>

          <div class="card-body">
          
               
                  {{ $todo->description }}

                 
              
          </div>
        </div>
        <div style="margin-top:20px;">
           <a href="{{ route('todos.edit',$todo->id) }}" ><button  class="btn btn-success">Edit </button></a>      
           <a href="{{ route('todos.destroy',$todo->id) }}" ><button  class="btn btn-danger">Delete </button></a>      

        </div>
  @endsection