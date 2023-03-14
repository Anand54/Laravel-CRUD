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
        <span class="fw-bold fs-3">Student List</span>
        <div style="float:right">
            <a href="{{url('add-student')}}" class="btn btn-primary">Add Student</a>
        </div>
        <hr>
        <div>
            <table class="table">
                <thead>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @php
                       $i=1; 
                    @endphp
                    @foreach ($data as $stu)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->email}}</td>
                        <td>{{$stu->phone}}</td>
                        <td>{{$stu->address}}</td>
                        <td>
                            <a href="{{url('edit-student/'.$stu->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{url('delete-student/'.$stu->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>