<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>IPI405 S23 C3</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

	<style>
		.subtitle{
			letter-spacing: 0px !important;
		}

    </style>

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="/">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu" dir="rtl">
							<ul>
								<li class="current-list-item"><a href="/">الرئيسية</a></li>
								<li><a href="/category">الأقسام</a>
									<ul class="sub-menu">
										<li><a href="/addcategory">إضافة قسم</a></li>
										<li><a href="/addproduct">إضافة منتج</a></li>
									</ul>
								</li>

								<li><a href="news.html">الاخبار</a>
									<ul class="sub-menu">
										<li><a href="news.html">News</a></li>
										<li><a href="single-news.html">Single News</a></li>
									</ul>
								</li>
								<li><a href="/contact">اتصل بنا</a></li>
                                <li><a href="/about">نبذة</a></li>


								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->







@yield('content')




	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container" >
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title" dir="rtl">
						<h3 ><span class="orange-text">بإشراف الدكتور:</span> شفيع بيطار </h3>
						<p>عمل الطلاب</p>
					</div>
				</div>
			</div>
			<div class="row" >
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0 ">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
                            <i class="fas fa-regular fa-user" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Anas Al-Najjar</h3>
							<p>anas_122841</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
                            <i class="fas fa-regular fa-user" style="color: #f28123;"></i>
						</div>
						<div class="content">
							<h3>Hiba Daood</h3>
							<p>Hiba_216478</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">من نحن</h2>
						<p>نحن فريق من الطلاب قاموا بإنجاز هذا المشروع لينالوا على اعلى علامة لمشروع التخرج</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">ابقى على تواصل</h2>
						<ul>
							<li>24/7, الدعم المباشر.</li>
							<li>anas_122841@svuonline.org</li>
							<li>anas_122841@svuonline.org</li>
							<li>+00966 59 906 4598</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">الصفحات</h2>
						<ul>
							<li><a href="/">الرئيسية</a></li>
							<li><a href="about.html">نبذة عنا</a></li>
							<li><a href="services.html">المتجر الإلكتروني</a></li>
							<li><a href="news.html">الأخبار</a></li>
							<li><a href="contact.html">إتصل بنا</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">اشترك الأن</h2>
						<p>اشترك بنشرتنا البريدية للحصول على أخر العروض والأخبار.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>جميع الحقوق محفوظة &copy; 2024 - <a href="https://svuonline.org/">IPI405_S23</a>,  All Rights Reserved.<br>
						تم التصميم بواسطة الطالبين أنس النجار وهبة داوود - <a href="https://themewagon.com/"></a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="https://www.facebook.com/anas.najjar.71697" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/anas_alnajjar2/" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="https://www.facebook.com/profile.php?id=100008920744659" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.instagram.com/hibadauod/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
