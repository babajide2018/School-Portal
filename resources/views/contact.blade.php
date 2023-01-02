@include('header')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="{{url('ctis/images/bg/inner-header.jpg')}}">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-color-yellow font-36">Contact Us</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li class="active">Contact Us</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Divider: Contact -->
    <section id="contact" class="divider">
        <div class="container pt-60 pb-60">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0">Contact <span class="text-theme-color-red">Us</span></h2>
                        <div class="title-flaticon">
                            <i class="pe-7s-study"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                    </div>
                </div>
            </div>
            <div class="row pt-10">
                <div class="col-md-10 col-md-offset-1">
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2017/childhaven-html/demo/includes/sendmail.php" method="post">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group mb-30">
                                    <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-flat btn-theme-color-sky text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                            <button type="reset" class="btn btn-flat btn-theme-color-sky text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




</div>
<!-- end main-content -->

@include('footer')
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('ctis/js/custom.js')}}"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2017/childhaven-html/demo/page-about2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 18:24:12 GMT -->
</html>
