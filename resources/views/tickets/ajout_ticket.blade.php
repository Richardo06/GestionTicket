@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6" >{{ __('Ajoute de ticket') }}</h4>
       <div class="col-lg-12" >
           <div class="card">
               <div class="card-body"  style="width: 80rem;">
                  
                   <form  class="mb-3" action="" method="POST">
                      @csrf
                      @method('POST')
                               <div class="row col-md-12">
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="Direction/Service" class="form-label">{{__('Direction/Service')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="Direction/Service" name="Direction/Service" >
                                           @error('Direction/Service')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="Description" class="form-label">{{__('Description')}}</label>
                                           <input type="text" class="form-control" id="Description" name="Description" >
                                           @error('Description')
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
                                           <label for="Batiment" class="form-label">{{__('Batiment')}}<span class="text-danger">(*)</span></label>
                                           <select class="form-control" id="Batiment" name="Batiment" >
                                               <option value="">{{__('Select batiment')}}</option>
                                               <option value="">Batiment A</option>
                                               <option value="">Batiment B</option>
                                           </select>
                                           @error('Batiment')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                     
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="NuméroPorte" class="form-label">{{__('Numéro de Porte')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="NuméroPorte" name="NuméroPorte" >
                                           @error('NuméroPorte')
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
                                           <label for="Solutionproposer" class="form-label">{{__('Solution à proposer')}}<span class="text-danger">(*)</span></label>
                                           <textarea name="Solutionproposer" class="form-control" id="Solutionproposer"  ></textarea>
                                           <!-- <input type="text" class="form-control" id="tva" name="tva" > -->
                                           @error('Solutionproposer')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                               </div>
                               <div class="col-md-12 mt-3 mb-3">
                                   <button type="submit" class="btn btn-primary">
                                       <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                       {{__('Enregister')}}</button>
                                   <button type="button" class="btn btn-danger" > {{__('Annuler')}}</button>
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
                   
                   
                       
                       <!-- Delete  Modal -->
                       <!-- <div id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
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
                                       <button type="button" class="btn btn-danger" >{{__('Delete')}}</button>
                                   </div>
                               </div>
                           </div>
                       </div> -->

                     
                   </div>
                   <!-- End Default Table Example -->
               </div>
           </div>
       </div>
   </section>
</div>
 @endsection