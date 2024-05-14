<!-- 663399 -->
<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item" data-item="dashboard">
                <a class="nav-item-hold " href="{{ route('tickets.dashbord')}}">
                    <i class="nav-icon i-Bar-Chart"></i>
                    <span class="nav-text">{{__('Tableau de bord')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="salaries">
                <a class="nav-item-hold " href="#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">{{__('Tickets')}}</span>
                    <span class="new-data-indicator"></span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="clients">
                <a class="nav-item-hold " href="#">
                    <i class="nav-icon i-Business-ManWoman "></i>
                    <span class="nav-text">{{__('Personnel')}}</span>
                    <span class="new-client-indicator"></span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="facture">
                <a class="nav-item-hold " href="#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">{{__('Rapport')}}</span>
                    <span class="new-rapport-indicator"></span>
                </a>
                <div class="triangle"></div>
            </li>


        </ul>
    </div>

    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar data-suppress-scroll-x="true">
        <!-- Submenu Dashboards -->

        <ul class="childNav" data-parent="salaries">
            <li class="nav-item">
                <a href="{{ route('tickets.ajoutTicket')}}">
                    <i class="nav-icon i-Business-ManWoman"></i>
                    <span class="item-name">{{ __(' Ajoute de Ticket') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('tickets.listTicket')}}">
                    <i class="text-16 i-Calendar mr-8"></i>
                    <span class="item-name">{{ __('Listes des Tickets') }}</span>
                </a>
            </li>
          
        </ul>


        <ul class="childNav" data-parent="clients">
            <li class="nav-item">
                <a class="" href="{{ route('client.ajouteClient')}}">
                    <i class="text-16 i-Business-ManWoman mr-8"></i>
                    <span class="item-name">{{ __('Ajoute Personnel') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="{{ route('client.listeClient')}}">
                    <i class="text-16 i-Building mr-8"></i>
                    <span class="item-name">{{ __('Listes des Personnels') }}</span>
                </a>
            </li>
           
        </ul>

        <ul class="childNav" data-parent="facture">
            <li class="nav-item">
                <a href="{{ route('Rapport.ajout_rapport' ) }}">
                    <i class="text-16 i-File-Copy-2 mr-8"></i>
                    <span class="item-name">{{__('Ajoute de rapport')}}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{route('Rapport.list_rapport')}}">
                    <i class="text-16 i-Billing mr-8"></i>
                    <span class="item-name">{{ __('Listes des rapports ') }}</span>
                </a>
            </li>

        </ul>

        <ul class="childNav" data-parent="dashboard">
            <li class="nav-item">
                <a href="{{ route('tickets.dashbord')}}">
                    <i class="text-16 i-Bar-Chart-2 mr-8"></i>
                    <span class="item-name">{{ __('Tableau de bord')}}</span>
                </a>
            </li>
        </ul>

        <ul class="childNav" data-parent="sessions">
            <li class="nav-item">
                <a href="">
                    <i class="nav-icon i-Key"></i>
                    <span class="item-name">{{ __('Role') }}</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="">
                    <i class="text-16 i-Unlock-2 mr-8"></i>
                    <span class="item-name">{{ __('Permission') }}</span>
                </a>
            </li>



    </div>
    <div class="sidebar-overlay"></div>
</div>

<style>
.new-data-indicator {
    position: absolute;
    top: 18%;
    right: 10px;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background-color: red;
    border-radius: 50%;
    display: none;
}

.new-data-indicator.visible {
    display: block;
}

.new-client-indicator {
    position: absolute;
    top: 18%;
    right: 10px;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background-color: red;
    border-radius: 50%;
    display: none;
}

.new-client-indicator.visible {
    display: block;
}

.new-rapport-indicator {
    position: absolute;
    top: 18%;
    right: 10px;
    transform: translateY(-50%);
    width: 10px;
    height: 10px;
    background-color: red;
    border-radius: 50%;
    display: none;
}

.new-rapport-indicator.visible {
    display: block;
}



</style>

<script>
$(document).ready(function() {
    // Fonction pour mettre à jour l'indicateur de nouveau ticket
    function updateNewTicketIndicator() {
        if ({{ session('new_ticket_added') ? 'true' : 'false' }}) {
            $('.new-data-indicator').addClass('visible');
        } else {
            $('.new-data-indicator').removeClass('visible');
        }
    }

    // Fonction pour mettre à jour l'indicateur de nouveau client
    function updateNewClientIndicator() {
        if ({{ session('new_client_added') ? 'true' : 'false' }}) {
            $('.new-client-indicator').addClass('visible');
        } else {
            $('.new-client-indicator').removeClass('visible');
        }
    }

    // Fonction pour mettre à jour l'indicateur de nouveau rapport
    function updateNewRapportIndicator() {
        if ({{ session('new_rapport_added') ? 'true' : 'false' }}) {
            $('.new-rapport-indicator').addClass('visible');
        } else {
            $('.new-rapport-indicator').removeClass('visible');
        }
    }

    // Appels initiaux pour mettre à jour les indicateurs
    updateNewTicketIndicator();
    updateNewClientIndicator();
    updateNewRapportIndicator();

    // Gestionnaire d'événements pour cliquer sur l'indicateur de nouveau ticket
    $('.new-data-indicator').on('click', function() {
        $(this).removeClass('visible');
        {{ session()->forget('new_ticket_added') }};
    });

    // Gestionnaire d'événements pour cliquer sur l'indicateur de nouveau client
    $('.new-client-indicator').on('click', function() {
        $(this).removeClass('visible');
        {{ session()->forget('new_client_added') }};
    });

    // Gestionnaire d'événements pour cliquer sur l'indicateur de nouveau rapport
    $('.new-rapport-indicator').on('click', function() {
        $(this).removeClass('visible');
        {{ session()->forget('new_rapport_added') }};
    });
});

</script>