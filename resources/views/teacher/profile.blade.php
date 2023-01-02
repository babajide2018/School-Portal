<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from qerza.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 22:37:48 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>CTIS - Teacher's Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="index.html" class="brand-logo">
            <img src="images/logo-sidebar.png" alt="">
            <img src="images/ctis.png" alt="">

        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->
    <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="chat" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Chat List</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                            <ul class="contacts">
                                <li class="name-first-letter">A</li>
                                <li class="active dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Archie Parker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Alfie Mason</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">B</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Bashid Samim</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Breddie Ronan</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Ceorge Carson</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">D</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Darry Parker</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Denry Hunter</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">J</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jack Ronan</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Jacob Tucker</span>
                                            <p>Kalid is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>James Logan</span>
                                            <p>Taherah left 7 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Joshua Weston</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">O</li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oliver Acker</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="dz-chat-user">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
                                            <span class="online_icon offline"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>Oscar Weston</span>
                                            <p>Rashid left 50 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card chat dz-chat-history-box d-none">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0)" class="dz-chat-history-back">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
                            </a>
                            <div>
                                <h6 class="mb-1">Chat with Khelesh</h6>
                                <p class="mb-0 text-success">Online</p>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                    <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
                                    <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
                                    <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Hi, how are you samim?
                                    <span class="msg_time">8:40 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Hi Khalid i am good tnx how about you?
                                    <span class="msg_time_send">8:55 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am good too, thank you for your chat template
                                    <span class="msg_time">9:00 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    You are welcome
                                    <span class="msg_time_send">9:05 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    I am looking for your next templates
                                    <span class="msg_time">9:07 AM, Today</span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-4">
                                <div class="msg_cotainer_send">
                                    Ok, thank you have a good day
                                    <span class="msg_time_send">9:10 AM, Today</span>
                                </div>
                                <div class="img_cont_msg">
                                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start mb-4">
                                <div class="img_cont_msg">
                                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
                                </div>
                                <div class="msg_cotainer">
                                    Bye, see you
                                    <span class="msg_time">9:12 AM, Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer type_msg">
                            <div class="input-group">
                                <textarea class="form-control" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="alerts" role="tabpanel">
                    <div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notications</h6>
                                <p class="mb-0">Show All</p>
                            </div>
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                            <ul class="contacts">
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">KK</div>
                                        <div class="user_info">
                                            <span>David Nester Birthday</span>
                                            <p class="text-primary">Today</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SOCIAL</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
                                        <div class="user_info">
                                            <span>Perfection Simplified</span>
                                            <p>Jame Smith commented on your status</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="name-first-letter">SEVER STATUS</li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                        <div class="user_info">
                                            <span>AharlieKane</span>
                                            <p>Sami is online</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>Nargis left 30 mins ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="notes">
                    <div class="card mb-sm-3 mb-md-0 note_card">
                        <div class="card-header chat-list-header text-center">
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
                            <div>
                                <h6 class="mb-1">Notes</h6>
                                <p class="mb-0">Add New Nots</p>
                            </div>
                            <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
                        </div>
                        <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                            <ul class="contacts">
                                <li class="active">
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>New order placed..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Youtube, a video-sharing website..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>john just buy your product..</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex bd-highlight">
                                        <div class="user_info">
                                            <span>Athan Jacoby</span>
                                            <p>10 Aug 2020</p>
                                        </div>
                                        <div class="ml-auto">
                                            <a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    @include('teacher.includes.header')
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('teacher.includes.sidebar')

    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->


    <div class="content-body">
        <div class="container-fluid">
            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-xxl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="card  flex-lg-column flex-md-row ">
                                <div class="card-body card-body  text-center border-bottom profile-bx">
                                    <div class="profile-image mb-4">
                                        <img src="images/avatar/1.jpg" class="rounded-circle" alt="">
                                    </div>
                                    <h4 class="fs-22 text-black mb-1">{{$user->name}}</h4>
                                    <p class="mb-4">Teacher</p>
                                    <div class="row">
                                        {{--<div class="col-6">
                                            <div class="p-2">
                                                <h4 class="fs-22 text-black font-w600">228</h4>
                                                <span class="text-black">Following</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-2">
                                                <h4 class="fs-22 text-black font-w600">4,842</h4>
                                                <span class="text-black">Followers</span>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                                <div class="card-body  border-left">
                                    <div class="d-flex mb-3 align-items-center">
                                        <a class="contact-icon mr-3" href="#"><i class="fa fa-building" aria-hidden="true"></i></a>
                                        <span class="text-black">{{$user->class}}</span>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center">
                                        <a class="contact-icon mr-3" href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                                        <span class="text-black">{{$user->phone}}</span>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center">
                                        <a class="contact-icon mr-3" href="#"><i class="las la-envelope"></i></a>
                                        <span class="text-black">{{$user->email}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6">
                            <div class="card">
                                <div class="card-header border-0 pb-0">
                                    <h4 class="fs-20 text-black">Portofolios</h4>
                                    <div class="dropdown float-right custom-dropdown mb-0">
                                        <div class="" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                            <a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex mb-3 align-items-center bg-light rounded">
                                        <svg class="mr-3 min-w50" width="50" height="50" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="49" height="49" rx="18" fill="#3D6AD6"/>
                                            <path d="M22.7047 25.2398C22.6293 25.2398 21.0484 25.2403 20.3193 25.2396C19.9439 25.2394 19.81 25.1045 19.81 24.7267C19.8095 23.7564 19.8093 22.7861 19.81 21.8158C19.8103 21.4428 19.9519 21.3005 20.3224 21.3002C21.0515 21.2998 22.6238 21.3 22.7047 21.3C22.7047 21.2335 22.7044 19.8326 22.7047 19.1875C22.7051 18.2338 22.8753 17.3208 23.3599 16.4849C23.8559 15.6293 24.5779 15.0432 25.5031 14.7043C26.0956 14.4871 26.7107 14.4005 27.3395 14.4C28.1263 14.3995 28.913 14.4002 29.6999 14.4017C30.0381 14.4022 30.1881 14.5517 30.1888 14.8922C30.1903 15.805 30.1903 16.7177 30.1888 17.6302C30.1883 17.9743 30.0446 18.1126 29.6987 18.1164C29.0539 18.1234 28.4085 18.119 27.7643 18.145C27.1137 18.145 26.7715 18.4627 26.7715 19.1362C26.7559 19.8485 26.765 20.5615 26.765 21.2998C26.8259 21.2998 28.6775 21.2995 29.543 21.2998C29.9361 21.2998 30.0705 21.4349 30.0705 21.8302C30.0705 22.7952 30.0703 23.7605 30.0695 24.7255C30.0693 25.115 29.9431 25.2394 29.5475 25.2396C28.6821 25.2401 26.8377 25.2398 26.7571 25.2398V33.0506C26.7571 33.467 26.626 33.5998 26.2151 33.5998C25.2134 33.5998 24.2114 33.6 23.2096 33.5998C22.8465 33.5998 22.7049 33.4586 22.7049 33.0955C22.7047 30.5518 22.7047 25.3291 22.7047 25.2398Z" fill="white"/>
                                        </svg>
                                        <span class="font-w500">/davidheree.porto</span>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center bg-light rounded">
                                        <svg class="mr-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="50" height="50" rx="18" fill="#EA518D"/>
                                            <path d="M28.4575 25.3758C29.4183 27.8067 30.1319 30.3093 30.5955 32.866C31.2569 32.4627 31.8751 31.9783 32.4371 31.4165C33.8964 29.9569 34.8383 28.1177 35.1711 26.1218C33.7375 25.5286 32.1672 25.2005 30.5215 25.2005C29.8179 25.2005 29.1285 25.261 28.4575 25.3758Z" fill="white"/>
                                            <path d="M32.4447 17.5714C32.4418 17.5687 32.4391 17.5658 32.4364 17.5631C30.5862 15.7129 28.1262 14.6939 25.5097 14.6939C24.4865 14.6939 23.4873 14.8504 22.5391 15.1509C24.0587 17.0549 25.3956 19.0869 26.5414 21.2344C28.7 20.3177 30.6881 19.0761 32.4447 17.5714Z" fill="white"/>
                                            <path d="M33.2143 18.4386C31.3717 20.0214 29.3123 21.3039 27.0718 22.2627C27.4021 22.9276 27.7141 23.6033 28.0085 24.289C28.8309 24.1325 29.6696 24.0526 30.5209 24.0526C32.1698 24.0526 33.7734 24.3492 35.2952 24.9328C35.3018 24.7856 35.3055 24.6379 35.3055 24.49C35.3055 22.2668 34.5698 20.1575 33.2143 18.4386V18.4386Z" fill="white"/>
                                            <path d="M19.4805 32.2117C21.1955 33.5564 23.2967 34.2857 25.5101 34.2857C26.917 34.2857 28.2784 33.9906 29.5242 33.4308C29.0572 30.7249 28.3095 28.1143 27.3121 25.6295C23.8453 26.5756 20.989 29.0155 19.4805 32.2117V32.2117Z" fill="white"/>
                                            <path d="M25.3247 25.1018C25.8284 24.8887 26.3422 24.708 26.8638 24.5596C26.5886 23.9292 26.2964 23.3077 25.9891 22.6949C23.3427 23.6775 20.5599 24.1756 17.7012 24.1756C17.0371 24.1756 16.3773 24.1482 15.7224 24.0948C15.7171 24.2258 15.7139 24.3576 15.7139 24.49C15.7139 27.1065 16.7329 29.5665 18.5831 31.4167C18.5836 31.4172 18.5843 31.418 18.5851 31.4184C19.225 30.1423 20.0618 28.9822 21.0815 27.9624C22.3073 26.7367 23.7348 25.7743 25.3247 25.1018V25.1018Z" fill="white"/>
                                            <path d="M25.4519 21.6637C24.2893 19.5108 22.9294 17.4796 21.3966 15.5941C20.3636 16.0726 19.4119 16.7341 18.583 17.5631C17.1008 19.0452 16.1526 20.9189 15.834 22.9509C16.4499 23.0013 17.0724 23.0275 17.7013 23.0275C20.4219 23.0273 23.0325 22.5458 25.4519 21.6637V21.6637Z" fill="white"/>
                                        </svg>
                                        <span class="font-w500">/david.drib</span>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center bg-light rounded">
                                        <svg class="mr-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="50" height="50" rx="18" fill="#0073B1"/>
                                            <path d="M34.5948 33.6V33.5993H34.5996V26.5577C34.5996 23.113 33.858 20.4593 29.8308 20.4593C27.8948 20.4593 26.5956 21.5218 26.0652 22.5288H26.0093V20.7809H22.1909V33.5993H26.167V27.252C26.167 25.5809 26.4838 23.9647 28.5533 23.9647C30.5926 23.9647 30.6228 25.872 30.6228 27.359V33.6H34.5948Z" fill="white"/>
                                            <path d="M15.7168 20.7816H19.6977V33.6H15.7168V20.7816Z" fill="white"/>
                                            <path d="M17.7056 14.4C16.4326 14.4 15.3999 15.4327 15.3999 16.7057C15.3999 17.9786 16.4326 19.0329 17.7056 19.0329C18.9785 19.0329 20.0113 17.9786 20.0113 16.7057C20.0103 15.4327 18.9776 14.4 17.7056 14.4Z" fill="white"/>
                                        </svg>
                                        <span class="font-w500">/davidheree222</span>
                                    </div>
                                    <div class="d-flex mb-3 align-items-center bg-light rounded">
                                        <svg class="mr-3 min-w50" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="50" height="50" rx="18" fill="#FF0000"/>
                                            <path d="M30.9677 17.1386H19.0321C17.0247 17.1386 15.3999 18.7658 15.3999 20.771V27.2292C15.3999 29.2342 17.0247 30.8614 19.0321 30.8614H30.9675C32.9751 30.8614 34.5999 29.2342 34.5999 27.229V20.771C34.5999 18.7658 32.9751 17.1386 30.9677 17.1386ZM22.4705 26.9434V21.0566L27.529 24.006L22.4705 26.9434Z" fill="white"/>
                                        </svg>
                                        <span class="font-w500">/davidhereechan</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card profile-card">
                                <div class="card-header flex-wrap border-0 pb-0">
                                    <h3 class="fs-24 text-black font-w600 mr-auto mb-2 pr-3">Edit Profile</h3>
                                    <div class="d-sm-flex d-block">
                                        <div class="d-flex mr-5 align-items-center mb-2">

                                        </div>
                                        <a href="#" class="btn btn-dark light rounded mr-3 mb-2">Cancel</a>
                                        <a class="btn btn-primary rounded mb-2" href="#">Save Changes</a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="mb-sm-5 mb-2">
                                            <div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Fullname</label>
                                                        <input type="text" class="form-control" placeholder="Enter name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <select type="text" class="form-control" placeholder="Type here">
                                                            <option value="">Choose Gender</option>
                                                            <option value="">Male</option>
                                                            <option value="">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Staff ID</label>
                                                        <input type="text" class="form-control" placeholder="Staff ID">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Enter password">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Re-Type Password</label>
                                                        <input type="password" class="form-control" name="retype_password" placeholder="Enter password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="title mb-4"><span class="fs-18 text-black font-w600">Skils</span></div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="media mb-4">
                                                        <span class="text-primary progress-icon mr-3">78%</span>
                                                        <div class="media-body">
                                                            <p class="font-w500">Programming</p>
                                                            <div class="progress skill-progress" style="height:10px;">
                                                                <div class="progress-bar bg-primary progress-animated" style="width: 78%; height:10px;" role="progressbar">
                                                                    <span class="sr-only">78% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="media mb-4">
                                                        <span class="text-primary progress-icon mr-3">65%</span>
                                                        <div class="media-body">
                                                            <p class="font-w500">Prototyping</p>
                                                            <div class="progress skill-progress" style="height:10px;">
                                                                <div class="progress-bar bg-primary progress-animated" style="width: 65%; height:10px;" role="progressbar">
                                                                    <span class="sr-only">65% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="media mb-4">
                                                        <span class="text-primary progress-icon mr-3">89%</span>
                                                        <div class="media-body">
                                                            <p class="font-w500">UI Design</p>
                                                            <div class="progress skill-progress" style="height:10px;">
                                                                <div class="progress-bar bg-primary progress-animated" style="width: 89%; height:10px;" role="progressbar">
                                                                    <span class="sr-only">89% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="media mb-4">
                                                        <span class="text-primary progress-icon mr-3">94%</span>
                                                        <div class="media-body">
                                                            <p class="font-w500">Researching</p>
                                                            <div class="progress skill-progress" style="height:10px;">
                                                                <div class="progress-bar bg-primary progress-animated" style="width: 94%; height:10px;" role="progressbar">
                                                                    <span class="sr-only">94% Complete</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>














    <!--**********************************
        Content body end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    @include('teacher.includes.footer')
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.js"></script>

<!-- Chart piety plugin files -->
<script src="vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="js/dashboard/dashboard-1.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
<script>
    function carouselReview(){
        /*  testimonial one function by = owl.carousel.js */
        function checkDirection() {
            var htmlClassName = document.getElementsByTagName('html')[0].getAttribute('class');
            if(htmlClassName == 'rtl') {
                return true;
            } else {
                return false;

            }
        }

        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:30,
            nav:false,
            dots: false,
            rtl: checkDirection(),
            left:true,
            navText: ['', ''],
            responsive:{
                0:{
                    items:1
                },
                1200:{
                    items:2
                },
                1600:{
                    items:3
                }
            }
        })
    }
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>
</body>

<!-- Mirrored from qerza.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 22:37:49 GMT -->
</html>
