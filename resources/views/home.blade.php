<!DOCTYPE html>
<html>

<head>
    <title>TeacherSpace</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">BLOG GURU</a>

            <button class="navbar-toggler" type="button" data-bs- toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria- expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="#navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <a class="nav-link active" aria-current="page" href='#'>Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            Data
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Guru</a></li>
                            <li><a class="dropdown-item" href="#">Siswa</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>

                <a href="{{ route('logout') }}" class="logout-button">
                    <i class='bx bx-log-out-circle'></i>
                    Keluar
                </a>
                
            </div>
        </div>
    </nav>
    <div class="container">
        <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>
</body>

</html>