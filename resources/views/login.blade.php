<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{route('login.store')}}" method="post">
    @if(Session::has('success'))
        <div class="success"> {{Session::get('success')}}</div>
        @endif
        @if(Session::has('error'))
        <div class="error"> {{Session::get('error')}}</div>
        @endif
        @csrf
       
        <h3>Login Here</h3>

        <label for="mobile">mobile</label>
        <input type="mobile" placeholder="mobile" id="mobile" name="mobile">
        <span>@error('email'){{$message}}@enderror</span>

        <label for="password">Password</label>
        <input class="input_passworrd" type="password" placeholder="Password" id="password" name="password" >
        
        <i class="fa fa-solid fa-eye eye_icon" id="oneye"></i>
        <i class="fa fa-solid fa-eye-slash eye_icon" id="offeye"></i>
        <span>@error('Password'){{$message}}@enderror</span>

        <button>Log In</button>
        <div class="social">
         <a href="{{route('user.create')}}" class="go">Sign Up </a>
        </div>
    </form>

<script>
    $(document).ready(function(){
        $('#offeye').click(function(){
            $('#offeye').hide();
            $('#oneye').show();
            $('#password').attr('type','text');
        });
        $('#oneye').click(function(){
            $('#oneye').hide();
            $('#offeye').show();
            $('#password').attr('type','password');
        });

    });
</script>
</body>
</html>