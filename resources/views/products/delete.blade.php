@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Delete Product</div>
                <div class="card-body">
             @if(Auth::check())
                <div class="table-responsive">
                    <form method="POST" action="/destroy/{{$product->id}}">
                            {{ csrf_field() }}
                            <div>
                                 Do you want to delete : {{$product->product_name}} ?
                            </div><br> 
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
