<footer id="footer" class="footer" data-bg-color="#262E3B">
    <div class="container pt-70 pb-40">
        <div class="row border-bottom-black">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark"> <img alt="" src="{{url('ctis/images/logo-wide-white-footer.png')}}">
                    <p class="font-13 mt-20 mb-10">Covenant Treasures International Schools is a Faith - based school with multi - dimensional approaches to learning.
                        <br> <br> We focus on various activities which range from classroom learning, crafts, innovative programmes and interactions all of which assist in building our pupil’s educational skills and cognitive
                        development. <a class="text-theme-color-red" href="#">read more</a> </p>
                    <ul class="list-inline mt-5">
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-color-red mr-5"></i> <a class="text-gray" href="#">08069413092</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-color-red mr-5"></i> <a class="text-gray" href="#">info@convenanttreasures.org</a> </li>
                        <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-color-red mr-5"></i> <a class="text-gray" href="#">www.convenanttreasures.org</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Upcoming Events</h5>
                    <div class="latest-posts">
                        @forelse($events as $event)
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">{{$event->name}}</a></h5>
                                <p class="post-date mb-0 font-12">{{$event->event_date}}</p>
                            </div>
                        </article>
                        @empty
                        <p>No upcoming events</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Quick Contact</h5>
                    <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="https://kodesolution.com/html/2017/childhaven-html/demo/includes/quickcontact.php" method="post">
                        <div class="form-group">
                            <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
                        </div>
                    </form>


                    <!-- Quick Contact Form Validation-->
                    <script type="text/javascript">
                        $("#footer_quick_contact_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType:  'json',
                                    success: function(data) {
                                        if( data.status == 'true' ) {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="row mt-10">
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Call Us Now</h5>
                    <div class="text-gray">
                        08069413092, <br>
                        08138640677

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title mb-10">Connect With Us</h5>
                    <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="widget dark">

                    </span>
                </div>
                </form>
                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                    $('#mailchimp-subscription-form').ajaxChimp({
                        callback: mailChimpCallBack,
                        url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                    });

                    function mailChimpCallBack(resp) {
                        // Hide any previous response text
                        var $mailchimpform = $('#mailchimp-subscription-form'),
                            $response = '';
                        $mailchimpform.children(".alert").remove();
                        console.log(resp);
                        if (resp.result === 'success') {
                            $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        } else if (resp.result === 'error') {
                            $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                        }
                        $mailchimpform.prepend($response);
                    }
                </script>
                <!-- Mailchimp Subscription Form Ends Here -->
            </div>
        </div>
    </div>
    </div>
    <div class="footer-bottom" data-bg-color="#242730">
        <div class="container pt-15 pb-10">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2022 Buy Solutions Hub. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Help Desk</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
