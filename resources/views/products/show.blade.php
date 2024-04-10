@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TenSP:</strong>
                {{ $product->TenSP }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gia:</strong>
                {{ $product->Gia }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <strong>Image:</strong>
            <img width="100px" src="{{asset('uploads/'.$product->image)}}" alt="">
        </div>
    </div>
@endsection