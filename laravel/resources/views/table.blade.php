<!DOCTYPE html>
<html>
<head>
    <title>Data Employee</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    
<div class="container">
    <h1>BTP Test</h1>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>Metode</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Juni</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>

</body>
   
<script type="text/javascript">

  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('table') }}",
        columns: [
            {
                data: 'methodname', 
                name : 'methodname',
            },
            {
                data: 'subject_array', 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.map(function(item){
                        if( (new Date(item.date)).getMonth() == 0 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            {
                data: null, 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.subject_array.map(function(item){
                        if( (new Date(item.date)).getMonth() == 1 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            {
                data: null, 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.subject_array.map(function(item){
                        if( (new Date(item.date)).getMonth() == 2 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            {
                data: null, 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.subject_array.map(function(item){
                        if( (new Date(item.date)).getMonth() == 3 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            {
                data: null, 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.subject_array.map(function(item){
                        if( (new Date(item.date)).getMonth() == 4 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            {
                data: null, 
                name: 'startdate',
                render : function(data,type,row,meta){
                    var result = [];
                    data.subject_array.map(function(item){
                        if( (new Date(item.date)).getMonth() == 5 ){
                            result.push('<li>'+item.data+'</li>');
                        }

                    });
                    return result;
                }
            },
            // {data: 'subjectname', name: 'subjectname'},
            
            // {
            //     data: 'startdate', 
            //     name: 'startdate',
                
            // },
            // {data: 'enddate', name: 'enddate'},
            // {data: 'idmethod', name: 'idmethod'},
        ]
    });
  });

</script>
</html>