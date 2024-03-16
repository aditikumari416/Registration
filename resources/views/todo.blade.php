<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    <title>document</title>
</head>
<body>

    <form action="{{route('submit')}}" method="POST">
        @csrf
<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title..." name="name">
  {{-- <input type="number" id="myInput" placeholder="status" name="status"> --}}
 <span>  <button  class="addBtn" type="submit" >submit</button></span>
  {{-- <span><a  class="addBtn" >Add</a></span> --}}
</div>

    </form>

<ul id="myUL">
  <li>Hit the gym <span>  <button  class="btn btn-danger" type="text" >delete</button></span></li>
  <li class="checked">Pay bills</li>
  <li>Meet George</li>
  <li>Buy eggs</li>
  <li>Read a book</li>
  <li>Organize office</li>
</ul>

<table>

    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>status</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>hh</td>
        <td>hh</td>
        <td>hh</td>
    </tr>
</tbody>
  

    
</table>


</body>
</html>