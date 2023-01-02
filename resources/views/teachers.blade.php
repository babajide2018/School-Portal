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
                        <h2 class="text-theme-color-yellow font-36">Our Staffs</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="#">Home</a></li>
                            <li class="active">Our Staffs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layer-overlay overlay-white-7" data-bg-img="{{url('ctis/images/bg/bg5.jpg')}}">
        <div class="container pb-70">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0"><span class="text-theme-color-sky">Meet</span> Our <span class="text-theme-color-red">Staffs</span></h2>
                        <div class="title-flaticon">
                            <i class="pe-7s-study"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach($teachers as $teacher)
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pb-sm-30">
                            <div class="image-box-thum">
                                <img class="img-fullwidth" alt="" src="/images/{{ $teacher->image }}">
                            </div>
                            <div class="bg-white p-20 pt-10 pb-10">
                                <h5 class="name mb-5"><a href="#">{{$teacher->name}}</a><span class="occupation font-12 font-weight-400 text-theme-color-blue letter-space-1"></span></h5>
                                <h3 class="title mt-0">{{$teacher->subject}}</h3>
                            </div>
                            <div class="bg-white border-top-dashed pl-20 pt-10 pb-5">
                                <ul class="styled-icons icon-theme-color-blue icon-sm icon-dark icon-circled">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
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
