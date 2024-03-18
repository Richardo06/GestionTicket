@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6">{{ __('Ticket N°')  . auth()->id() }}</h4>
           <div class="col-lg-12" >
              <div class="card">
                 <div class="card-body"  >
                     <p>{{ __('traitement de ticket N°')  . auth()->id() .' crée par : '  . $ticket->added_by .' le '.$ticket->created_at }}</p>
                     <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                           <div class="btn-group pull-right">
                              <a href="{{route('tickets.traiter_ticket', ['id' => $ticket->id])}} ">
                                 <button type="button" class="btn btn-primary btn-lg" > {{__('Enregistrer')}}</button>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
           </div>
   </section>
</div>
 @endsection

