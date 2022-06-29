<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>image-crud-2</title>
  </head>
  <body>
    <div class="container col-md-6 pt-5">  
       
        <form action="{{url('/update/'.$student->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
                <label for="exampleInputEmail1" class="form-label pt-3">Name</label>
                <input name="name" type="text" value="{{ $student->name }}" class="form-control" id="exampleInputEmail1">   

                <label for="exampleInputEmail1" class="form-label mt-3">Roll</label>
                <input name="roll" type="text" value="{{ $student->roll }}" class="form-control" id="exampleInputEmail1">       

                <label for="exampleInputEmail1" class="form-label mt-3">Deperment</label>
                <input name="deperment" type="text" value="{{ $student->deperment }}" class="form-control" id="exampleInputEmail1"> 

                <label for="exampleInputEmail1" class="form-label mt-3">Image</label>
                <input name="image" type="file" class="form-control" id="exampleInputEmail1"> 
                <img width="40" src="{{ asset('uploads/students/'.$student->image) }}" alt="">        
               
                <button class="btn btn-primary mt-3" type="submit">update</button>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>