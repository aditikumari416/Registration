<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    
<table  class="table">



    <thead id="myUl">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>status</th>
        <th>action</th>
    </tr>
    </thead>
    <tbody>

        {{-- <h1> {{$custm}}</h1> --}}

        <pre>
            {{-- {{print_r($lists)}} --}}
        </pre>

        @foreach ($lists as $list )
       <tr>
            <td>{{$list->id}}</td>
            <td>{{$list->name}}</td>
            <td>{{$list->status}}</td>
            <td><a href="" class="btn btn-danger">delete</a>
            <a href="" class="btn btn-primary">edit</a></td>
        </tr>
    
@endforeach


<a ></a>
   
</tbody>
  

    
</table>
    
</body>
</html>