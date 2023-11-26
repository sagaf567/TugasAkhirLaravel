<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SagarRacer</title>
    <!--link Css-->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
</head>
<body>
    <!--Header-->
    <header>
        <!--Navbar-->
        <div class="nav container">
        <!--logo-->
        <a href="#" class="logo">Saga<span>Race</span></a>
        <!--login Btn-->
        <a href="#" class="login">Login</a>
    </div>

    </header>
    <section class="post-header">
        <div class="header-content post-container">
            <a href="{{route('user.index')}}" class="back-home">Back Home</a>
            <h1 class="header-title">{{ $admins->title }}</h1>
            <img src="{{ asset('storage/admins/'.$admins->image) }}" alt="" class="header-img">
        </div>
    </section>

    <section class="post-content post-container">
        <h2 class="sub-heading">{{ $admins->title }}</h2>
        <p class="post-text"> {!! $admins->content !!}</p>
    </section>
    <div class="footer container">
        <p>&#169; SagaRace All Right Reserved</p>
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
                const value = $(this).attr("data-filter");
                if (value == "all") {
                    $(".post-box").show("1000");
                } else {
                    $(".post-box")
                    .not("." + value)
                    .hide("1000");
                    $(".post-box")
                    .filter("." + value)
                    .show("1000");
                    
                }
            });
        
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

