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
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="clients">
                <a class="nav-item-hold " href="#">
                    <i class="nav-icon i-Business-ManWoman "></i>
                    <span class="nav-text">{{__('Clients')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="facture">
                <a class="nav-item-hold " href="#">
                    <i class="nav-icon i-Windows-2"></i>
                    <span class="nav-text">{{__('Rapport')}}</span>
                </a>
                <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="sessions">
                <a class="nav-item-hold" href="#">
                    <i class="nav-icon i-Gears"></i>
                    <span class="nav-text">{{ __('Accée et securité')}}</span>
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
            <li class="nav-item">
                <a href="">
                    <i class="text-16 i-Calendar mr-8"></i>
                    <span class="item-name">{{ __('Attributions des Tickets') }}</span>
                </a>
            </li>

           
        </ul>


        <ul class="childNav" data-parent="clients">
            <li class="nav-item">
                <a class="" href="{{ route('ajouteClient')}}">
                    <i class="text-16 i-Business-ManWoman mr-8"></i>
                    <span class="item-name">{{ __('Ajoute clients') }}</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="" href="{{ route('listeClient')}}">
                    <i class="text-16 i-Building mr-8"></i>
                    <span class="item-name">{{ __('Listes des clients') }}</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="">
                    <i class="text-16 i-Chrome mr-8"></i>
                    <span class="item-name">{{ __('Technologie') }}</span>
                </a>
            </li>  -->
        </ul>

        <ul class="childNav" data-parent="facture">
            <li class="nav-item">
                <a href="">
                    <i class="text-16 i-File-Copy-2 mr-8"></i>
                    <span class="item-name">{{__('Rapport')}}</span>
                </a>
            </li>
            
            <!-- <li class="nav-item">
                <a href="">
                    <i class="text-16 i-Billing mr-8"></i>
                    <span class="item-name">{{ __('Contrat') }}</span>
                </a>
            </li>
            <li class="nav-item">

                <a href="">
                    <i class="text-16 i-Circular-Point mr-8"></i>
                    <span class="item-name">{{ __('Status Payement') }}</span>
                </a>
            </li> -->
            
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