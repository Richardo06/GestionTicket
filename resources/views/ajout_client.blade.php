@extends('layouts.main')



@section('content')
<div style="margin-left: 12%;padding-top: 12%;;">
  
  <section class="section" >
  @if (session()->has('success'))
            <div class="alert alert-success">{{ session()->get('success')}}</div>
        @endif
      <h4 class="card-title mb-3">{{ __('Ajoute des clients') }}</h4>
      <div class="col-lg-12" >
      
                  <form class="mb-3" method="POST" action="{{ route('client.ajouteClient')}}">
                        @method('post')
                        @csrf
                      <div class="card">
                          <div class="card-body" style="width: 80rem;">
                              <div class="row col-md-12">
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="nom" class="form-label">{{__('Nom')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom') }}">
                                          @error('nom')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $messages }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="prenom" class="form-label">{{__('Prénom')}}</label>
                                          <input type="text" class="form-control" id="prenom" name="prenom" value="{{ old('prenom') }}">
                                          @error('prenom')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $messages }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="row col-md-12">

                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="email" class="form-label">{{__('Email')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                          @error('email')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $messages }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="numero" class="form-label">{{__('Numéro')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="numero" name="numero" value="{{ old('numero') }}">
                                          @error('numero')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $messages }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="row col-md-12">
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="fonction" class="form-label">{{__('Fonction')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="fonction" name="fonction" value="{{ old('fonction') }}">
                                          @error('fonction')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $messages }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  
                                  
                              </div>
                              <div class="col-md-12 mt-3 mb-3">
                                  <button type="submit" class="btn btn-primary" >{{__('Enregister')}}</button>
                                <a href="{{ route('client.listeClient')}}"><button type="button" class="btn btn-danger" > {{__('Annuler')}}</button></a>
                              </div>

                          </div>
                      </div>

                  </form>
                      
                  <!-- End Default Table Example -->
              
      </div>
  </section>
</div>
@endsection