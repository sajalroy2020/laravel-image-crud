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
        @if(session('status')) 
            <h6 class="alert alert-danger">{{session('status')}}</h6>
        @endif
    <a class="btn btn-primary" href="{{('/')}}">Show All Student</a>  
        <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
          @csrf
                <label for="exampleInputEmail1" class="form-label pt-3">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputEmail1"> 
                @error('name')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror  

                <label for="exampleInputEmail1" class="form-label mt-3">Roll</label>
                <input name="roll" type="text" class="form-control" id="exampleInputEmail1">   
                @error('roll')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror      

                <label for="exampleInputEmail1" class="form-label mt-3">Deperment</label>
                <input name="deperment" type="text" class="form-control" id="exampleInputEmail1"> 
                @error('deperment')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror 

                <label for="exampleInputEmail1" class="form-label mt-3">Image</label>
                <input name="image" type="file" class="form-control" id="exampleInputEmail1">   
                @error('image')
                  <span class="alert alert-danger">{{ $message }}</span>
                @enderror       
               
                <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>