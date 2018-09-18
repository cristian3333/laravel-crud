@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Show Product</div>
                <div class="card-body">
             @if(Auth::check())
                <div class="table-responsive">
                    <table id="data" class="table table-striped table-bordered ">
                        <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                        </tr>
                        <tr>
                            <td>{{$product->product_name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>  
                <div class="pull-right">
                    <a href="{{'../products'}}" class="btn btn-success">Back</a>
                </div>  
            @endif        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
