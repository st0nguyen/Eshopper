@extends('layout')
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Sản phẩm mới nhất</h2>
        @foreach($all_product as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_slug)}}">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" width="220" height="250" alt=""/>
                                <h2>{{number_format($product->product_price).' '.'VNĐ'}}</h2>
                                <p >{{$product->product_name}}</p>
                                <a href="{{URL::to('/add-cart/'.$product->product_id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm
                                    giỏ hàng</a>
                            </div>

                        </div>
                    </a>
                    <div class="choose">
                        <ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

    </div><!--features_items-->
    <!--/recommended_items-->
    <nav aria-label="page-navigation">
        {!! $all_product->links() !!}
    </nav>

@endsection
