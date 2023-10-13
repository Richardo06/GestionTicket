<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="assets/styles/css/themes/lite-purple.min.css">
</head>

<body class="text-left">
    <div class="auth-layout-wrap">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md-12">
                        <div class="p-4">
                            <div class="auth-logo text-center mb-4">
                            
                                <img src="{{ asset('assets/images/logo.png') }}"style="width: 100px; height: 100px;" alt="">
                            </div>
                            <div class="card-body"  style="width: 38rem;">
                                @if (session()->has('success'))
                                    <div class="alert alert-success">{{ session()->get('success')}}</div>
                                @endif
                                @if (session()->has('error'))
                                    <div class="alert alert-danger">{{ session()->get('error')}}</div>
                                @endif
                            <h1 class="mb-3 text-18">S'identifier</h1>
                            
                            <form method="POST" action="{{ route('Auth.store') }}">
								@csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="email">Adresse e-mail</label>
                                    <input id="email" name="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" value="{{ old('email') }}" type="email">
									@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Mot de passe</label>
                                    <input id="password" name="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" type="password">
									@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                                <button class="btn btn-rounded btn-primary btn-block mt-2">S'identifier</button>

                            </form>

                            <div class="mt-3 text-center">
                                <a href="#" class="text-muted"><u>Mot de passe oublié ?</u></a>
                            </div>
                            <div class="mt-3 text-center">
                                <a href=" {{ route('Auth.inscription')}} " class="text-muted"><u>s'inscrire !</u></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/es5/script.min.js"></script>
</body>

</html>