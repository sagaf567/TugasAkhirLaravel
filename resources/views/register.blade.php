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
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Name" name="name" required>
                </div>
                <div class="form-group mb-3">
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Password" name="password" required>
                </div>
                <button>Sign Up</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right" style="background-color:#000000">
                    <h1>Hallo, Kawan!</h1>
                    <p>Masukkan detail pribadi Anda</p>
                    <a href="{{route('login')}}" class="btn" style="    background-color: 	#0000CD;
                    color: #fff;op
                    font-size: 12px;
                    padding: 10px 45px;
                    border: 1px solid transparent;
                    border-radius: 8px;
                    font-weight: 600;
                    letter-spacing: 0.5px;
                    text-transform: uppercase;
                    margin-top: 10px;
                    border-color:;  
                    cursor: pointer" id="register">Login</a>
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
</body>

</html>