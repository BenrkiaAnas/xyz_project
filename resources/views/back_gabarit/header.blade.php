<div class="am-header">
    <div class="am-header-left">
        <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex" ><i class="icon ion-navicon-round"></i></a>
        <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
        <a href="" class="am-logo"><img src="{{asset('images/thermodity.png')}}" class="img-fluid" title="Thermodity" style="height: 50px;padding-top: 10px;"/></a>
    </div><!-- am-header-left -->

    <div class="am-header-right">
        <div class="dropdown dropdown-notification">
            <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                <span class="tx-24">5/10</span>
                <i class="icon ion-ios-bell-outline tx-24"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                <!-- end: if statement -->
            </a>
            <div class="dropdown-menu wd-300 pd-0-force">
                <div class="dropdown-menu-header">
                </div><!-- d-flex -->

                <div class="media-list">

                    
                    <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                             <img src="" class="notification-logo wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                <p class="tx-13 mg-b-0"></p>
                                    <span class="tx-12"> </span>
                                    <span style="float: right" class="tx-12"></span>
                                </div>
                            </div><!-- media -->
                        </a>

                    

                    <div class="media-list-footer">
                        <a href="{{url('/notifications')}}" class="tx-12">{{__('Liste des Notifications')}}</a>
                    </div>
                </div><!-- media-list -->
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name"><span class="hidden-xs-down">
                    @if(Auth::check())
                    {{Auth()->user()->name}}
                    @endif
                </span> <i class="fa fa-angle-down mg-l-3"></i></span>
            </a>
            <div class="dropdown-menu wd-200">
                <ul class="list-unstyled user-profile-nav">

                        <li><a href="{{url('/myprofile/')}}"><i class="icon ion-ios-person-outline"></i>{{__('Profil')}}</a></li>
                    <li><a href="{{url('/user/preference')}}"><i class="icon ion-ios-gear-outline"></i> {{__('Préférences')}}</a></li>
                    <li>

                        <a href="{{ url('/logout') }}"> {{__('Déconnexion')}} </a>
                    </li>








                </ul>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- am-header-right -->
</div><!-- am-header -->
