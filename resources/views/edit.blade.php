@extends('layouts.main')



@section('content')
<div style="margin-left: 12%;padding-top: 12%;;">
  
  <section class="section" >

      <h4 class="card-title mb-3">{{ __('Modification des clients') }}</h4>
      <div class="col-lg-12" >
          @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success')}}</div>
          @endif
                 <form class="mb-3" action="{{ route('UpdatelisteClient', $client->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="card">
                          <div class="card-body" style="width: 80rem;">
                              <div class="row col-md-12">
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="nom" class="form-label">{{__('Nom')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="nom" name="nom" value="{{ $client->nom }}">
                                          @error('nom')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="prenom" class="form-label">{{__('Prénom')}}</label>
                                          <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $client->prenom }}">
                                          @error('prenom')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                              </div>
                              <div class="row col-md-12">

                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="email" class="form-label">{{__('Email')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="email" name="email" value="{{ $client->email }}">
                                          @error('email')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="numero" class="form-label">{{__('Numéro')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="numero" name="numero" value="{{ $client->numero }}">
                                          @error('numero')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  
                              </div>
                              <div class="row col-md-12">
                                  <div class="col-md-4">
                                      <div class="mb-3">
                                          <label for="fonction" class="form-label">{{__('Fonction')}}<span class="text-danger">(*)</span></label>
                                          <input type="text" class="form-control" id="fonction" name="fonction" value="{{ $client->fonction }}">
                                          @error('fonction')
                                          <div class="alert alert-danger" role="alert">
                                              {{ $message }}
                                          </div>
                                          @enderror
                                      </div>
                                  </div>
                                  
                                  
                              </div>
                              <div class="col-md-12 mt-3 mb-3">
                                  <button type="submit" class="btn btn-primary" >
                                      <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                      {{__('Enregister les modifications')}}</button>
                                  <a href="{{ route('listeClient')}}"><button type="button" class="btn btn-danger" > {{__('Annuler')}}</button></a>
                              </div>

                          </div>
                      </div>

                  </form>
                      <!-- Edit  Modal -->
                      <!-- <div  id="editConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editConfirmationModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="editConfirmationModalLabel">{{__('Confirmation')}}</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <p>{{__('Est vous sur de vouloir effectuez ce modification?')}}</p>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{__('Annuler')}}</button>
                                      <button type="submit" class="btn btn-primary" >{{__('Confirm')}}</button>
                                  </div>
                              </div>
                          </div>
                      </div>  -->
                  
                  <!-- End Default Table Example -->
              
      </div>
  </section>
</div>
@endsection