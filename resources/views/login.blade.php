<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset ('css/login.css')}}">
    <title>Modern Login Page | AsmrProg</title>
</head>

<body>

<div class="container" id="container">
    <div class="form-container sign-in">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1>Login</h1>
            <div class="social-icons">
                <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <span>or use your email password</span>
            <div class="form-group mb-3">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="form-group mb-3">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <a href="#">Forget Your Password?</a>
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="toggle-container">
        <div class="toggle">
            <div class="toggle-panel toggle-left">
                <h1>Welcome Back!</h1>
                <p>Enter your personal details to use all site features</p>
                <button class="hidden" id="login">Sign In</button>
            </div>
            <div class="toggle-panel toggle-right" style="background-color: black">
                <h1>Hallo, Teman!</h1>
                <p>Daftarkan dengan detail pribadi Anda</p>
                <a href="{{route('register')}}" class="btn" style="    background-color: 	#0000CD;
                color: #fff;
                font-size: 12px;
                padding: 10px 45px;
                border: 1px solid transparent;
                border-radius: 8px;
                font-weight: 600;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                margin-top: 10px;
                border-color:;  
                cursor: pointer" id="register">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@if($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success', // You can use 'success', 'error', 'warning', etc.
        title: '',
        text: '{{$message}}',
    });
</script>
@endif
@if($message = Session::get('failed'))
<script>
    Swal.fire({
        icon: 'error', // You can use 'success', 'error', 'warning', etc.
        title: 'Oops...',
        text: '{{$message}}',
    });
</script>
@endif
</body>

</html>
