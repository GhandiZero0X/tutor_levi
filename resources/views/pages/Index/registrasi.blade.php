@extends('Layout.app')

@section('registrasi')
    <!-- Section: Design Block -->
    <section class="registrasi-section">
        <!-- Jumbotron -->
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: hsl(0, 0%, 96%)">
            <div class="container">
                <div class="row gx-lg-5 align-items-center">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <div class="my-3 mx-auto center-content">
                            <div class="px-3 ms-xl-2 text-center">
                                <i class="fas fa-crow fa-2x me-3 pt-3 mt-xl-2"></i>
                                <h1 class="fw-bold mb-0">StudyBuddy</h1>
                            </div>
                        </div>
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="card">
                            <div class="card-body py-5 px-md-5">
                                <form action="{{ route('submitRegister') }}" method="POST">
                                    @csrf
                                    <!-- Nama -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input type="text" id="nama"
                                            class="form-control @error('NAMA') is-invalid @enderror" name="NAMA"
                                            value="{{ old('NAMA') }}" />
                                        @error('NAMA')
                                            <span class="bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- NIS -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nis">NIS</label>
                                        <input type="text" id="nis" name="NIS"
                                            class="form-control @error('NIS') is-invalid @enderror"
                                            value="{{ old('NIS') }}" />
                                        @error('NIS')
                                            <span class="bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Alamat -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="alamat">Alamat</label>
                                        <textarea id="alamat" class="form-control @error('ALAMAT') is-invalid @enderror" rows="3" name="ALAMAT">{{ old('ALAMAT') }}</textarea>
                                        @error('ALAMAT')
                                            <span class="bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Alamat Email</label>
                                        <input type="email" id="email"
                                            class="form-control @error('EMAIL') is-invalid @enderror" name="EMAIL"
                                            value="{{ old('EMAIL') }}" />
                                        @error('EMAIL')
                                            <span class="bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password"
                                            class="form-control @error('PASSWORD') is-invalid @enderror" name="PASSWORD" />
                                        @error('PASSWORD')
                                            <span class="bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="dividers d-flex align-items-center my-4"></div>

                                    <!-- Submit button -->
                                    <button type="submit"
                                        class="btn btn-primary btn-block form-control form-control-lg shadow btnr-custom">
                                        Daftar
                                    </button>

                                    <!-- Tombol back -->
                                    <div class="text-center mt-4">
                                        <div class="d-flex justify-content-center">
                                            <a href="{{ route('index') }}"
                                                class="btn btn-primary btn-block form-control form-control-lg shadow btnr-custom">Kembali
                                                ke Login</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
@endsection
