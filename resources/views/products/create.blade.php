@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Product</div>
                <div class="card-body">
             @if(Auth::check())
                 <div class="table-responsive">      
                        <form method="POST" action="/store">
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputEmail1">Product Name</label>
                            <input type="text" class="form-control" id="product_name" name="product_name" aria-describedby="emailHelp" placeholder="Product Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Price</label>
                            <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Quantity</label>
                            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity">
                          </div>
                          <a href="{{'../products'}}" class="btn btn-success">Back</a>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                </div>
            @endif        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
