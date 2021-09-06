 <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                              @foreach(App\Models\Front\General::all() as $footer)
                               <div class="footer-head">
                                    <div class="footer-logo">
                                        <a href="#"><img src="{{asset('public/front_asset/img/logo/').'/'.$footer->logo_img}}" alt=""></a>
                                    </div>
                                    <p>{{$footer->footer_des}}</p>
                                </div>
                               @endforeach
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <ul class="footer-list">
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Agency </a></li>
                                        <li><a href="#">Social media</a></li>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Design </a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
                                        <li><a href="#">Search engine</a></li>
                                        <li><a href="#">Online support</a></li>
                                        <li><a href="#">Development</a></li>
                                        <li><a href="#">Pay per click</a></li>
                                        <li><a href="#">Event activation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Tags</h4>
                                    <div class="footer-tags">
                                        <ul>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">Agency </a></li>
                                            <li><a href="#">Media</a></li>
                                            <li><a href="#">Social</a></li>
                                            <li><a href="#">Photoshop</a></li>
                                            <li><a href="#">Seo</a></li>
                                            <li><a href="#">development</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Design</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>
                                    Copyright © 2019
                                    <a href="#">Monata</a> All Rights Reserved
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>