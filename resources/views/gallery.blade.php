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
                            <h2 class="text-theme-color-yellow font-36">Gallery</h2>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="#">Home</a></li>
                                <li class="active">Gallery</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- Section: Our Gallery -->
        <section>

            <div class="container pt-70 pb-70">
                <div class="section-content">
                    <div class="row mb-30">
                        <div class="section-title text-center">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="text-uppercase line-bottom-center mt-0">Our <span class="text-theme-color-red">Gallery</span></h2>
                                    <div class="title-flaticon">
                                        <i class="pe-7s-study"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                                </div>
                            </div>
                        </div>
                        @foreach($images as $image)
                        <div class="col-xs-12 col-sm-4 col-md-4">
                            <div class="gallery-block">
                                <div class="gallery-thumb">
                                    <img alt="project" src="/images/{{ $image->image }}" class="img-fullwidth" style="padding: 8px">
                                </div>
                                <div class="overlay-shade green"></div>
                                <div class="icons-holder">
                                    <div class="icons-holder-inner">
                                        <div class="gallery-icon">
                                            <a href="/images/{{ $image->image }}"  data-lightbox-gallery="gallery"><i class="pe-7s-expand1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <br>
        </section>
    </div>
    <!-- end main-content -->

    <!-- Footer -->
   @include('footer')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{url('ctis/js/custom.js')}}"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2017/childhaven-html/demo/page-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Sep 2022 18:24:12 GMT -->
</html>
