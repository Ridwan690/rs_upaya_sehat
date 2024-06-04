<!-- Navbar Start -->
<div class="container-fluid sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Upaya Sehat</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/layanan" class="nav-item nav-link">Layanan</a>
                    <a href="/kamar" class="nav-item nav-link">Tarif Kamar</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="/rawat-inap" class="dropdown-item">Informasi Rawat Inap</a>
                            <a href="/rawat-jalan" class="dropdown-item">Informasi Rawat Jalan</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</button>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<!-- Sign In Modal Start -->
<div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="signInModalLabel">Welcome back!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="mb-4">Sign in to your account to continue</p>
                <form class="sign-up-form form" action="" method="">
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" type="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" id="password" placeholder="Enter your password"
                            required>
                    </div>
                    <div class="mb-3">
                        <a class="link-info forget-link" href="##">Forgot your password?</a>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="rememberMe" required>
                        <label class="form-check-label" for="rememberMe">Remember me next time</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In Modal End -->
