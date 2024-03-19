<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="css\app.css">
    <link href="{{ asset('app.css') }}" rel="stylesheet">
    {{-- <link href="practislaravel\resources\css\app.css" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form action="{{$url}}" method="POST">
      {{-- <form action="{{$url}}" method="POST"> --}}
      @csrf
        <div class="container">
          <h1>{{$title}}</h1>
          {{-- <p>Please fill in this form to create an account.</p> --}}
          <hr>
          <label for="email"><b>name</b></label>
          <input type="text" placeholder="Enter name" name="name" id="name" value="" required>
      
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" value="" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="psw" required>
          
      
          <label for="psw-repeat"><b>country</b></label>
          <input type="country" placeholder="country" name="country" id="country" value="" required>
          <label for="psw-repeat"><b>date</b></label>
          <input type="date" placeholder="date" name="date" id="date" required>
          <hr>
      
          {{-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> --}}
          <button type="submit" class="registerbtn">{{$titles}}</button>
        </div>


       
        {{-- <img src="{{ Vite::asset('resources/image/th.jpg') }}" alt="image"> --}}
       
        
      </form> 
      {{-- <h1>hello</h1> --}}
</body>
</html>