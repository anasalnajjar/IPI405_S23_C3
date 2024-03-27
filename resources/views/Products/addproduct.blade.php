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
                    <div class="col-lg-8 mb-5 mb-lg-0">

                         <div id="form_status"></div>
                        <div class="contact-form">
                            <form type="POST" id="fruitkha-contact" onsubmit="return valid_datas( this );">
                                <p>
                                    <input type="text" width="100%" placeholder="الأسم" name="name" id="name">
                                </p>
                                <p style="display: flex;">
                                    <input type="number" width="50%" class="mr-5" placeholder="السعر" name="Price" id="Price">
                                    <input type="number" width="50%" placeholder="الكمية" name="Quantity" id="Quantity">
                                </p>
                                <p><textarea name="description" id="description" cols="30" rows="10" placeholder="اكتب وصفاً للمنتج"></textarea></p>
                                <input type="hidden" name="token" value="FsWga4&amp;@f6aw">
                                <p><input type="submit" value="Submit"></p>
                            </form>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <!-- end product section -->



@endsection
