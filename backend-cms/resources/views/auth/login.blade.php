<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{ config('app.name') }}</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
          <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<style>
</style>

<body class="hold-transition">
    <div class="row">
        <div class="logo-login col-md-6">
            <div class="logo-login-row">
                <img class="logo-img-login" src="{{asset('img/assets/logo.png')}}" />
            </div>
        </div>
        <div class="logo-login-2 col-md-6">
            <div class="logo-login-row-2">
                <img class="logo-login-img-2" src="{{asset('img/assets/Blobs.png')}}" />
            </div>
        </div>    
    </div>
    <div class="row">
        <div class="col-10">
            <div class="login-box">
                <div class="card">
                    <div class="login-logo">
                        <!-- <a href="{{ url('/home') }}"><b>{{ config('app.name') }}</b></a> -->
                        <h1>Welcome Back!</h1>
                    </div>
                    <div class="row">
                        <div class="login-box">
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
                            <div class="form-group login">
                                <label>Email</label>
                                <input type="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    aria-describedby="emailHelp"
                                    name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group login @error('password') is-invalid @enderror">
                                <label >Password</label>
                                <input type="password" 
                                    class="form-control" 
                                    name="password">
                                @error('password')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="row" style="margin: 10% 0;">
                                <!-- <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember Me</label>
                                    </div>
                                </div> -->
                                <div class="col">
                                    <button type="submit" class="btn-login btn btn-primary btn-block">Sign In</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </body>
</html>
