<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" href="css\app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <form action="{{url('/')}}/register" method="POST">
      @csrf
        <div class="container">
          <h1>Register</h1>
          {{-- <p>Please fill in this form to create an account.</p> --}}
          <hr>
          <label for="email"><b>name</b></label>
          <input type="text" placeholder="Enter name" name="name" id="name" required>
      
      
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="psw" required>
          
      
          <label for="psw-repeat"><b>country</b></label>
          <input type="country" placeholder="country" name="country" id="country" required>
          <label for="psw-repeat"><b>date</b></label>
          <input type="date" placeholder="date" name="date" id="date" required>
          <hr>
      
          {{-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> --}}
          <button type="submit" class="registerbtn">Register</button>
        </div>
      
        
      </form> 
      {{-- <h1>hello</h1> --}}
</body>
</html>