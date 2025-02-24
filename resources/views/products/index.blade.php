@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD PRODUCT </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
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
            <th>TenSP</th>
            <th>Gia</th>
            <th>Image</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->TenSP }}</td>
            <td>{{ $product->Gia }}</td>
            <td><img width="100px"  src="{{asset('uploads/'.$product->image)}}" alt=""></td>
            <td>
                
                 <a class="btn btn-info " href="{{ route('products.show',$product->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection