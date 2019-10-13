
    
<footer id="footer" >
    <div class="main-footer widgets-dark typo-light">
        <div class="container-footer">
            <div class="row ml-2 justify-content-between">  
                <div class="col-xs-12 col-sm-2 col-md-3">
                    <div class="widget subscribe no-box">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="/img/pddtLogo.png" style="height:rem; width:8 rem;" class="d-inline-block align-top" alt="">
                        </a>
                        <p style="color:black;">
                        <br/>
                        L'association Pddt est une association de solidarité internationale,
                        intervant dans le domaine de l'accès à l'eau, à l'éducation et à la santé
                        pour les populations du tchad.
                        </p>
                        <div class="widget no-box">
                        <a style="color:white;" class="nav-link btn btn-success mr-2" href="">{{ __('FAIRE UN DON') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="widget no-box">
                        <h5 class="widget-title">L'essentiel<span></span></h5>
                        <ul class="thumbnail-widget">
                            <li>
                                <div class="thumb-content"><a href="{{ url('/') }}">Accueil</a></div>
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">Qui sommes-nous</a></div>	
                            </li>
                            <li>
                                <div class="thumb-content"><a href="{{ url('/projets') }}">Nos projets</a></div>	
                            </li>
                                <li>
                            <div class="thumb-content"><a href="#.">Nos partenaires</a></div>	
                            </li>
                            <li>
                                <div class="thumb-content"><a href="#.">Le Tchad</a></div>	
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <div class="widget no-box">
                        <h5 class="widget-title">Devenez partenaires<span></span></h5>
                        <a class="nav-link btn btn-outline-success" href="{{ route('register') }}" target="_blank">{{ __("S'INSCRIRE MAINTENANT") }}</a>
                    </div>
                    <div class="widget no-box">
                            <a class="nav-link btn btn-outline-primary" href="{{ route('login') }}">{{ __('ESPACE PARTENAIRES') }}</a> 
                        </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-2">
                    <div class="widget no-box">
                        <h5 class="widget-title">Nous Contacter<span></span></h5>
                        <p style="color:black">
                            115 rue Jean Jaurès,
                            <br>
                            67100 Strasbourg
                            <br>
                            FRANCE.
                        </p>
                        <p><a href="mailto:info@domain.com" title="glorythemes">associationPddt@gmail.com</a></p>
                        <ul class="social-footer2">
                            <li>
                                <a class="nav-link" href="https://www.facebook.com/PDDT-Partenariats-pour-le-D%C3%A9veloppement-Durable-au-Tchad-1729896993954990/?view_public_for=1729896993954990" alt="facebook link" target="_blank">
                                    <img src="/img/facebook_circle.svg" width="20" height="16">
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="https://www.youtube.com/channel/UC1dLyQ7z3Mx59M5ZK0WseMA" alt="youtube link" target="_blank">
                                    <img src="/img/youtube.svg" width="20" height="16">
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="" alt="twitter link" target="_blank">
                                    <img src="/img/twitter.svg" width="20" height="16">
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="" alt="instagram link" target="_blank">
                                    <img src="/img/instagram.svg" width="20" height="16">
                                </a>
                            </li>
                    
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-footer">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Association Pddt © 2015. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>