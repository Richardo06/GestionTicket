@extends('layouts.main')

@section('content')
<div style="margin-left: 12%; padding-top: 12%;">
    <section class="section">
        <h4 class="card-title mb-6">{{ __('Tableau de bord') }}</h4>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body" style="width: 80rem; display: flex;">

                    <div class="card bg-primary text-white mb-3"
                        style="max-width: 18rem; height: 100px; width: 30%; margin-right: 18px;">
                        <div class="card-body">
                            <h1 class="card-number" style="color: white;">{{ $nombreTickets }}</h1>
                            <p class="card-text">Nombre des Tickets</p>
                        </div>
                    </div>

                    <div class="card bg-danger text-white mb-3"
                        style="max-width: 18rem; height: 100px; width: 30%; margin-right: 18px;">
                        <div class="card-body">
                            <h1 class="card-number" style="color: white;">{{ $nombreClients }}</h1>
                            <p class="card-text">Nombre des clients</p>
                        </div>
                    </div>

                    <div class="card bg-success text-white mb-3"
                        style="max-width: 18rem; height: 100px; width: 30%; margin-right: 18px;">
                        <div class="card-body">
                            <h1 class="card-number" style="color: white;">{{ $nombreUsers }}</h1>
                            <p class="card-text">Nombre des Users</p>
                        </div>
                    </div>
                </div>

                <div class="card-body" style="width: 80rem; display: flex;">

                    <div class="card bg-info text-white mb-3"
                        style="max-width: 18rem; height: 100px; width: 30%; margin-right: 18px;">
                        <div class="card-body">
                            <h1 class="card-number" style="color: white;">{{ $nombreTicketsTermines }}</h1>
                            <p class="card-text">Nombre de Tickets terminés</p>
                        </div>
                    </div>

                    <!-- Nouvelle carte pour le nombre de tickets en cours -->
                    <div class="card bg-dark text-white mb-3"
                        style="max-width: 18rem; height: 100px; width: 30%; margin-right: 18px;">
                        <div class="card-body">
                            <h1 class="card-number" style="color: white;">{{ $nombreTicketsEnCours }}</h1>
                            <p class="card-text">Nombre de Tickets en cours</p>
                        </div>
                    </div>

                </div>

            </div>



            <div class="row mt-4">

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title border-bottom pb-2">Derniers tickets</h5>
                            <ul class="list-group list-group-flush">
                                @foreach($lastFiveTickets as $ticket)
                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col-3"><strong>ID:</strong> {{ $ticket->id }}</div>
                                        <div class="col-4"><strong>Direction du service:</strong>
                                            {{ $ticket->directionService }}</div>
                                        <div class="col-5"><strong>Description:</strong> {{ $ticket->description }}
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card" style="margin-top: 20px;">
                        <div class="card-body">
                            <h5 class="card-title mb-3">{{ __('Graphique') }}</h5>
                            <canvas id="monthlyTicketChart" width="400" height="400"></canvas>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
</div>


<script>
    var ctx = document.getElementById('monthlyTicketChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($months) !!},
            datasets: [{
                label: 'Nombre de tickets créés',
                data: {!! json_encode($ticketCounts) !!},
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

@endsection