@extends('layouts.main')

@section('content')
<div style="margin-left: 12%;padding-top: 12%;;">
  
  <section class="section" >

      <h4 class="card-title mb-3">{{ __('Liste des rapports') }}</h4>
      <div class="col-lg-12" style="margin-top: 5%; width:150rem;">
          <div class="card">
              <div class="card-body">
                  <button class="btn btn-primary btn-rounded mb-3">
                  <a href="{{route('Rapport.ajout_rapport')}}" style="color: white;"> <span>{{__('Ajouter un rapport')}}</span></a>                 
                 </button>     
                  <div>
                  @if (session()->has('success'))
                            <div class="alert alert-success">{{ session()->get('success')}}</div>
                        @endif
                    @if ($rapports->isEmpty())
                       <div class="alert alert-info" role="alert">
                           {{ __('Aucun rapport disponible.') }}
                       </div>
                       @else
                    
                      <table class="table table-striped table-hover">
                          <thead>
                              <tr>
                                  <th scope="col">{{__('N° du ticket')}}</th>
                                  <th scope="col">{{__('Action realiser')}}</th>
                                  <th scope="col">{{__('resultat obtenu')}}</th>
                                  <th scope="col">{{__('commentaire ')}}</th>

                                  <th scope="col">{{__('Action')}}</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach($rapports as $rapport)
                              <tr>
                                  <td> {{ $ticket[$rapport->ticket_id ]}}</td>
                                  <td> {{ $rapport->action_realise }}</td>
                                  <td> {{ $rapport->resultat_obtenu }} </td>
                                  <td> {{ $rapport->commentaire_supplementaire }} </td>

                                  <td>
                                    <div class="d-flex justify-content-center">
                                        <a href="/liste_rapport/{{ $rapport->id }}/edit">
                                            <button type="button" class="btn btn-raised btn-rounded btn-raised-primary">
                                                <i class="nav-icon i-Pen-2 font-weight-bold"></i>
                                            </button>
                                        </a>
                                        <form action="{{ route('Rapport.delete_rapport', $rapport->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-raised btn-rounded btn-raised-danger" data-toggle="modal" data-target="#deleteConfirmationModal">
                                                <i class="nav-icon i-Close-Window font-weight-bold"></i>
                                            </button>
                                        </form>
                                    </div>
                                  </td>
                              </tr>
                                

                            @endforeach       
                          </tbody>
                          
                          <!-- Affichage de la pagination -->
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

