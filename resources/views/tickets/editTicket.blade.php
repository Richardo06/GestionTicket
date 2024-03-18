@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6" >{{ __('Modification de ticket') }}</h4>
       <div class="col-lg-12" >
           <div class="card">
               <div class="card-body"  style="width: 80rem;">
               @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success')}}</div>
                 @endif
                  
                   <form  class="mb-3" action="{{ route('tickets.updateTicket', $ticket->id)}}" method="POST">
                      @csrf
                      @method('PUT')
                               <div class="row col-md-12">
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="directionService" class="form-label">{{__('Direction/Service')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="directionService" name="directionService" value="{{ $ticket->directionService }}" >
                                           @error('directionService')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="description" class="form-label">{{__('Description')}}</label>
                                           <input type="text" class="form-control" id="description" name="description" value="{{  $ticket->description }}">
                                           @error('description')
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
                                           <label for="batiment" class="form-label">{{__('Batiment')}}</label>
                                           <input type="text" class="form-control" id="batiment" name="batiment" value="{{  $ticket->batiment }}">
                                           @error('batiment')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>     
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="numeroPort" class="form-label">{{__('Numéro de Porte')}}<span class="text-danger">(*)</span></label>
                                           <input type="text" class="form-control" id="numeroPort" name="numeroPort" value="{{ $ticket->numeroPort }}">
                                           @error('numeroPort')
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
                                           <label for="solutionProposer" class="form-label">{{__('Solution à proposer')}}<span class="text-danger">(*)</span></label>
                                           <!-- <textarea name="Solutionproposer" class="form-control" id="solutionProposer"  ></textarea> -->
                                           <input type="text" class="form-control" id="solutionProposer" name="solutionProposer" value="{{ $ticket->solutionProposer }}" style="height: 5rem;">
                                           @error('solutionProposer')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                               </div>
                               <div class="col-md-12 mt-3 mb-3">
                                   <button type="submit" class="btn btn-primary">
                                       <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                       {{__('Enregister les modifications')}}</button>
                                   <a href=" {{ route('tickets.listTicket')}}"><button type="button" class="btn btn-danger" > {{__('Annuler')}}</button></a>
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

 