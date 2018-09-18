@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product List</div>
                <div class="card-body">
             @if(Auth::check())
                <div class="pull-right">
                    <a href="{{'create'}}" class="btn btn-success">Add New Product</a>
                </div><br>
                 <div class="table-responsive">
                    <table id="data" class="table table-striped table-bordered ">
                        <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($products as $productlist )
                        <tr>
                            <td>{{$productlist->id}}</td>
                            <td>{{$productlist->product_name}}</td>
                            <td>{{$productlist->price}}</td>
                            <td>{{$productlist->quantity}}</td>
                            <td><a href="show/{{$productlist->id}}">Show</a> | <a href="edit/{{$productlist->id}}">Edit</a> | <a href="delete/{{$productlist->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            @endif

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
