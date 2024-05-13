@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6" >{{ __('Modification de rapport') }}</h4>
       <div class="col-lg-12" >
           <div class="card">
               <div class="card-body"  style="width: 80rem;">
               @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success')}}</div>
                 @endif
                 
                 <form  class="mb-3" action="{{ route('Rapport.update_rapport', $rapport->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row col-md-12">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="ticket_id" class="form-label">{{__('N° du ticket')}}<span class="text-danger">(*)</span></label>
                            <select class="form-control" name="ticket_id" id="ticket_id" value="{{ $rapport->ticket_id }}">
                            <option value="">Sélectionnez un ticket</option>
                                 <option value="{{ $ticket->id }}">{{ $ticket->id }}</option>
                            </select>
                            @error('ticket_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                            
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="action_realise" class="form-label">{{__('Action Réalisée')}}<span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" id="action_realise" name="action_realise" value="{{ $rapport->action_realise }}" >
                                @error('action_realise')
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
                                    <label for="resultat_obtenu" class="form-label">{{__('Résultats Obtenus')}}<span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" id="resultat_obtenu" name="resultat_obtenu" value="{{ $rapport->resultat_obtenu }}">
                                    @error('resultat_obtenu')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="commentaire_supplementaire" class="form-label">{{__('Commentaire supplémentaire')}}<span class="text-danger">(*)</span></label>
                                    <input type="text" class="form-control" id="commentaire_supplementaire" name="commentaire_supplementaire" value="{{ $rapport->commentaire_supplementaire }}">
                                    @error('commentaire_supplementaire')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                            <button type="submit" class="btn btn-primary save_btn">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                {{__('Enregister les modifications')}}
                            </button>
                            <a href=" {{ route('Rapport.list_rapport')}}">
                                <button type="button" class="btn btn-danger" > {{__('Annuler')}}</button>
                            </a>
                        </div>
                    </form>
                        <script>
                            $(document).ready(function() {
                                var pusher = new Pusher('0b5b0f6cf3671e5662c4', {
                                    cluster: 'ap2'
                                });     

                                var channel = pusher.subscribe('my-channel');
                                    channel.bind('my-event', function(data) {
                                    alert(JSON.stringify(data));
                                });
                                    $('.save_btn').on('click', function(e) {
                                        alert(1);
                                });
                            });
                        </script>


                   
                             

                       

                     
                   </div>
                   <!-- End Default Table Example -->
               </div>
           </div>
       </div>
   </section>
</div>
 @endsection

