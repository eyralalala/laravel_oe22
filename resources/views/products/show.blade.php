@extends('Layouts.main.app')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>View Posts</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <p><b>{{ $products->name }}</b></p>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description</strong>
                    <p><b>{{ $products->description }}</b></p>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Price</strong>
                    <p><b>{{ $products->price }}</b></p>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date Created</strong>
                    <p><b>{{ $products->created_at }}</b></p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection