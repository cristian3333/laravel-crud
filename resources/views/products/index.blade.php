@extends('layouts.app')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>       
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                 <div class="card-header">Product List</div>
                <div class="card-body">
                    <div class="pull-right">
                    <a href="{{'create'}}" class="btn btn-success">Add New Product</a>
                </div><br>
                        <table id="student_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Product name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
    </table>



    </div>
        </div>  
            </div> 
               </div>
        </div>
@endsection
@extends('layouts.footer')


