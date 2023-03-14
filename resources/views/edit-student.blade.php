<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student List</title>
</head>
<body>
  <div class="col-md-12">
    <div class="container mt-3" >
        <span class="fw-bold fs-3"> Edit Student</span>
        <hr>
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif

        <div class="row">
            <form action="{{url('update-student')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$data->id}}">
                <div class="md-3 mb-2">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name"  value="{{$data->name}}">
                     <span class="text-danger">@error('name') {{$message}} @enderror</span>
                </div>
                <div class="md-3 mb-2">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email"  value="{{$data->email}}">
                     <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
                <div class="md-3 mb-2">
                    <label class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone"  value="{{$data->phone}}">
                     <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                </div>
                <div class="md-3 mb-2">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address"  value="{{$data->address}}">
                     <span class="text-danger">@error('address') {{$message}} @enderror</span>
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button> 
                <a href="{{url('student-list')}}" class="btn btn-danger">Back</a>                              
            </form>
        </div>
    </div>
  </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>