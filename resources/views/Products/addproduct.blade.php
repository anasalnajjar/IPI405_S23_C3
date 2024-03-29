@extends('Layouts.staticlayout')

@section('content')

    	<!-- product section -->
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="section-title">
                            <h3><span class="orange-text">أضف</span> منتج</h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 mb-5 mb-lg-0">

                         <div id="form_status"></div>
                        <div class="contact-form">
                            <form method="post" action="/storeproduct"  >
                                @csrf()
                                <p>
                                    <input type="text" required style="width: 100%" placeholder="الأسم" name="name" id="name" value="{{old('name')}}">
                                 <span class="text-dangers">
                                    @error('name')
                                        {{$message}}
                                    @enderror
                                 </span>
                                </p>
                                <p style="display: flex;">
                                    <input type="number" required style="width: 50%" class="mr-5" placeholder="السعر" name="price" id="Price" value="{{old('price')}}">
                                    <span class="text-dangers">
                                        @error('price')
                                            {{$message}}
                                        @enderror
                                     </span>
                                    <input type="number" required style="width: 50%" placeholder="الكمية" name="quantity" id="Quantity" value="{{old('quantity')}}">
                                    <span class="text-dangers">
                                        @error('quantity')
                                            {{$message}}
                                        @enderror
                                     </span>
                                </p>
                                <p><textarea name="description" value="{{old('description')}}" required id="description" cols="30" rows="10" placeholder="اكتب وصفاً للمنتج"></textarea>
                                    <span class="text-dangers">
                                        @error('description')
                                            {{$message}}
                                        @enderror
                                     </span>
                                </p>
                                <p><input type="submit" value="حفظ"></p>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!-- end product section -->



@endsection
