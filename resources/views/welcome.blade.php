<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasima Akter - Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <header>
        <nav id="navbar-main" class="navbar navbar-expand-lg navbar-light bg-info fixed-top shadow-sm">
            <div class="container">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list slide_bar" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
                <a class="navbar-brand" href="#">NASIMA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#home">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#hobbies">Hobbies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="home" class="container section-padding">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="content-box">
                        <h1 class="hero-title">Hello,</h1>
                        <h1>I'm Nasima Akter.</h1>
                        <p class="lead">I am a Student.</p>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <div class="content-box">
                        <img src="{{asset('assets/image/nasima.jpg')}}" alt="Nasima Akter" class="img-fluid rounded-circle border border-primary border-3" style="max-width: 380px;">
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="bg-light section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="content-box h-100 p-4 border rounded shadow-sm">
                            <h2 class="mb-3">Myself</h2>
                            <p>I am a passionate web developer with a love for creating beautiful websites. I enjoy learning new technologies and continuously improving my skills.</p>
                            <a href="#" class="btn btn-primary">
                                <i class="fa-solid fa-download me-2"></i>Download CV
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="hobbies" class="content-box h-100 p-4 border rounded shadow-sm">
                            <h2 class="mb-3">Hobbies</h2>
                            <ul>
                                <li>Reading Books</li>
                                <li>Coding</li>
                                <li>Traveling</li>
                                <li>Photography</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="skills" class="section-padding">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold">Skills</h2>
                    <p class="text-muted">Here are my skills.</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <span>HTML</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                            </div>
                        </div>
                         <div class="mb-3">
                            <span>CSS & Bootstrap</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <span>JavaScript</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div>
                        </div>
                         <div class="mb-3">
                            <span>PHP & MySQL</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">40%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="bg-light section-padding">
            <div class="container">
                <div class="text-center">
                    <h2 class="fw-bold">Contact</h2>
                    <p class="mb-4">Feel free to contact with me!</p>
                    <div class="social-icons">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-facebook-messenger"></i></a>
                        <a href="#" class="social-icon"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-center py-4 bg-dark text-white">
        <div class="container">
            <p class="mb-0">Copyright &copy; 2025 - Nasima Akter</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>