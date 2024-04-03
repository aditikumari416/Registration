<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>customer-view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    

<div class="containr">
    <table class="table">
        {{-- {{print_r($custm)}} --}}
        <thead>
            <tr >
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>country</th>
                

            </tr>
           
        </thead>
        <tbody>

            <a href="{{route('register')}}" class="btn btn-primary"> Add</a>

            <br>
            <form action="">
                <div class="form-group">

                   
                    <input class="search" placeholder="search here" class="form-control"  id="" name="search" value="{{$search}}">
                    <button class="btn btn-primary">search</button>
                    <a href="{{route('customerview')}}">
                        <button class="btn btn-danger" type="button">reset</button>
                    </a>
                    
                </div>

            </form>

            @foreach ( $custm as $custms )
                
            
            <tr>
              <td>{{$custms->id}}</td>
              <td>{{$custms->name}}</td>
              <td>{{$custms->email}}</td>
              <td>{{$custms->country}}</td>
              <td><a href="{{route('delete',['id'=>$custms->id])}}"  class="btn btn-danger">delete</a><td>
                <td><a href="{{route('edit',['id'=>$custms->id])}}"  class="btn btn-success">edit</a><td> 
                    <td><a href="" class="btn btn-danger"> trash</a></td>

                    

             
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>