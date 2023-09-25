@extends('layouts.main')


 @section('content')
 <div style="margin-left: 12%;padding-top: 12%;;">
   
   <section class="section" >

       <h4 class="card-title mb-3">{{ __('Liste des clients') }}</h4>
       <div class="col-lg-12" style="margin-top: 5%;">
           <div class="card">
               <div class="card-body">
                   <button class="btn btn-primary btn-rounded mb-3" wire:click="addClient">
                       <span>{{__('Ajouter un(e) client(e)')}}</span>
                   </button>
                   <form wire:submit.prevent="storeClient" class="mb-3">
                       <div class="card">
                           <div class="card-body">
                               <div class="row col-md-12">
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="name" class="form-label">{{__('Name')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="name" name="name" >
                                           @error('name')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="phone" class="form-label">{{__('Phone')}}</label>
                                           <input type="text" class="form-control" id="phone" name="phone" >
                                           @error('phone')
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
                                           <label for="address" class="form-label">{{__('Address')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="address" name="address" >
                                           @error('address')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="postal_code" class="form-label">{{__('Fonction')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="postal_code" name="postal_code" >
                                           @error('postal_code')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="country_id" class="form-label">{{__('Country')}}<span class="text-danger">(*)</span></label>
                                           <select class="form-control" id="country_id" name="country_id" >
                                               <option value="">{{__('Select Country')}}</option>
                                               <option value=""></option>
                                           </select>
                                           @error('country_id')
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
                                           <label for="tva" class="form-label">{{__('tva')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="tva" name="tva" >
                                           @error('tva')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="rcs" class="form-label">{{__('rcs')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="rcs" name="rcs" >
                                           @error('rcs')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="siret" class="form-label">{{__('siret')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="siret" name="siret" >
                                           @error('siret')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   
                               </div>
                               <div class="col-md-12 mt-3 mb-3">
                                   <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">
                                       <span wire:loading wire:target="storeCompany" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                       {{__('Enregister')}}</button>
                                   <button type="button" class="btn btn-danger" wire:click="cancel"> {{__('Annuler')}}</button>
                               </div>

                           </div>
                       </div>

                   </form>


                   
                             

                       <!-- Edit  Modal
                       <div  id="editConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="editConfirmationModalLabel" aria-hidden="true">
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
                       </div> -->
                   
                   <div>
                       <div class="alert alert-info" role="alert">
                           {{ __('Aucun client disponible.') }}
                       </div>
                       
                       <table class="table table-striped table-hover">
                           <thead>
                               <tr>
                                   <th scope="col">{{__('Name')}}</th>
                                   <th scope="col">{{__('Country')}}</th>
                                   <th scope="col">{{__('phone')}}</th>
                                   <th scope="col">{{__('Siret')}}</th>
                                   <th scope="col">{{__('Rcs')}}</th>
                                   <th scope="col">{{__('Date creation')}}</th>
                                   <th scope="col">{{__('Action')}}</th>
                               </tr>
                           </thead>
                           <tbody>
                              
                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>

                                   <td>
                                       <button type="button" class="btn btn-raised btn-rounded btn-raised-primary" ><i class="nav-icon i-Pen-2 font-weight-bold"></i></button>
                                       
                                       <button type="button" class="btn btn-raised btn-rounded btn-raised-danger"  data-toggle="modal" data-target="#deleteConfirmationModal"> <i class="nav-icon i-Close-Window font-weight-bold"></i></button>
                                   </td>
                               </tr>
                           </tbody>
                       </table>
                       <div class="d-flex justify-content-center">
                       </div>
                       
                       <!-- Delete  Modal -->
                       <div wire:ignore.self class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                           <div class="modal-dialog" role="document">
                               <div class="modal-content">
                                   <div class="modal-header">
                                       <h5 class="modal-title" id="deleteConfirmationModalLabel">{{__('Confirm Delete')}}</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                           <span aria-hidden="true">&times;</span>
                                       </button>
                                   </div>
                                   <div class="modal-body">
                                       <p>{{__('Are you sure you want to delete this client?')}}</p>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal"> {{__('Annuler')}}</button>
                                       <button type="button" class="btn btn-danger" wire:click="deleteClientConfirmed">{{__('Delete')}}</button>
                                   </div>
                               </div>
                           </div>
                       </div>

                     
                   </div>
                   <!-- End Default Table Example -->
               </div>
           </div>
       </div>
   </section>
</div>
 @endsection