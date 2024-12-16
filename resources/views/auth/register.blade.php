<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url({{ asset('frontend/images/bbg.jpg') }});
        }
    </style>
    <title>Register</title>
</head>

<body>
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-5 m-auto">
                <div class="card border-0" style="background-color: rgba(255, 255, 255, 0.7); border-radius: 20px;">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ asset('frontend/images/nang.png') }}" class="rounded-circle mb-3"
                                alt="" height="160">
                            <h3 class="mb-3">{{ __('Register') }}</h3>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="my-4 py-2">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" placeholder="Name"
                                    autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="my-4 py-2">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="my-4 py-2">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="my-4 py-2">
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm Password">
                            </div>

                            <div class="text-center">
                                <!-- Trigger Modal -->
                                <button type="button" id="openTokenModal" class="btn btn-primary mt-3">
                                    {{ __('Register') }}
                                </button>
                                <div class="mt-3">
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Back to Login</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tokenModal" tabindex="-1" aria-labelledby="tokenModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tokenModalLabel">Inputkan Token</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="registrationToken" class="form-control" placeholder="Enter Token">
                    <div id="tokenError" class="text-danger mt-2" style="display: none;">Token Anda Tidak Valid!<div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" id="validateTokenBtn" class="btn btn-primary">Validasi</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const validToken = "izunaaja";
                const openTokenModal = document.getElementById('openTokenModal');
                const validateTokenBtn = document.getElementById('validateTokenBtn');
                const tokenModal = new bootstrap.Modal(document.getElementById('tokenModal'));
                const registrationToken = document.getElementById('registrationToken');
                const tokenError = document.getElementById('tokenError');
                const registerForm = document.querySelector('form');

                // Open modal when clicking the register button
                openTokenModal.addEventListener('click', function() {
                    tokenModal.show();
                });

                // Validate token
                validateTokenBtn.addEventListener('click', function() {
                    if (registrationToken.value === validToken) {
                        tokenError.style.display = 'none';
                        tokenModal.hide();
                        registerForm.submit();
                    } else {
                        tokenError.style.display = 'block';
                    }
                });
            });
        </script>
</body>

</html>
