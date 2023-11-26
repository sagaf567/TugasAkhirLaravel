<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OtomotifNet</title>
    <!--link Css-->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
      <!-- Bootstrap icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        body {
         font-family: sans-serif;
        }
        
        /* Add WA floating button CSS */
        .floating {
         position: fixed;
         width: 60px;
         height: 60px;
         bottom: 40px;
         right: 40px;
         background-color: #25d366;
         color: #fff;
         border-radius: 50px;
         text-align: center;
         font-size: 30px;
         box-shadow: 2px 2px 3px #999;
         z-index: 100;
        }
        
        .fab-icon {
         margin-top: 16px;
        }
        </style>
        
        <!-- render the button and direct it to wa.me -->
        <a href="https://wa.me/6285939332067?text=Hi%20Qiscus" class="floating" target="_blank">
        <i class="fab fa-whatsapp fab-icon"></i>
        </a>
</head>
<body>
    <!--Header-->
    <header>
        <!--Navbar-->
        <div class="nav container">
        <!--logo-->
        <a href="#" class="logo">Otomotif<span>Net</span></a>
        <!--login Btn-->
        <a href="{{route('login')}}" class="login">Login</a>
    </div>

    </header>
    <section class="home" id="home">
        <div class="home-text container">
            <h2 class="home-title">Panduam Otomotif Anda</h2>
            <span class="home-subtitle">Baca berita otomotif terlengkap hanya disini</span>
        </div>
    </section>
    <section class="post container">
        @forelse ($admins as $admin)
        <div class="post-box">
            <img src="{{ asset('/storage/admins/' . $admin->image) }}" alt="" class="post-img">
            <h2 class="category"></h2>
            <a href="" class="post-title">{{ $admin->title }}</a>
            <a href="{{ route('user.show', $admin->id) }}" class="btn btn-primary">Baca Artikel</a>
        </div>
        @empty
        <p class="text-center">Tidak ada data admin.</p>
    @endforelse
    </section>
    <div class="footer container">
        <p>&#169; Sagaf All Right Reserved</p>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!--link JS-->
    <script>// filter js
        $(document).ready(function() {
            $(".filter-item").click(function () {
                $(this).addClass("active-filter").siblings().removeClass("active-filter");
            });
        });
        
        let header = document.querySelector("header");
        
        window.addEventListener("scroll", () => {
            header.classList.toggle("shadow", window.scrollY > 0);
        });
        </script>
</body>
</html>