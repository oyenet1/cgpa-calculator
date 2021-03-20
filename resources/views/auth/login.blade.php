<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>calculate</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/extra.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

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
                <form class="pb-3 my-3" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="email" class="mb-0 text-white">Email:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success">
                                    <i class="fas fa-envelope text-white"></i>
                                </span>
                            </div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}">
                        </div>
                        @error('email')
                            <span class="text-danger small p-1 m-0">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    {{-- <div class="input-group form-group mb-3">
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
                        <label for="password " class="mb-0 text-white">Password:</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success">
                                    <i class="fas fa-lock text-light"></i>
                                </span>
                            </div>
                            <input id="password" type="password" class="form-control text-white @error('password') is-invalid @enderror" placeholder="Enter password" value="{{ old('password') ?? '' }}">
                        </div>
                        @error('password')
                            <span class="text-danger small p-1 m-0">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-check-inline float-right">
                        <label for="pasid" class="form-check-label text-light pb-1">
                            <a href="{{ route('password.email') }}" class="text-success float-right bold">Forget
                                Password</a>
                        </label>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="form-control bg-success text-light">
                    </div>
                    <p class="mb-0 text-light text-center">New User <a href="{{ route('register') }}"
                            class="text-success">Register
                            Here</a></p>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
