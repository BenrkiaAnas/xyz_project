<div class="am-sideleft">

    <div class="tab-content">

        <div id="eters" class="tab-pane active  ps ps--theme_default ps--active-y ">
            <ul class="nav am-sideleft-menu">
                    <li class="nav-item">
                        <a href="{{route('add_contact')}}" class="nav-link">
                            <i class="fa fa-address-book tx-24" aria-hidden="true"></i>
                            <span>Contact</span>
                        </a>
                    </li>

                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-picture-o tx-24" aria-hidden="true"></i>
                                <span>Gallery</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                    <li class="nav-item"><a href="{{url('/image-crop')}}" class="nav-link param">Gallery</a></li>
                                    <li class="nav-item"><a href="{{ url('/gallery/list') }}" class="nav-link param">List Gallery</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link with-sub">
                                <i class="fa fa-question-circle tx-24" aria-hidden="true"></i>
                                <span>FAQ</span>
                            </a>
                            <ul class="nav-sub" style="display: none;">
                                    <li class="nav-item"><a href="{{url('/faqForm')}}" class="nav-link param">Create FAQ</a></li>
                                <li class="nav-item"><a href="{{ url('/faqs') }}" class="nav-link param">Liste FAQ</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{url("/parameter")}}" class="nav-link">
                                <i class="fa fa-cog  tx-24" aria-hidden="true"></i>
                                <span>Parametre</span>
                            </a>
                        </li>

            </ul>
        </div><!-- #mainMenu -->
        <!-- -------------------- End etrs ------------------------------------------------>

    </div><!-- tab-content -->
</div>

<script type="text/javascript">
$(document).ready(function () {


});


</script>
