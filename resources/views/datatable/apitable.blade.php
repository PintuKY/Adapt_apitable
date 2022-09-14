<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Table with Api</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
    <link href="{{asset('/theme/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

</head>
<body>

<div class="card" style="margin-top:70px; width: 76rem;  margin-left: 106px;">  
  <div class="card-body">
    <div class="card-header">
        <h5 class="card-title">Api Data Table</h5>
    </div>
    <table class="table" id="data_list">
  <thead>
    <tr>
      <th scope="col">Sl.no</th>
      <th scope="col">API</th>
      <th scope="col">Description</th>
      <th scope="col">Auth</th>
      <th scope="col">HTTPS</th>
      <th scope="col">Cors</th>
      <th scope="col">Link</th>
      <th scope="col">Category</th>
      <th scope="col">created_at</th>

    </tr>
  </thead>
  <tbody>
    @php $i=1 @endphp
    @foreach($data as $val)
    <tr>     
      <td>{{$i}}</td>
      <td>{{$val['api']}}</td>
      <td>{{$val['description']}}</td>
      <td>{{$val['auth']}}</td>
      <td>{{$val['https']}}</td>
      <td>{{$val['cors']}}</td>
      <td>{{$val['link']}}</td>
      <td>{{$val['category']}}</td>
      <td>{{$val['created_at']}}</td>
      @php $i++ @endphp
    </tr>
    @endforeach
  </tbody>
</table>
  </div>
  <div class="d-flex justify-content-center">
    {!! $data->links() !!}
</div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="{{asset('theme/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('theme/vendor/clockpicker/js/bootstrap-clockpicker.min.js')}}"></script>
<!--<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>-->
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>


</body>
</html>
<script>
    $(document).ready(function () {
    $('#data_list').DataTable({
        dom: 'Bfrtip',
        // "paging": false
        buttons: [            
            'csvHtml5'            
        ]
    });
    
});
</script>