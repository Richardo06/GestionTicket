@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6">{{ __('Consultation de ticket N°')  . auth()->id() }}</h4>
           <div class="col-lg-12" >
              <div class="card">
                 <div class="card-body"  >
                     <table class="table table-striped md-5">
                        <tr>
                            <td>Direction du service</td>
                            <td>{{ $ticket->directionService }}</td>
                        </tr>
                        <tr>
                            <td>Description du panne</td>
                            <td>{{ $ticket->description }}</td>
                        </tr>
                        <tr>
                            <td>Etat</td>
                            <td>{{ $ticket->etat }}</td>
                        </tr>
                        <tr>
                            <td>Batiment</td>
                            <td>{{ $ticket->batiment }}</td>
                        </tr>
                        <tr>
                            <td>Numéro de porte</td>
                            <td>{{ $ticket->numeroPort }}</td>
                        </tr>
                        <tr>
                            <td>Solution à proposer</td>
                            <td>{{ $ticket->solutionProposer }}</td>
                        </tr>
                        <tr>
                            <td>Créer le :</td>
                            <td>{{ $ticket->created_at }}</td>
                        </tr>
                        <tr>
                            <td>Créer par</td>
                            <td>{{ $ticket->consulted_by }}</td>
                        </tr>
                    </table>
                    
                        <!-- <div class="col-md-12 mt-3 mb-3">
                            <a href="{{route('tickets.traiter_ticket', ['id' => $ticket->id])}} "><button type="button" class="btn btn-primary btn-lg" > {{__('traiter')}}</button></a>
                        </div> -->
                        @if($ticket->etat !== 'Terminé')
                            <div class="col-md-12 mt-3 mb-3">
                                <a href="{{ route('tickets.traiter_ticket', ['id' => $ticket->id]) }}">
                                    <button type="button" class="btn btn-primary btn-lg">{{ __('traiter') }}</button>
                                </a>
                            </div>
                        @endif
                        <!-- @if(Auth::check() && Auth::user()->id === $ticket->consulted_by)
                            <a href="{{ route('tickets.traiter_ticket', ['id' => $ticket->id]) }}">
                                <button type="button" class="btn btn-primary btn-lg">{{__('traiter')}}</button>
                            </a>
                        @endif -->
                 </div>
               </div>
           </div>
   </section>
</div>
 @endsection

