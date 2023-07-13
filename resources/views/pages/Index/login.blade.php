@extends('Layout.app')

@section('login')
    <section class="vh-100">
        <div class="container py-5 h-100">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (Session::has('loginError'))
                <div class="alert alert-danger">{{ Session::get('loginError') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="px-5 ms-xl-4">
                <div class="d-flex align-items-center mb-4">
                    <img src="images/logoTitle/logoweb.png" alt="Logo" width="55" height="55" class="mr-2"
                        style="margin-right: 10px;">
                    <span class="h1 fw-bold mb-0">StudyBuddy</span>
                </div>
            </div>

            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 border rounded shadow">
                    <form action="{{ route('submitLogin') }}" method="POST">
                        @csrf
                        <h3 class="fw-bold mb-3 pb-3 text-center pt-4 fs-2">Login Siswa</h3>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Alamat Email</label>
                            <input type="email" id="email" class="form-control" name="EMAIL"
                                value="{{ old('EMAIL') }}" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control" name="PASSWORD" />
                        </div>

                        <!-- Submit button -->
                        <button type="submit"
                            class="btn btn-primary btn-block form-control form-control-lg shadow btn-custom"
                            {{-- onclick="window.location.href='{{ route('home') }}'" --}}>Login</button>
                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">Atau</p>
                        </div>

                        <div class="flex-container">
                            <p>Belum Memiliki Akun?</p>
                            <p><a href="{{ route('registerForms') }}" class="link-info">Daftar Akun</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
