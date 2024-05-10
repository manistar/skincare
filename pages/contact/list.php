<main class="main-content">

    <!--== Start Contact Area Wrapper ==-->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="offset-lg-6 col-lg-6">
                    <div class="section-title position-relative">
                        <h2 class="title">Get in touch</h2>
                        <p class="m-0">Kindly send us a DM to get intouch with us, we are active 24/7</p>
                        <div class="line-left-style mt-4 mb-1"></div>
                    </div>
                    <!--== Start Contact Form ==-->
                    <div class="contact-form">
                        <!-- <form id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="con_name" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="con_email" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="con_message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mb-0">
                                    <button class="btn btn-sm" type="submit">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </form> -->
                        <form action="passer" id="foo">
                            <?= $c->create_form($contact_us); ?>
                            <input type="hidden" name="send_message" value="">
                            <div id="custommessage"></div>
                            <input type="submit" style="width:100%;" class="btn btn-primary" value="submit">
                        </form>
                    </div>
                    <!--== End Contact Form ==-->

                    <!--== Message Notification ==-->
                    <div class="form-message"></div>
                </div>
            </div>
        </div>
        <div class="contact-left-img" data-bg-img="assets/images/photos/contact.webp"></div>
    </section>
    <!--== End Contact Area Wrapper ==-->

    <!--== Start Contact Area Wrapper ==-->
    <section class="section-space">
        <div class="container">
            <div class="contact-info">
                <div class="contact-info-item">
                    <img class="icon" src="assets/images/icons/1.webp" width="30" height="30" alt="Icon">
                    <a href="tel://+233551468920">+23 355 146 8920</a>
                    <a href="tel://+233551468920">+23 355 146 8920</a>
                </div>
                <div class="contact-info-item">
                    <img class="icon" src="assets/images/icons/2.webp" width="30" height="30" alt="Icon">
                    <a href="mailto://support@mimikesthetica.com">support@mimikesthetica.com</a>
                    <a href="mailto://info@mimikesthetica.com">info@mimikesthetica.com</a>
                </div>
                <div class="contact-info-item mb-0">
                    <img class="icon" src="assets/images/icons/3.webp" width="30" height="30" alt="Icon">
                    <p>Plot C11 Tetteh Quarshie Interchange, Spintex Rd, Accra, Ghana</p>
                </div>
            </div>
        </div>
    </section>
    <!--== End Contact Area Wrapper ==-->

    <div class="map-area">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.518031172403!2d-0.13204928567873338!3d5.638562795956314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9ebf529a09d7%3A0xc0d1a42b234fc4e!2sPlot%20C11%20Tetteh%20Quarshie%20Interchange%2C%20Spintex%20Rd%2C%20Accra!5e0!3m2!1sen!2sgh!4v1649402361927!5m2!1sen!2sgh"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>

    </div>

</main>