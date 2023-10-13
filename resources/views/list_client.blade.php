@extends('layouts.main')


 @section('content')
 <div style="margin-left: 12%;padding-top: 12%;;">
   
   <section class="section" >

       <h4 class="card-title mb-3">{{ __('Liste des clients') }}</h4>
       <div class="col-lg-12" style="margin-top: 5%;">
           <div class="card">
               <div class="card-body">
                   <button class="btn btn-primary btn-rounded mb-3" >
                       <a href="{{ route('ajouteClient')}}" style="color: white;"><span>{{__('Ajouter un(e) client(e)')}}</span></a>
                   </button>
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
                   @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success')}}</div>
                        @endif
                    @if ($clients->isEmpty())
                       <div class="alert alert-info" role="alert">
                           {{ __('Aucun client disponible.') }}
                       </div>
                       @else
                       
                       <table class="table table-striped table-hover">
                           <thead>
                               <tr>
                                   <th scope="col">{{__('Nom')}}</th>
                                   <th scope="col">{{__('Prénom')}}</th>
                                   <th scope="col">{{__('Email')}}</th>
                                   <th scope="col">{{__('Numéro')}}</th>
                                   <th scope="col">{{__('Fonction')}}</th>
                                   <th scope="col">{{__('Date creation')}}</th>
                                   <th scope="col">{{__('Action')}}</th>
                               </tr>
                           </thead>
                           <tbody>
                              @forelse ($clients as $client)
                              <tr>
                                   <td>{{ $client->nom }}</td>
                                   <td>{{ $client->prenom }}</td>
                                   <td>{{ $client->email }}</td>
                                   <td>{{ $client->numero }}</td>
                                   <td>{{ $client->fonction }}</td>
                                   <td>{{ $client->created_at->format('Y-m-d H:i:s') }}</td>

                                   <td>
                                       <a href="/liste_Client/{{ $client->id }}/edit"><button type="button" class="btn btn-raised btn-rounded btn-raised-primary" ><i class="nav-icon i-Pen-2 font-weight-bold"></i></button></a>
                                       <form action="{{ route('DeletelisteClient', $client->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                       <button type="submit" class="btn btn-raised btn-rounded btn-raised-danger"  data-toggle="modal" data-target="#deleteConfirmationModal"> <i class="nav-icon i-Close-Window font-weight-bold"></i></button>

                                        </form>
                                       

                                    </td>
                               </tr>
                              @empty

                              @endforelse
                               
                           </tbody>
                       </table>
                       @endif
                       <div class="d-flex justify-content-center">
                       </div>
                       
                       <!-- Delete  Modal -->
                        <!-- <div  id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
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