@extends('layouts.staticlayout')


@section('content')
	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">إصنع علامتك التجارية</p>
								<h1>قدم لعملائك قيمة تذكرهم بك</h1>
								<div class="hero-btns">
									<a href="/product" class="boxed-btn">تسوق الان</a>
									<a href="/contact" class="bordered-btn">إتصل بنا</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">مطبوعاتك جاهزة </p>
								<h2 style="color: white">نجهز لكم مطبوعاتكم بأدق التفاصيل وبجودة ترضيكم</h2>
								<div class="hero-btns">
									<a href="shop.html" class="boxed-btn">ارفع الملفات</a>
									<a href="/contact" class="bordered-btn">إتصل بنا</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- end home page slider -->


    	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">تصفح</span> خدماتنا</h3>
						<p>تمتع بتجربة تسوق أدوات القرطاسية بحلة جديدة والحصول على مطبوعاتك بأسرع وقت ممكن.</p>
					</div>
				</div>
			</div>

			<div class="row">
                @foreach ($categories as $item)
                <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="/product/{{$item ->id }}"><img src="{{url($item -> imagepath)}}" style="max-height: 250px; min-hight:250px" alt=""></a>
						</div>
						<h3>{{$item -> name}} </h3>
                        <p>{{$item -> description}}</p>
					</div>
				</div>
                @endforeach




			</div>
		</div>
	</div>
	<!-- end product section -->


@endsection
