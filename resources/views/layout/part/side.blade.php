 <div class="appointment-wrapper">
            <div class="appoint-box">
                <div class="cross-icon"><span class="icon icon-cross"></span></div>
                <div class="title">
                    <a class="slide-logo" href="index.html">
                        <img src="img/logo/logo.png" alt="">
                    </a>
                    <div class="separator"></div>
                </div>
                <div class="contact-icon">
                     @foreach(App\Models\Front\General::all() as $side)
                    <div class="single-contact">
                        <a href="#"><i class="fa fa-map"></i><span>{{$side->company_add}}</span></a>
                        <a href="#"><i class="fa fa-phone"></i><span>{{$side->company_phone}}</span></a>
                        <a href="#"><i class="fa fa-envelope"></i><span>{{$side->company_email  }}</span></a>
                    </div>
                   @endforeach
                    <div class="quote-icons">
                        <h5>Follow us</h5>
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
                <div class="row form-row">
                    <form id="qcontactForm" method="POST" action="http://rockstheme.com/rocks/monata-live/monata/contact.php" class="contact-form">
                        <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                            <input type="text" id="qname" class="form-control" placeholder="Name" required data-error="Please enter your name">
                            <div class="help-block with-errors"></div>
                            <input type="email" class="email form-control" id="qemail" placeholder="Email" required data-error="Please enter your email">
                            <div class="help-block with-errors"></div>
                            <input type="text" id="qmsg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-12 inner-column col-sm-12 col-xs-12">
                            <textarea id="qmessage" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                            <div class="help-block with-errors"></div>
                            <button type="submit" id="qsubmit" class="quote-btn">Submit</button>
                            <div id="qmsgSubmit" class="h3 hidden"></div> 
                            <div class="clearfix"></div>
                        </div>   
                    </form>
                </div>
            </div>
        </div>