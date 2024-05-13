@extends('layouts.main')


@section('content')

<div  style="margin-left: 12%;padding-top: 12%;;">
 <section class="section"  >

       <h4 class="card-title mb-6" >{{ __('Ajoute de ticket') }}</h4>
       <div class="col-lg-12" >
           <div class="card">
               <div class="card-body"  style="width: 80rem;">
               @if (session()->has('success'))
                <div class="alert alert-success">{{ session()->get('success')}}</div>
                 @endif
                  
                   <form  class="mb-3" action="{{ route('tickets.store')}}" method="POST">
                      @csrf
                      @method('POST')
                               <div class="row col-md-12">
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="directionService" class="form-label">{{__('Direction/Service')}}<span class="text-danger">(*)</span></label>
                                           <select class="form-control" id="directionService" name="directionService">
                                        <option value="" disabled selected>Choisissez une direction/service</option>
                                        <option value="Ministre"
                                            {{ old('directionService') == 'Ministre' ? 'selected' : '' }}>Ministre
                                        </option>
                                        <option value="CAB" {{ old('directionService') == 'CAB' ? 'selected' : '' }}>CAB
                                        </option>
                                        <option value="PRMP" {{ old('directionService') == 'PRMP' ? 'selected' : '' }}>
                                            PRMP</option>
                                        <option value="UCP" {{ old('directionService') == 'UCP' ? 'selected' : '' }}>UCP
                                        </option>
                                        <option value="UFP" {{ old('directionService') == 'UFP' ? 'selected' : '' }}>UFP
                                        </option>
                                        <option value="UCOM" {{ old('directionService') == 'UCOM' ? 'selected' : '' }}>
                                            UCOM</option>
                                        <option value="USOR" {{ old('directionService') == 'USOR' ? 'selected' : '' }}>
                                            USOR</option>
                                        <option value="UCA" {{ old('directionService') == 'UCA' ? 'selected' : '' }}>UCA
                                        </option>
                                        <option value="SG" {{ old('directionService') == 'SG' ? 'selected' : '' }}>SG
                                        </option>
                                        <option value="DGES" {{ old('directionService') == 'DGES' ? 'selected' : '' }}>
                                            DGES</option>
                                        <option value="DGP" {{ old('directionService') == 'DGP' ? 'selected' : '' }}>DGP
                                        </option>
                                        <option value="UCG" {{ old('directionService') == 'UCG' ? 'selected' : '' }}>UCG
                                        </option>
                                        <option value="DAAF" {{ old('directionService') == 'DAAF' ? 'selected' : '' }}>
                                            DAAF</option>
                                        <option value="DRH" {{ old('directionService') == 'DRH' ? 'selected' : '' }}>DRH
                                        </option>
                                        <option value="DPE" {{ old('directionService') == 'DPE' ? 'selected' : '' }}>DPE
                                        </option>
                                        <option value="DEMC" {{ old('directionService') == 'DEMC' ? 'selected' : '' }}>
                                            DEMC</option>
                                        <option value="DSI" {{ old('directionService') == 'DSI' ? 'selected' : '' }}>DSI
                                        </option>
                                        <option value="DPFI" {{ old('directionService') == 'DPFI' ? 'selected' : '' }}>
                                            DPFI</option>
                                        <option value="DAJ" {{ old('directionService') == 'DAJ' ? 'selected' : '' }}>DAJ
                                        </option>
                                        <option value="DEO" {{ old('directionService') == 'DEO' ? 'selected' : '' }}>DEO
                                        </option>
                                        <option value="DES" {{ old('directionService') == 'DES' ? 'selected' : '' }}>DES
                                        </option>
                                        <option value="DENF" {{ old('directionService') == 'DENF' ? 'selected' : '' }}>
                                            DENF</option>
                                        <option value="DExamC"
                                            {{ old('directionService') == 'DExamC' ? 'selected' : '' }}>DExamC</option>
                                        <option value="DCRP" {{ old('directionService') == 'DCRP' ? 'selected' : '' }}>
                                            DCRP</option>
                                        <option value="DESIP"
                                            {{ old('directionService') == 'DESIP' ? 'selected' : '' }}>DESIP</option>
                                        <option value="DFP" {{ old('directionService') == 'DFP' ? 'selected' : '' }}>DFP
                                        </option>
                                        <option value="DDIS" {{ old('directionService') == 'DDIS' ? 'selected' : '' }}>
                                            DDIS</option>
                                    </select>                                           
                                            @error('directionService')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="mb-3">
                                           <label for="description" class="form-label">{{__('Description des Pannes')}}</label>
                                           <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
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
                                           <select class="form-control" id="batiment" name="batiment">
                                        <option value="" disabled selected>Choisissez un bâtiment</option>
                                        <option value="A" {{ old('batiment') == 'A' ? 'selected' : '' }}>A</option>
                                        <option value="B" {{ old('batiment') == 'B' ? 'selected' : '' }}>B</option>
                                        <option value="C" {{ old('batiment') == 'C' ? 'selected' : '' }}>C</option>
                                    </select>
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
                                           <input type="text" class="form-control" id="numeroPort" name="numeroPort" value="{{ old('numeroPort') }}">
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
                                           <input type="text" class="form-control" id="solutionProposer" name="solutionProposer" value="{{ old('solutionProposer') }}" style="height: 5rem;">
                                           @error('solutionProposer')
                                           <div class="alert alert-danger" role="alert">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                       </div>
                               </div>
                               <div class="col-md-12 mt-3 mb-3">
                                   <button type="submit" class="btn btn-primary save_btn">
                                       <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                       {{__('Enregister')}}</button>
                                   <a href=" {{ route('tickets.listTicket')}}"><button type="button" class="btn btn-danger" > {{__('Annuler')}}</button></a>
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

