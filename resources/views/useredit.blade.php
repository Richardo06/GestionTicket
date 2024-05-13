@extends('layouts.main')

@section('content')
<div style="margin-left: 12%;padding-top: 12%;">
    <section class="section">
        <h4 class="card-title mb-3">{{ __('Paramètre du compte') }}</h4>
        <div class="col-lg-12">
            <div class="card-body custom-card">
                <form method="POST" action="{{ route('userupdate') }}"> 
                    @csrf
                    @method('PUT') 

                    <div class="form-group row">
                        <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>
                        <div class="col-md-6">
                            <input id="id" type="text" class="form-control" value="{{ Auth::user()->id }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adresse email') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="created_at" class="col-md-4 col-form-label text-md-right">{{ __('Date de création') }}</label>
                        <div class="col-md-6">
                            <input id="created_at" type="text" class="form-control" value="{{ Auth::user()->created_at }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Enregistrer') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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