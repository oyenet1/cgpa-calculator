<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>register</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="body">
    <div class="container-fluid">
        <div class="row pt-5">
            <div
                class="form col-10 col-sm-8 col-md-6 col-lg-4 offset-1 offset-sm-2 offset-md-3 offset-lg-4 mt-5 rounded">
                <img src="image/Bitmap.png" alt="uniAbujalogo" class="abj rounded-circle mx-auto d-block mt-n5 p-1"
                    style="max-width: 100px; height: auto;">
                <form class="pb-3 my-3" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="text-white mb-0">Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success"><i
                                        class="fas fa-envelope text-white"></i></span>
                            </div>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}">
                        </div>

                        @error('name')
                            <span class="text-danger small">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success"><i
                                    class="fas fa-user-graduate text-light"></i></span>
                        </div>
                        <select name="dept" id="dept" class="form-control">
                            <option value="Computer Science">Computer Science</option>
                            <option value="Mathematics">Mathematics</option>
                            <option value="Statistics">Statistics</option>
                            <option value="Biology">Biology</option>
                            <option value="Physics">Physics</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Micro-biology">Micro-biology</option>
                        </select>
                    </div> --}}

                    <div class="form-group">
                        <label for="email" class="text-white mb-0">Email Address</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success">
                                    <i class="fas fa-lock text-light"></i>
                                </span>
                            </div>
                            <input id="email" type="email" name="email" value=" {{ old('email') ?? '' }}"
                                class="form-control @error('email') is-invalid @enderror">
                        </div>
                        @error('email')
                            <span class="text-danger small p-0 m-0">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password" class="text-white mb-0">Password</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success">
                                    <i class="fas fa-lock text-light"></i>
                                </span>
                            </div>
                            <input id="password" type="password" name="password" value="{{ old('password') ?? '' }}"
                                class="form-control @error('password') is-invalid @enderror">
                        </div>
                        @error('password')
                            <span class="text-danger small p-0 m-0">
                              <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password repeat" class="text-white mb-0">Repeat Password</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-light" id="basic-addon1">
                                    <i class="fas fa-user-lock text-light"></i>
                                </span>
                            </div>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation">
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="submit" value="Create an Account" class="form-control bg-success text-light">
                    </div>
                    <p class="mb-0 text-light text-center">Already a User <a href="{{ route('login') }}" class="text-success">Login
                            Here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
