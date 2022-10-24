<?php
session_start();

use App\Models\Register;

$data = Register::where('email', $_SESSION['email'])->first();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>G-Pay Administrator - Transactions </title>
	<!-- Favicon icon -->
	<link rel="icon" type="image/x-icon" href="{{ URL::asset('/src/img/logo.png') }}">
	<link rel="stylesheet" href="{{ URL::asset('/dash/vendor/chartist/css/chartist.min.css') }}">
	<link href="{{ URL::asset('/dash/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('/dash/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/a7413258b8.js" crossorigin="anonymous"></script>
	<link href="{{ URL::asset('/dash/css/style.css') }}" rel="stylesheet">




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
			<a href="/gpay.com/dashboard/" class="brand-logo">
				<img style="left: -10px;position:relative" src="/src/img/logo.png" alt="">
				<div style="text-align: center;">

					<h2 class="brand-title text-purple" style="position: relative;top:14px;left:-17px">G-Pay</h2>
					<p class="brand-title" style="color:black;font-size: 12px;position: relative;left:-7px">Invoice & Billings</p>
				</div>

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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
											<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect>
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<circle fill="#000000" cx="5" cy="12" r="2"></circle>
											<circle fill="#000000" cx="12" cy="12" r="2"></circle>
											<circle fill="#000000" cx="19" cy="12" r="2"></circle>
										</g>
									</svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/3.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/4.jpg" class="rounded-circle user_img" alt="">
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
												<img src="/dash/images/avatar/5.jpg" class="rounded-circle user_img" alt="">
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
								<a href="#" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<polygon points="0 0 24 0 24 24 0 24"></polygon>
											<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"></rect>
											<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "></path>
										</g>
									</svg>
								</a>
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>
								<div class="dropdown">
									<a href="#" data-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<circle fill="#000000" cx="5" cy="12" r="2"></circle>
												<circle fill="#000000" cx="12" cy="12" r="2"></circle>
												<circle fill="#000000" cx="19" cy="12" r="2"></circle>
											</g>
										</svg></a>
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
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
										<img src="/dash/images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="">
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="/dash/images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="">
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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<circle fill="#000000" cx="5" cy="12" r="2"></circle>
											<circle fill="#000000" cx="12" cy="12" r="2"></circle>
											<circle fill="#000000" cx="19" cy="12" r="2"></circle>
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
											<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
										</g>
									</svg></a>
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
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
											<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"></rect>
										</g>
									</svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="#"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24" version="1.1">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
											<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
										</g>
									</svg></a>
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
												<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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
												<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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
												<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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
												<a href="#" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="#" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
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
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
								</div>
							</div>
						</div>
						<ul class="navbar-nav header-right main-notification">
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell dz-theme-mode" href="#">
									<i id="icon-light" class="fa fa-sun-o"></i>
									<i id="icon-dark" class="fa fa-moon-o"></i>
								</a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell dz-fullscreen" href="#">
									<svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
										<path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
									<svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize">
										<path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<svg class="bell-icon" width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#EB8153"></path>
									</svg>
									<div class="pulse-css"></div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div id="dlab_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="/dash/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="/dash/images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
								</div>
							</li>
							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell bell-link" href="javascript:void(0)">
									<svg width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.4605 3.84888H5.31688C4.64748 3.84961 4.00571 4.11586 3.53237 4.58919C3.05903 5.06253 2.79279 5.7043 2.79205 6.3737V18.1562C2.79279 18.8256 3.05903 19.4674 3.53237 19.9407C4.00571 20.4141 4.64748 20.6803 5.31688 20.6811C5.54005 20.6812 5.75404 20.7699 5.91184 20.9277C6.06964 21.0855 6.15836 21.2995 6.15849 21.5227V23.3168C6.15849 23.6215 6.24118 23.9204 6.39774 24.1818C6.5543 24.4431 6.77886 24.6571 7.04747 24.8009C7.31608 24.9446 7.61867 25.0128 7.92298 24.9981C8.22729 24.9834 8.52189 24.8863 8.77539 24.7173L14.6173 20.8224C14.7554 20.7299 14.918 20.6807 15.0842 20.6811H19.187C19.7383 20.68 20.2743 20.4994 20.7137 20.1664C21.1531 19.8335 21.4721 19.3664 21.6222 18.8359L24.8966 7.05011C24.9999 6.67481 25.0152 6.28074 24.9414 5.89856C24.8675 5.51637 24.7064 5.15639 24.4707 4.84663C24.235 4.53687 23.931 4.28568 23.5823 4.11263C23.2336 3.93957 22.8497 3.84931 22.4605 3.84888ZM23.2733 6.60304L20.0006 18.3847C19.95 18.5614 19.8432 18.7168 19.6964 18.8275C19.5496 18.9381 19.3708 18.9979 19.187 18.9978H15.0842C14.5856 18.9972 14.0981 19.1448 13.6837 19.4219L7.84171 23.3168V21.5227C7.84097 20.8533 7.57473 20.2115 7.10139 19.7382C6.62805 19.2648 5.98628 18.9986 5.31688 18.9978C5.09371 18.9977 4.87972 18.909 4.72192 18.7512C4.56412 18.5934 4.4754 18.3794 4.47527 18.1562V6.3737C4.4754 6.15054 4.56412 5.93655 4.72192 5.77874C4.87972 5.62094 5.09371 5.53223 5.31688 5.5321H22.4605C22.5905 5.53243 22.7188 5.56277 22.8353 5.62076C22.9517 5.67875 23.0532 5.76283 23.1318 5.86646C23.2105 5.97008 23.2642 6.09045 23.2887 6.21821C23.3132 6.34597 23.308 6.47766 23.2733 6.60304Z" fill="#EB8153"></path>
										<path d="M7.84173 11.4233H12.0498C12.273 11.4233 12.4871 11.3347 12.6449 11.1768C12.8027 11.019 12.8914 10.8049 12.8914 10.5817C12.8914 10.3585 12.8027 10.1444 12.6449 9.98661C12.4871 9.82878 12.273 9.74011 12.0498 9.74011H7.84173C7.61852 9.74011 7.40446 9.82878 7.24662 9.98661C7.08879 10.1444 7.00012 10.3585 7.00012 10.5817C7.00012 10.8049 7.08879 11.019 7.24662 11.1768C7.40446 11.3347 7.61852 11.4233 7.84173 11.4233Z" fill="#EB8153"></path>
										<path d="M15.4162 13.1066H7.84173C7.61852 13.1066 7.40446 13.1952 7.24662 13.3531C7.08879 13.5109 7.00012 13.725 7.00012 13.9482C7.00012 14.1714 7.08879 14.3855 7.24662 14.5433C7.40446 14.7011 7.61852 14.7898 7.84173 14.7898H15.4162C15.6394 14.7898 15.8535 14.7011 16.0113 14.5433C16.1692 14.3855 16.2578 14.1714 16.2578 13.9482C16.2578 13.725 16.1692 13.5109 16.0113 13.3531C15.8535 13.1952 15.6394 13.1066 15.4162 13.1066Z" fill="#EB8153"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item dropdown notification_dropdown d-sm-flex d-none">
								<a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<svg width="24" height="24" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.625 6.12506H22.75V2.62506C22.75 2.47268 22.7102 2.32295 22.6345 2.19068C22.5589 2.05841 22.45 1.94819 22.3186 1.87093C22.1873 1.79367 22.0381 1.75205 21.8857 1.75019C21.7333 1.74832 21.5831 1.78629 21.4499 1.86031L14 5.99915L6.55007 1.86031C6.41688 1.78629 6.26667 1.74832 6.11431 1.75019C5.96194 1.75205 5.8127 1.79367 5.68136 1.87093C5.55002 1.94819 5.44113 2.05841 5.36547 2.19068C5.28981 2.32295 5.25001 2.47268 5.25 2.62506V6.12506H4.375C3.67904 6.12582 3.01181 6.40263 2.51969 6.89475C2.02757 7.38687 1.75076 8.0541 1.75 8.75006V11.3751C1.75076 12.071 2.02757 12.7383 2.51969 13.2304C3.01181 13.7225 3.67904 13.9993 4.375 14.0001H5.25V23.6251C5.25076 24.321 5.52757 24.9882 6.01969 25.4804C6.51181 25.9725 7.17904 26.2493 7.875 26.2501H20.125C20.821 26.2493 21.4882 25.9725 21.9803 25.4804C22.4724 24.9882 22.7492 24.321 22.75 23.6251V14.0001H23.625C24.321 13.9993 24.9882 13.7225 25.4803 13.2304C25.9724 12.7383 26.2492 12.071 26.25 11.3751V8.75006C26.2492 8.0541 25.9724 7.38687 25.4803 6.89475C24.9882 6.40263 24.321 6.12582 23.625 6.12506ZM21 6.12506H17.3769L21 4.11256V6.12506ZM7 4.11256L10.6231 6.12506H7V4.11256ZM7 23.6251V14.0001H13.125V24.5001H7.875C7.64303 24.4998 7.42064 24.4075 7.25661 24.2434C7.09258 24.0794 7.0003 23.857 7 23.6251ZM21 23.6251C20.9997 23.857 20.9074 24.0794 20.7434 24.2434C20.5794 24.4075 20.357 24.4998 20.125 24.5001H14.875V14.0001H21V23.6251ZM24.5 11.3751C24.4997 11.607 24.4074 11.8294 24.2434 11.9934C24.0794 12.1575 23.857 12.2498 23.625 12.2501H4.375C4.14303 12.2498 3.92064 12.1575 3.75661 11.9934C3.59258 11.8294 3.5003 11.607 3.5 11.3751V8.75006C3.5003 8.51809 3.59258 8.2957 3.75661 8.13167C3.92064 7.96764 4.14303 7.87536 4.375 7.87506H23.625C23.857 7.87536 24.0794 7.96764 24.2434 8.13167C24.4074 8.2957 24.4997 8.51809 24.5 8.75006V11.3751Z" fill="#EB8153"></path>
									</svg>
								</a>
								<div class="dropdown-menu dropdown-menu-right p-3">
									<div id="DZ_W_TimeLine11" class="widget-timeline dz-scroll style-1 height370">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="#">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge info">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
													<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
												</a>
											</li>
											<li>
												<div class="timeline-badge danger">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge success">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge warning">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown header-profile">
								<a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<img src="/dash/images/profile/pic1.jpg" width="20" alt="">
									<div class="header-info">
										<span>Administrator</span>
									</div>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ml-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
											<polyline points="22,6 12,13 2,6"></polyline>
										</svg>
										<span class="ml-2">Inbox </span>
									</a>
									<a href="page-login.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ml-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
				<div class="sub-header">
					<div class="d-flex align-items-center flex-wrap mr-auto">
						<h5 class="dashboard_bar">Dashboard</h5>
					</div>

				</div>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="deznav">
			<div class="deznav-scroll">
				<div class="main-profile">
					<div class="image-bx">
						<img src="/dash/images/Untitled-1.jpg" alt="">
						<a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
					</div>
					<h5 class="name"><span class="font-w400"></span>
						{{$data ->first_name}} {{$data ->last_name}}
					</h5>
					<p class="email" style="margin:auto;text-overflow:ellipsis ; white-space: nowrap;width:90%; overflow: hidden; "><a href="#" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">
							{{$data ->email}}
						</a>
					</p>
				</div>
				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
					<li>
						<a class="ai-icon" href="/gpay.com/dashboard/" aria-expanded="false">
							<i><img src="/dash/images/dash.png" alt="" style="width:30px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Dashboard</span>
						</a>
					</li>

					<li>
						<a class="ai-icon" href="/gpay.com/users/" aria-expanded="false">
							<i><img src="/dash/images/users.png" alt="" style="width:30px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Clients</span>
						</a>
					</li>
					<li>
						<a class="ai-icon" href="/gpay.com/projects/" aria-expanded="false">
							<i><img src="/dash/images/project.png" alt="" style="width:30px;position: relative;left:-8px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Projects</span>
						</a>
					</li>
					<li><a class="ai-icon" href="/gpay.com/analysis/" aria-expanded="false">
							<i><img src="/dash/images/analysis.png" alt="" style="width:30px;position: relative;left:-8px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Analysis</span>
						</a></li>
					<li> <a class="ai-icon" href="/gpay.com/transactions/" aria-expanded="false">
							<i><img src="/dash/images/trans.png" alt="" style="width:30px;position: relative;left:-8px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Transactions</span>
						</a></li>




					<li>
						<a class="ai-icon" href="/gpay.com/suggest&concern/" aria-expanded="false">
							<i><img src="/dash/images/sug.png" alt="" style="width:30px;position: relative;left:-8px"></i>
							<span class="nav-text" style="position: relative;left:-10px">Suggestions & Concerns</span>
						</a>

					</li>

				</ul>
				<div class="copyright" style="background: black;padding:10px;padding-top:20px;position:relative;bottom:-50px">
					<p style="color:white"> <strong>G-Pay Admin Dashboard<br></strong> © 2021 All Rights Reserved</p>
					<p class="fs-12" style="color: rgba(255, 255, 255, 0.808);">Powered by G-pay<span class="heart"></span></p>
				</div>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center flex-wrap mb-sm-5 mb-3">
					<h2 class="font-w600 mb-0 text-black">All Transactions</h2>
					<a href="javascript:void(0);" class="btn btn-outline-secondary ml-auto"><i class="las la-calendar scale5 mr-2"></i>Filter Periode</a>
				</div>
				<div class="row">
					<div class="col-xl-12">
						<div class="table-responsive table-hover fs-14">
							<table class="table display mb-4 dataTablesCard short-one card-table text-black" id="example5">
								<thead>
									<tr>
										<th>
											<div class="checkbox mr-0 align-self-center">
												<div class="custom-control custom-checkbox ">
													<input type="checkbox" class="custom-control-input" id="checkAll" required="">
													<label class="custom-control-label" for="checkAll"></label>
												</div>
											</div>
										</th>
										<th style="text-align: center;">Transac-ID</th>
										<th>Date</th>
										<th>From</th>
										<th>To</th>
										<th>Invoice</th>
										<th>Amount</th>
										
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="pr-0">
											<span class="bg-danger ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M7.99954 10.4687L21.1821 23.6513C21.7435 24.2127 22.6537 24.2127 23.2151 23.6513C23.7765 23.0899 23.7765 22.1798 23.2151 21.6184L10.0325 8.43582L13.4612 8.4441L13.4612 8.44409C14.2551 8.44598 14.9002 7.80394 14.9021 7.01004C14.904 6.21593 14.2617 5.57098 13.468 5.56905L13.4668 6.06905L13.468 5.56905L6.55703 5.55234L6.54969 5.55232L6.54737 5.55239C5.75771 5.55578 5.11953 6.19662 5.11616 6.98358L5.1161 6.98585L5.11612 6.99333L5.13282 13.9043L5.13282 13.9043C5.13475 14.6982 5.77979 15.3403 6.57378 15.3384C7.36769 15.3365 8.00975 14.6914 8.00787 13.8975L8.00787 13.8975L7.99954 10.4687Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/202 06:24 AM</td>
										<td>jhonlawrence@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>jamaica@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>

										</td>
										<td> <span class="text-black font-w600">+$5,553</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-danger float-right">CANCELED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>joskie234@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>kyla@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>

										</td>
										<td>
											<span class="text-black font-w700">-$12,768</span>
										</td>
									
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>Legazpi_antony@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="d-flex align-items-center">
													<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
													<span>lorenfecuadero123@gmail.com</span>
												</div>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>

										</td>
										<td> <span class="text-black font-w700">-$455</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-danger ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>cristy345qw@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>mia7685@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
									
										<td>
											<a href="javascript:void(0);" class="btn-link text-dark float-right">PENDING</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-danger ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>thomaslee@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>ingnacioyurag123@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success  ic-icon">
												<svg width="29" height="29" viewbox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M20.7529 19.1563L7.5703 5.97367C7.00891 5.41228 6.09876 5.41228 5.53737 5.97367C4.97598 6.53505 4.97598 7.44521 5.53737 8.0066L18.72 21.1892L15.2913 21.1809L15.2912 21.1809C14.4973 21.179 13.8522 21.8211 13.8503 22.615C13.8484 23.4091 14.4907 24.054 15.2844 24.056L15.2856 23.556L15.2844 24.056L22.1954 24.0727L22.2028 24.0727L22.2051 24.0726C22.9947 24.0692 23.6329 23.4284 23.6363 22.6414L23.6363 22.6391L23.6363 22.6317L23.6196 15.7207L23.6196 15.7207C23.6177 14.9268 22.9727 14.2847 22.1787 14.2866C21.3847 14.2885 20.7427 14.9336 20.7446 15.7275L20.7446 15.7275L20.7529 19.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>cindy4568wer@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>lorenfecuadero123@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td> <span class="text-black font-w700">-$12,768</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-dark float-right">PENDING</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-danger ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1.13282 8.90433L1.13282 8.90433L1.11612 1.99607C1.11609 1.99224 1.1161 1.98868 1.11615 1.98542M1.13282 8.90433L1.61615 1.99089L1.11615 1.99005C1.11617 1.97692 1.11672 1.96665 1.11697 1.96234L1.11706 1.96082C1.11686 1.96411 1.11633 1.97298 1.11616 1.98431C1.11616 1.98468 1.11615 1.98505 1.11615 1.98542M1.13282 8.90433C1.13475 9.69817 1.77979 10.3403 2.57378 10.3384C3.36769 10.3365 4.00975 9.6914 4.00787 8.89749L4.00787 8.89746L3.99954 5.46873M1.13282 8.90433L3.99954 5.46873M1.11615 1.98542C1.11853 1.19684 1.75837 0.554508 2.54973 0.552379C2.55142 0.552358 2.55317 0.552346 2.55498 0.552343L2.55703 0.552338L2.57419 0.552393L9.46803 0.569049L9.46682 1.06905L9.46804 0.569049C10.2617 0.570981 10.904 1.21593 10.9021 2.01004C10.9002 2.80394 10.2551 3.44597 9.4612 3.44409L9.46117 3.4441L6.03249 3.43582L19.2151 16.6184C19.7765 17.1798 19.7765 18.0899 19.2151 18.6513C18.6537 19.2127 17.7435 19.2127 17.1821 18.6513L3.99954 5.46873M1.11615 1.98542C1.11614 1.98743 1.11615 1.98943 1.11615 1.99144L3.99954 5.46873M2.55508 0.552375C2.55572 0.552375 2.55637 0.552373 2.55703 0.552376L2.55508 0.552375Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>lycasaldado@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>lorenfecuadero123@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">-$455</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-danger float-right">CANCELED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1.13282 8.90433L1.13282 8.90433L1.11612 1.99607C1.11609 1.99224 1.1161 1.98868 1.11615 1.98542M1.13282 8.90433L1.61615 1.99089L1.11615 1.99005C1.11617 1.97692 1.11672 1.96665 1.11697 1.96234L1.11706 1.96082C1.11686 1.96411 1.11633 1.97298 1.11616 1.98431C1.11616 1.98468 1.11615 1.98505 1.11615 1.98542M1.13282 8.90433C1.13475 9.69817 1.77979 10.3403 2.57378 10.3384C3.36769 10.3365 4.00975 9.6914 4.00787 8.89749L4.00787 8.89746L3.99954 5.46873M1.13282 8.90433L3.99954 5.46873M1.11615 1.98542C1.11853 1.19684 1.75837 0.554508 2.54973 0.552379C2.55142 0.552358 2.55317 0.552346 2.55498 0.552343L2.55703 0.552338L2.57419 0.552393L9.46803 0.569049L9.46682 1.06905L9.46804 0.569049C10.2617 0.570981 10.904 1.21593 10.9021 2.01004C10.9002 2.80394 10.2551 3.44597 9.4612 3.44409L9.46117 3.4441L6.03249 3.43582L19.2151 16.6184C19.7765 17.1798 19.7765 18.0899 19.2151 18.6513C18.6537 19.2127 17.7435 19.2127 17.1821 18.6513L3.99954 5.46873M1.11615 1.98542C1.11614 1.98743 1.11615 1.98943 1.11615 1.99144L3.99954 5.46873M2.55508 0.552375C2.55572 0.552375 2.55637 0.552373 2.55703 0.552376L2.55508 0.552375Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>liamang-mang234@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>lorenfecuadero123@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-dark float-right">PENDING</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6196 10.7207L19.6196 10.7207L19.6363 17.6289C19.6364 17.6328 19.6363 17.6363 19.6363 17.6396M19.6196 10.7207L19.1363 17.6341L19.6363 17.635C19.6363 17.6481 19.6357 17.6583 19.6355 17.6627L19.6354 17.6642C19.6356 17.6609 19.6361 17.652 19.6363 17.6407C19.6363 17.6403 19.6363 17.64 19.6363 17.6396M19.6196 10.7207C19.6177 9.92683 18.9727 9.28473 18.1787 9.28661C17.3847 9.28849 16.7427 9.9336 16.7446 10.7275L16.7446 10.7275L16.7529 14.1563M19.6196 10.7207L16.7529 14.1563M19.6363 17.6396C19.6339 18.4282 18.9941 19.0705 18.2027 19.0726C18.201 19.0726 18.1993 19.0727 18.1975 19.0727L18.1954 19.0727L18.1783 19.0726L11.2844 19.056L11.2856 18.556L11.2844 19.056C10.4907 19.054 9.84842 18.4091 9.85035 17.615C9.85225 16.8211 10.4973 16.179 11.2912 16.1809L11.2913 16.1809L14.72 16.1892L1.53737 3.0066C0.975979 2.44521 0.975979 1.53505 1.53737 0.973665C2.09876 0.412277 3.00891 0.412277 3.5703 0.973665L16.7529 14.1563M19.6363 17.6396C19.6363 17.6376 19.6363 17.6356 19.6363 17.6336L16.7529 14.1563M18.1974 19.0726C18.1967 19.0726 18.1961 19.0726 18.1954 19.0726L18.1974 19.0726Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>agustinsilva000@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
												<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>lorenfecuadero123@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
									
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M19.6196 10.7207L19.6196 10.7207L19.6363 17.6289C19.6364 17.6328 19.6363 17.6363 19.6363 17.6396M19.6196 10.7207L19.1363 17.6341L19.6363 17.635C19.6363 17.6481 19.6357 17.6583 19.6355 17.6627L19.6354 17.6642C19.6356 17.6609 19.6361 17.652 19.6363 17.6407C19.6363 17.6403 19.6363 17.64 19.6363 17.6396M19.6196 10.7207C19.6177 9.92683 18.9727 9.28473 18.1787 9.28661C17.3847 9.28849 16.7427 9.9336 16.7446 10.7275L16.7446 10.7275L16.7529 14.1563M19.6196 10.7207L16.7529 14.1563M19.6363 17.6396C19.6339 18.4282 18.9941 19.0705 18.2027 19.0726C18.201 19.0726 18.1993 19.0727 18.1975 19.0727L18.1954 19.0727L18.1783 19.0726L11.2844 19.056L11.2856 18.556L11.2844 19.056C10.4907 19.054 9.84842 18.4091 9.85035 17.615C9.85225 16.8211 10.4973 16.179 11.2912 16.1809L11.2913 16.1809L14.72 16.1892L1.53737 3.0066C0.975979 2.44521 0.975979 1.53505 1.53737 0.973665C2.09876 0.412277 3.00891 0.412277 3.5703 0.973665L16.7529 14.1563M19.6363 17.6396C19.6363 17.6376 19.6363 17.6356 19.6363 17.6336L16.7529 14.1563M18.1974 19.0726C18.1967 19.0726 18.1961 19.0726 18.1954 19.0726L18.1974 19.0726Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>larafuentes@gmail.com</td>
										<td>
											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
											<span>lorenfecero123@gmail.com</span>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">-$12,768</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-danger ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M1.13282 8.90433L1.13282 8.90433L1.11612 1.99607C1.11609 1.99224 1.1161 1.98868 1.11615 1.98542M1.13282 8.90433L1.61615 1.99089L1.11615 1.99005C1.11617 1.97692 1.11672 1.96665 1.11697 1.96234L1.11706 1.96082C1.11686 1.96411 1.11633 1.97298 1.11616 1.98431C1.11616 1.98468 1.11615 1.98505 1.11615 1.98542M1.13282 8.90433C1.13475 9.69817 1.77979 10.3403 2.57378 10.3384C3.36769 10.3365 4.00975 9.6914 4.00787 8.89749L4.00787 8.89746L3.99954 5.46873M1.13282 8.90433L3.99954 5.46873M1.11615 1.98542C1.11853 1.19684 1.75837 0.554508 2.54973 0.552379C2.55142 0.552358 2.55317 0.552346 2.55498 0.552343L2.55703 0.552338L2.57419 0.552393L9.46803 0.569049L9.46682 1.06905L9.46804 0.569049C10.2617 0.570981 10.904 1.21593 10.9021 2.01004C10.9002 2.80394 10.2551 3.44597 9.4612 3.44409L9.46117 3.4441L6.03249 3.43582L19.2151 16.6184C19.7765 17.1798 19.7765 18.0899 19.2151 18.6513C18.6537 19.2127 17.7435 19.2127 17.1821 18.6513L3.99954 5.46873M1.11615 1.98542C1.11614 1.98743 1.11615 1.98943 1.11615 1.99144L3.99954 5.46873M2.55508 0.552375C2.55572 0.552375 2.55637 0.552373 2.55703 0.552376L2.55508 0.552375Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>caracotdacotjesamea@gmail.com</td>
										<td>

											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
											<span>lorenfe5674@gmail.com</span>

										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">-$455</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.7529 14.1563L3.5703 0.973665C3.00891 0.412277 2.09876 0.412277 1.53737 0.973665C0.975979 1.53505 0.975979 2.44521 1.53737 3.0066L14.72 16.1892L11.2913 16.1809L11.2912 16.1809C10.4973 16.179 9.85225 16.8211 9.85035 17.615C9.84842 18.4091 10.4907 19.054 11.2844 19.056L11.2856 18.556L11.2844 19.056L18.1954 19.0727L18.2028 19.0727L18.2051 19.0726C18.9947 19.0692 19.6329 18.4284 19.6363 17.6414L19.6363 17.6391L19.6363 17.6317L19.6196 10.7207L19.6196 10.7207C19.6177 9.92683 18.9727 9.28473 18.1787 9.28661C17.3847 9.28849 16.7427 9.9336 16.7446 10.7275L16.7446 10.7275L16.7529 14.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>anamaetano@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>jasonlay3@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.7529 14.1563L3.5703 0.973665C3.00891 0.412277 2.09876 0.412277 1.53737 0.973665C0.975979 1.53505 0.975979 2.44521 1.53737 3.0066L14.72 16.1892L11.2913 16.1809L11.2912 16.1809C10.4973 16.179 9.85225 16.8211 9.85035 17.615C9.84842 18.4091 10.4907 19.054 11.2844 19.056L11.2856 18.556L11.2844 19.056L18.1954 19.0727L18.2028 19.0727L18.2051 19.0726C18.9947 19.0692 19.6329 18.4284 19.6363 17.6414L19.6363 17.6391L19.6363 17.6317L19.6196 10.7207L19.6196 10.7207C19.6177 9.92683 18.9727 9.28473 18.1787 9.28661C17.3847 9.28849 16.7427 9.9336 16.7446 10.7275L16.7446 10.7275L16.7529 14.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#12415346563475</td>
										<td>2/5/2020 06:24 AM</td>
										<td>cassandramay@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>jessicatorres@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+$5,553</span>
										</td>
										
										<td>
											<a href="javascript:void(0);" class="btn-link text-success float-right">COMPLETED</a>
										</td>
									</tr>
									<tr>
										<td class="pr-0">
											<span class="bg-success ic-icon">
												<svg width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.7529 14.1563L3.5703 0.973665C3.00891 0.412277 2.09876 0.412277 1.53737 0.973665C0.975979 1.53505 0.975979 2.44521 1.53737 3.0066L14.72 16.1892L11.2913 16.1809L11.2912 16.1809C10.4973 16.179 9.85225 16.8211 9.85035 17.615C9.84842 18.4091 10.4907 19.054 11.2844 19.056L11.2856 18.556L11.2844 19.056L18.1954 19.0727L18.2028 19.0727L18.2051 19.0726C18.9947 19.0692 19.6329 18.4284 19.6363 17.6414L19.6363 17.6391L19.6363 17.6317L19.6196 10.7207L19.6196 10.7207C19.6177 9.92683 18.9727 9.28473 18.1787 9.28661C17.3847 9.28849 16.7427 9.9336 16.7446 10.7275L16.7446 10.7275L16.7529 14.1563Z" fill="white" stroke="white"></path>
												</svg>
											</span>
										</td>
										<td>#124153465125511</td>
										<td>2/5/2020 06:24 AM</td>
										<td>alyza@gmail.com</td>
										<td>
											<div class="d-flex align-items-center">
											<img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" width="36" height="36" class="rounded-circle mr-2 width36 height36" alt="">
												<span>lesley888@gmail.com</span>
											</div>
										</td>
										<td class="wspace-no">
											<a href="/gpay.com/transactions/invoice">
												<small class="text-black" style="font-weight: bold;">show invoice</small>
											</a>
										</td>
										<td>
											<span class="text-black font-w700">+987</span>
										</td>
									
										<td>
											<a href="javascript:void(0);" class="btn-link text-dark float-right">PENDING</a>
										</td>
									</tr>
								</tbody>
							</table>
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
	<div class="footer">
		<div class="copyright">
			<p style="color: black !important;font-weight:600">Copyright © Designed &amp; Developed by <a href="#" target="_blank">G-Pay</a> 2022
			</p>
		</div>
	</div>
	<!--**********************************
            Footer end
        ***********************************-->

	<!--**********************************
           Support ticket button start
        ***********************************-->

	<!--**********************************
           Support ticket button end
        ***********************************-->


	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ URL::asset('/dash/vendor/global/global.min.js') }}"></script>
	<script src="{{ URL::asset('/dash/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<!-- <script src="{{ URL::asset('/dash/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::asset('/dash/js/plugins-init/datatables.init.js') }}"></script> -->
	<script src="{{ URL::asset('/dash/js/custom.min.js') }}"></script>
	<script src="{{ URL::asset('/dash/js/deznav-init.js') }}"></script>
	<script src="{{ URL::asset('/dash/js/demo.js') }}"></script>
	<script src="{{ URL::asset('/dash/js/styleSwitcher.js') }}"></script>

</body>

</html>