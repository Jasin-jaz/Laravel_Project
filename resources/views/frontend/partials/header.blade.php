<!-- Topbar Start -->
<div class="container-fluid bg-dark text-white-50 py-2 px-0 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt me-2"></small>
                <small>{{$setting -> mobile}}</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="far fa-envelope-open me-2"></small>
                <small>{{$setting -> email}}</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <ol class="breadcrumb justify-content-end mb-0">
                <li class="breadcrumb-item"><a class="text-white-50 small" href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Terms</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Privacy</a></li>
                <li class="breadcrumb-item"><a class="text-white-50 small" href="#">Support</a></li>
            </ol>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="img-fluid me-3" src="{{asset('backend/img/logo/'.$setting -> logo)}}" alt="">{{$setting -> site_name}}</h1>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light pe-4 py-3 py-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About Us</a>
            <a href="service.html" class="nav-item nav-link">Our Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="contact.html" class="nav-item nav-link">Contact Us</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$setting -> facebook}}"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$setting -> twitter}}"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-2" href="{{$setting -> linkedin}}"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-square rounded-circle bg-light text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</nav>
<!-- Navbar End -->