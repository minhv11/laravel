@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD POST </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Body</th>
            <th>Image</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->title }}</td>
            <td>{{ $post->body }}</td>
            <td><img width="100px"  src="{{asset('uploads/'.$post->image)}}" alt=""></td>
            <td>
                
                 <a class="btn btn-info " href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection