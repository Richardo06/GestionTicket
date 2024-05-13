
@extends('layouts.main')

@section('content')
<div style="margin-left: 12%;padding-top: 12%;">
    <section class="section">
        <h4 class="card-title mb-3">{{ __('Nouveau compte') }}</h4>
        <div class="col-lg-12">
        <div class="" style="margin:0 7% 0 7%;">
        <div class="auth-content">
            <div class="card o-hidden">
                <div class="row">
                    <div class="col-md">
                        <div class="p-4">
                            
                            <h1 class="mb-3 text-18">S'inscrire</h1>
                            
                            <form method="POST" action="{{ route('Auth.inscription') }}">
								@csrf
                                @method('post')
                                <div class="form-group">
                                    <label for="nomprenom">Nom et Prénom</label>
                                    <input id="nomprenom" name="nomprenom" class="form-control form-control-rounded @error('nomprenom') is-invalid @enderror" value="{{ old('nomprenom') }}" type="text">
									@error('nomprenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                	@enderror
                                </div>
                                
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
                                <button class="btn btn-rounded btn-primary ">inscription</button>
                                <button class="btn btn-rounded btn-danger " ><a href="{{ route('usersettings')}}"style="color:white;">Annuler</a></button>

                            </form> 
                            <div class="mt-3 text-center">
                            

                                <!-- <div class="mt-3 text-center">
                                    <a href="{{ route('Auth.index') }}" class="text-muted"><u>Déjà un compte ? connceter-vous</u></a>
                                </div>                             -->
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
    </section>
</div>

<Style>
    .custom-card {
        box-shadow: 2px 3px 5px 3px rgba(0, 0, 0, 0.1);
        background-color: #ffff; 
        border-radius: 8px;
        padding: 20px; 
    }
</Style>
@endsection