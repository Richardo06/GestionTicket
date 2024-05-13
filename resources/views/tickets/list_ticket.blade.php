@extends('layouts.main')

@section('content')
<div style="margin-left: 12%;padding-top: 12%;;">
  
  <section class="section" >

      <h4 class="card-title mb-3">{{ __('Liste des tickets') }}</h4>
      <div class="col-lg-12" style="margin-top: 5%; width:150rem;">
          <div class="card">
              <div class="card-body">
                  <button class="btn btn-primary btn-rounded mb-3">
                     <a href="{{ route('tickets.ajoutTicket')}}" style="color: white;"> <span>{{__('Ajouter une Ticket')}}</span></a>
                  </button>     
                  <div>
                    @if ($tickets->isEmpty())
                      <div class="alert alert-info" role="alert">
                          {{ __('Aucun ticket disponible.') }}
                      </div>
                      @else
                      
                      <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th scope="col">{{__('ID')}}</th>
                                  <th scope="col">{{__('Direction/Service')}}</th>
                                  <th scope="col">{{__('Description des Pannes')}}</th>
                                  <th scope="col">{{__('Etat')}}</th>
                                  <!-- <th scope="col">{{__('Batiment')}}</th>
                                  <th scope="col">{{__('Numéro de Porte')}}</th>
                                  <th scope="col">{{__('Solution à proposer')}}</th> -->
                                  <th scope="col">{{__('Date creation')}}</th>
                                  <th scope="col">{{__('Utilisateur')}}</th>

                                  <th scope="col">{{__('Action')}}</th>
                              </tr>
                          </thead>
                          <tbody>
                             @forelse ($tickets as $ticket)
                              <tr>
                                  <td> {{ $ticket->id }} </td>
                                  <td> {{ $ticket->directionService }}</td>
                                  <td> {{ $ticket->description }} </td>
                                  <td> {{ $ticket->etat }} </td>
                                  <td> {{ $ticket->created_at->format('Y-m-d H:i:s') }} </td>
                                  <td> {{ $ticket->added_by }} </td>

                                  <td>
                                      <a href="{{route('tickets.consult_ticket', ['id' => $ticket->id])}}"><button type="button" class="btn btn-raised btn-rounded btn-raised-primary" ><i class="nav-icon i-Pen-2 font-weight-bold"></i></button></a> 
                                      <a href="{{route('tickets.editTicket', ['id' => $ticket->id])}}"><button type="button" class="btn btn-raised btn-rounded btn-raised-success" > <i class="nav-icon i-Close-Window font-weight-bold"></i> </button></a> 
                                      
                                    </td>
                              </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Aucun ticket trouvé.</td>
                                </tr>
                            @endforelse                      
                            </div>       
                          </tbody>
                          
                      </table>  
                                   
                      @endif
                      
                </div>
                  <!-- End Default Table Example -->
              </div>
          </div>
      </div>
  </section>
</div>

@endsection