@extends('Layouts.staticlayout')

@section('content')

    	<!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <h1 style="color: white">الأقسام</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->


	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            @foreach ($categories as $item)
                            <li data-filter="._{{$item-> id}}"> {{$item-> name}} </li>
                            @endforeach
                            <li class="active" data-filter="*">الكل</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
                @foreach ($products as $item)
                <div class="col-lg-4 col-md-6 text-center _{{$item->category_id}}">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img style="max-height:250px; min-height:250px " src="{{asset($item -> imagepath)}}" alt=""></a>
						</div>
						<h3>{{$item -> name}}</h3>
						<p class="product-price"><span>Price</span> {{$item -> price}}SP </p>
						<p class="product-price"><span>Quantity</span> {{$item -> quantity}} </p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
                @endforeach

			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
@endsection
