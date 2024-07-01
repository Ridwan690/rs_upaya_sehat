@extends('layouts.admin')

@section('content')
<style>
    .register-container {
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 30px;
        display: flex;
        align-items: center;
        margin-top: 50px;
    }

    .register-container img {
        max-width: 100%;
        border-radius: 10px;
        margin-right: 20px;
    }

    .register-form {
        flex: 1;
    }

    .register-form h3 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .show-password-toggle {
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
    }
</style>

<div class="container register-container">
    <div class="row justify-content-center w-100">
        <div class="col-md-5 text-center">
            <img src="{{ asset('img/illustration-paper.png') }}" alt="Register Image">
        </div>
        <div class="col-md-7 register-form">
            <h3 class="text-center">Buat Akun</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" required>
                        <button class="btn btn-outline-secondary" type="button" id="togglePasswordConfirmation">
                            <i class="far fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control" id="role" name="role" required>
                        <option value="superadmin">Superadmin</option>
                        <option value="manajemen">Manajemen</option>
                        <option value="pendaftaran">Pendaftaran</option>
                        <option value="rawat_jalan">Rawat Jalan</option>
                        <option value="rawat_inap">Rawat Inap</option>
                        <option value="dokter">Dokter</option>
                        <option value="perawat">Perawat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        const icon = this.querySelector('i');
        if (type === 'password') {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });

    document.getElementById('togglePasswordConfirmation').addEventListener('click', function () {
        const passwordField = document.getElementById('password_confirmation');
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        const icon = this.querySelector('i');
        if (type === 'password') {
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
</script>
@endsection
