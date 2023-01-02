@include('header')

<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-7" data-bg-img="ctis/images/bg/inner-header.jpg">
        <div class="container pt-120 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-theme-color-yellow font-36">Testimonials</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li class="active">Testimonials</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Our Courses -->
    <section class="layer-overlay overlay-white-7" data-bg-img="images/bg/bg5.jpg">
        <div class="container pt-70 pb-30">
            <div class="section-content">
                <div class="row">
                    @foreach($testimonials as $testimonial)
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="course-details-box bg-silver-light border-1px clearfix mb-30">
                            <div class="col-md-5 col-lg-5 p-0">
                                <div class="thumb">
                                    <img class="img-fullwidth" alt="" src="images/{{$testimonial->image}}">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-7 p-0">
                                <div class="course-details clearfix p-20 pt-15">
                                    <h3 class="title font-26 mt-0 mb-0"><a class="text-theme-color-red" href="#">{{$testimonial->name}}</a></h3>
                                    <p class="font-14 text-black-333 pt-0">{{$testimonial->testimonial}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-color-sky" data-bg-img="images/bg/bg6.jpg" data-parallax-ratio="0.7">
        <div class="container pt-90 pb-90">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-users mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="864" class="animate-number text-white font-42 font-weight-300 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Qualified Teachers</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-study mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="486" class="animate-number text-white font-42 font-weight-300 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Successful Kids</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-smile mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="1468" class="animate-number text-white font-42 font-weight-300 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Happy Parents</h5>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
                    <div class="funfact text-center">
                        <i class="pe-7s-medal mt-5 text-white"></i>
                        <h2 data-animation-duration="2000" data-value="32" class="animate-number text-white font-42 font-weight-300 mt-0 mb-0">0</h2>
                        <h5 class="text-white text-uppercase font-weight-600">Award Won</h5>
                    </div>
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
