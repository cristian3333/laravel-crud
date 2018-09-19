<script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "{{ route('products.getdata') }}",
        "columns":[
            { "data": "id" },
            { "data": "product_name" },
            { "data": "price" },
            { "data": "quantity" }, 
            {"data":"actions"}
        ]
     });
});

</script>



                               


