
    <!-- Contact US -->
    <section id="contactus" class="padding_top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="heading-title heading_space wow fadeInUp  text-end" data-wow-delay="300ms">
                        <span>{{__('CONTACT')}}</span>
                        <h2 class="darkcolor">{{__('Laissez Nous Un Message')}}</h2>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp  text-end" data-wow-delay="350ms">
                    <p>{{__("Notre équipe est toujours disponible pour recevoir toute demande de renseignement ou commentaire. N'hésitez pas SVP de nous envoyer un message à partir du formulaire ci-dessous, nous vous contacterons dès que possible.")}}</p>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h4 class="pickus" href="#." data-text="Notre Addresse">{{__('Notre Addresse')}}</h4>
                            <p class="bottom15">{{__("Projet Education à la Sécurité Routière est situé à Marrakech, Avenue Abdellah Brahim - Annexe Administratif Bouâkkaz (Circuit de l’Ecole Abdelmalek Essaâdi)")}}</p>

                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">
                            <h4 class="pickus" href="#." data-text="Appelez Nous">{{__('Appelez Nous')}}</h4>
                            <p class="bottom15">05 25 09 30 20 / 05 25 09 30 21</p>
                            <h4 class="pickus" href="#." data-text="Envoyez un Message">{{__('Envoyez un Message')}}</h4>
                            <p class="bottom15">centre.securite@alsa.m</p>

                        </div>
                        <div class="col-md-6 col-sm-6 our-address top40">


                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 margin_bottom">
                    <form class="getin_form wow fadeInUp" data-wow-delay="400ms"  action="{{route('create_contact')}}" method="POST">
                        {{csrf_field()}}
                        <div class="row">

                            <div class="col-sm-12" id="result"></div>

                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="{{__('Nom:')}}" required id="first_name" name="first_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="text" placeholder="{{__('Prénom:')}}" required id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="email" placeholder="{{__('Email:')}}" required id="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group bottom35">
                                    <input class="form-control" type="tel" placeholder="{{__('Tél:')}}" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <textarea class="form-control" placeholder="{{__('Message:')}}" id="message" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button btnprimary" id="submit_btn">{{__('Envoyez un Message')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!--Location Map here-->
        <div id="map-container"></div>
    </section>
    <!--Contact US Ends-->

