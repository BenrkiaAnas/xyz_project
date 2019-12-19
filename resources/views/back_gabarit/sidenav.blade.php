<div class="am-sideleft">

    <div class="tab-content">
        @if (!in_array("CaptureData",$disabled))
            <div id="statistics" class="tab-pane {{$value == 'statistic' ? 'active' : ''}} ps ps--theme_default ps--active-y in" data-ps-id="8bc5bf47-8645-5bef-5d19-7f15339ed6f0">
                <ul class="nav am-sideleft-menu">

                    <li class="nav-item"><a href="{{url("/statistic/temp")}}" class="nav-link stat">{{ __('Rapport de Température') }}</a></li>
                    <li class="nav-item"><a href="{{url("/statistic/humid")}}" class="nav-link stat">{{ __('Rapport d\'Humidité') }}</a></li>
                    <li class="nav-item"><a href="{{url("/statistic/alerts")}}" class="nav-link stat">{{ __('Rapport des Alertes') }}</a></li>
                    <li class="nav-item"><a href="{{url("/statistic/capture")}}" class="nav-link stat">Captured Data</a></li>
                </ul>
            </div>
        @endif
        <!-- -------------------- Startistics ------------------------------------------------>
        <!-- #mainMenu -->
        <!-- -------------------- Endistics ------------------------------------------------>
        <!-- -------------------- Startistics ------------------------------------------------>
        <!----><!-- #mainMenu -->
        <!-- -------------------- Endistics ------------------------------------------------>
        <!-- -------------------- Start locations ------------------------------------------------>
        <!-- #mainMenu -->
        <!-- -------------------- End locations ------------------------------------------------>
        <!-- -------------------- Start boxes ------------------------------------------------>
        ><!-- #mainMenu -->
        <!-- -------------------- End boxes ------------------------------------------------>
        <!-- -------------------- Start erts ------------------------------------------------>
        <div id="eters" class="tab-pane {{$value == 'parameter' ? 'active' : ''}}  ps ps--theme_default ps--active-y " >
            <ul class="nav am-sideleft-menu">
                @if (!in_array("Location",$disabled))
                    <li class="nav-item">
                        <a href="" class="nav-link with-sub">
                            <i class="fa fa-map-marker  tx-24"></i>
                            <span>{{ __('Emplacements') }}</span>
                        </a>
                        <ul class="nav-sub" style="display: none;">
                            @if (!in_array("Location",$disabl_Consult))
                                <li class="nav-item"><a href="{{url('/location/index')}}" class="nav-link param">{{ __('Nouvel Emplacement') }}</a></li>
                            @endif
                            <li class="nav-item"><a href="{{ url('/locations') }}" class="nav-link param">{{ __('Liste des Emplacements') }}</a></li>
                        </ul>
                    </li>
                @endif


                @if (!in_array("Boxe",$disabled))
                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-archive tx-24"></i>
                                <span>{{ __('Boitiers') }}</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                @if (!in_array("Boxe",$disabl_Consult))
                                    <li class="nav-item"><a href="{{url('/boxes/create')}}" class="nav-link param">{{ __('Nouveau Boitier') }}</a></li>
                                @endif
                                <li class="nav-item"><a href="{{ url('/boxes') }}" class="nav-link param">{{ __('Liste des Boitiers') }}</a></li>
                            </ul>
                        </li>
                    @endif

                    @if (!in_array("Sensor",$disabled))
                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-thermometer-three-quarters tx-24"></i>
                                <span>{{ __('Capteurs') }}</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                @if (!in_array("Sensor",$disabl_Consult))
                                    <li class="nav-item"><a href="{{url('/sensors/create')}}" class="nav-link param">{{ __('Nouveau Capteur') }}</a></li>
                                @endif
                                <li class="nav-item"><a href="{{ url('/sensors') }}" class="nav-link param">{{ __('Liste des Capteurs') }}</a></li>
                            </ul>
                        </li>

                    @endif

                    @if (!in_array("User",$disabled))
                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-user tx-24"></i>
                                <span>{{ __('Utilisateurs') }}</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                @if (!in_array("User",$disabl_Consult))
                                    <li class="nav-item"><a href="{{url('/user/index')}}" class="nav-link param">{{ __('Nouvel Utilisateur') }}</a></li>
                                @endif
                                <li class="nav-item"><a href="{{ url('/users') }}" class="nav-link param">{{ __('Liste des Utilisateurs') }}</a></li>
                            </ul>
                        </li>
                    @endif

                    @if (!in_array("Alerte",$disabled))
                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-bell tx-24"></i>
                                <span>{{ __('Alertes') }}</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                <li class="nav-item"><a href="{{url('/alerts/index')}}" class="nav-link param">{{ __('Nouvel Alerte') }}</a></li>
                                <li class="nav-item"><a href="{{ url('/alerts') }}" class="nav-link param">{{ __('Liste des Alertes') }}</a></li>
                            </ul>
                        </li>
                    @endif
            </ul>
        </div><!-- #mainMenu -->
        <!-- -------------------- End etrs ------------------------------------------------>

    </div><!-- tab-content -->
</div>
<div class="am-pagetitle" style="background-color: #32415A;">
    <ul class="nav am-sideleft-tab" >
        @if (!in_array("CaptureData",$disabled))
            <li class="nav-item">
                <a href="#statistics" class="nav-link {{$value == 'statistic' ? 'active' : ''}} " id="tab_statistic" data-toggle="tab"><i class="fa fa-pie-chart tx-24"></i></a>
            </li>
    @endif

    <!--<li class="nav-item">
                <a href="#users" class="nav-link" data-toggle="tab"></a>
            </li>-->
        <!--<li class="nav-item">
            <a href="#locations" class="nav-link" data-toggle="tab"><i class="fa fa-map-marker  tx-24"></i></a>
        </li>-->
        <!--<li class="nav-item">
            <a href="#boxes" class="nav-link" data-toggle="tab"><i class="fa fa-archive tx-24"></i></a>
        </li>-->
        <li class="nav-item">
            <a href="#eters" class="nav-link {{$value == 'parameter' ? 'active' : ''}}" data-toggle="tab" id="tab_parametres"><i class="fa fa-cog tx-24"></i></a>
        </li>
    </ul>
</div>

<script type="text/javascript">
$(document).ready(function () {


});


</script>
