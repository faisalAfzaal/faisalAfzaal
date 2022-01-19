<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
        <title>Doctors Registration Form</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <form action="" method="Post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" clas="form-control" id="name"
                            name="name">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">city</label>
                            <input type="text" clas="form-control" id="name"
                            name="city">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Experty</label>
                            <input type="text" clas="form-control" id="name"
                            name="Experty">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">ContactNumber</label>
                            <input type="text" clas="form-control" id="name"
                            name="ContactNumber">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="text" clas="form-control" id="name"
                            name="email">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">password</label>
                            <input type="text" clas="form-control" id="name"
                            name="password">
                        </div>
                        <button type="Submit" class="btn btn-primary">Submit</button>
                    </form>
                    @if (session()->has('status'))
                    <div class="alert- alert-success">
                        {{session('status')}}
                        @endif
                    </div>


        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">name</th>
                    <th scope="col">city</th>
                    <th scope="col">Experty</th>
                    <th scope="col">ContactNumber</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($doctors as $doc)
            <tr>
                <th>{{$doc->id}}</th>
                <th>{{$doc->name}}</th>
                <th>{{$doc->city}}</th>
                <th>{{$doc->Experty}}</th>
                <th>{{$doc->ContactNumber}}</th>
                <th>{{$doc->email}}</th>
                <th>{{$doc->password}}</th>
                <td>
                    <a href="{{url('/edit',$doc->id)}}" class="btn btn-info btn-sm">Edit</a>
                    <a href="{{url('/delete',$doc->id)}}" class="btn btn-info btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
            </div>

        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
 crossorigin="anonymous"></script>
    </body>
</html>
