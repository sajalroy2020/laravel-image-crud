<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>image-crud-2</title>
  </head>
  <body>

  
<div class="container pt-5">
    @if(session('status')) 
        <h6 class="alert alert-danger">{{session('status')}}</h6>
    @endif
    <h2 class="text-center pb-3">All Student Information <a class="btn btn-primary float-end" href="{{url('/create')}}">Add Student</a></h2>
    <table class="table table-bordered table-dark text-center">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Roll</th>
            <th scope="col">Deperment</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $key => $item)
            <tr>
                <td>{{ $key +1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->roll }}</td>
                <td>{{ $item->deperment }}</td>
                <td>
                    <img width="40" src="{{ asset('uploads/students/'.$item->image) }}" alt="">
                </td>
                <td>
                    <a class="btn btn-success" href="{{ url('/edit/'.$item->id) }}">Edit</a> 
                    <a class="btn btn-danger" onclick="return confirm('are you sure')" href="{{ url('/destroy/'.$item->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>